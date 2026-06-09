<?php 
$pageTitle = 'EventPlan Pro - Dashboard';

// Fetch dynamic data
$stats = getDashboardStats($pdo);
$upcomingEvents = getUpcomingEvents($pdo);
$priorityTasks = getHighPriorityTasks($pdo);
$recentActivities = getRecentActivities($pdo);

// Mock user for now, but name can be dynamic if we had session
// Attempt to get user from database if possible (shared logic with header)
if ($pdo) {
    $stmt = $pdo->prepare("SELECT full_name FROM users WHERE email = ?");
    $stmt->execute(['alex.thompson@eventpro.com']);
    $userRow = $stmt->fetch();
    $userName = $userRow ? explode(' ', $userRow['full_name'])[0] : "Alex";
} else {
    $userName = "Alex";
}

ob_start(); 
?> 
<div class="max-w-7xl mx-auto space-y-lg"> 
<!-- Welcome Section --> 
<div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-md"> 
<div> 
<h2 class="font-headline-lg text-headline-lg text-primary">Overview</h2> 
<p class="font-body-md text-body-md text-on-surface-variant">Good morning, <?php echo htmlspecialchars($userName); ?>. Here's what's happening with your events today.</p>
</div> 
<button class="bg-primary text-on-primary px-lg py-md rounded-lg font-label-md text-label-md flex items-center gap-sm hover:opacity-90 transition-opacity shadow-sm"> 
<span class="material-symbols-outlined">add_circle</span> 
                        Create New Event 
                    </button> 
</div> 
<!-- Summary Cards (Bento-ish Grid) --> 
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter"> 
<!-- Total Events --> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-surface-container"> 
<div class="flex items-center justify-between mb-md"> 
<div class="p-sm bg-primary-container/10 rounded-lg"> 
<span class="material-symbols-outlined text-primary">event_available</span> 
</div> 
<span class="text-primary font-label-sm">+2 this month</span> 
</div> 
<h3 class="font-label-md text-label-md text-on-surface-variant">Total Events</h3> 
<p class="font-headline-md text-headline-md text-on-surface"><?php echo number_format($stats['total_events']); ?></p>
</div> 
<!-- Total Guests --> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-surface-container"> 
<div class="flex items-center justify-between mb-md"> 
<div class="p-sm bg-secondary-container/20 rounded-lg"> 
<span class="material-symbols-outlined text-secondary">group</span> 
</div> 
<span class="text-secondary font-label-sm">Active RSVP</span> 
</div> 
<h3 class="font-label-md text-label-md text-on-surface-variant">Total Guests</h3> 
<p class="font-headline-md text-headline-md text-on-surface"><?php echo number_format($stats['total_guests']); ?></p>
</div> 
<!-- Total Budget --> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-surface-container"> 
<div class="flex items-center justify-between mb-md"> 
<div class="p-sm bg-tertiary-container/10 rounded-lg"> 
<span class="material-symbols-outlined text-tertiary">account_balance_wallet</span> 
</div> 
<?php
    $budgetUtilized = $stats['total_budget'] > 0 ? round(($stats['total_payments'] / $stats['total_budget']) * 100) : 0;
?>
<span class="text-tertiary font-label-sm"><?php echo $budgetUtilized; ?>% utilized</span>
</div> 
<h3 class="font-label-md text-label-md text-on-surface-variant">Total Budget</h3> 
<p class="font-headline-md text-headline-md text-on-surface">$<?php echo number_format($stats['total_budget']); ?></p>
</div> 
<!-- Total Payments --> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-surface-container"> 
<div class="flex items-center justify-between mb-md"> 
<div class="p-sm bg-primary-container/10 rounded-lg"> 
<span class="material-symbols-outlined text-primary">payments</span> 
</div> 
<span class="text-primary font-label-sm">Secured</span> 
</div> 
<h3 class="font-label-md text-label-md text-on-surface-variant">Total Payments</h3> 
<p class="font-headline-md text-headline-md text-on-surface">$<?php echo number_format($stats['total_payments']); ?></p>
</div> 
</div> 
<!-- Main Layout Grid --> 
<div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter"> 
<!-- Upcoming Events (Left 2 Columns) --> 
<div class="lg:col-span-2 space-y-md"> 
<div class="flex items-center justify-between"> 
<h3 class="font-headline-sm text-headline-sm text-on-surface">Upcoming Events</h3> 
<a class="text-primary font-label-md hover:underline" href="#">View All</a> 
</div> 
<div class="grid grid-cols-1 md:grid-cols-2 gap-md"> 
<?php if (empty($upcomingEvents)): ?>
    <p class="col-span-2 text-on-surface-variant italic">No upcoming events scheduled.</p>
<?php else: ?>
    <?php foreach ($upcomingEvents as $event): ?>
    <!-- Event Card -->
    <div class="bg-surface-container-lowest rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] overflow-hidden border border-surface-container group">
    <div class="h-32 overflow-hidden">
    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="<?php echo htmlspecialchars($event['image_url']); ?>"/>
    </div>
    <div class="p-lg">
    <?php
        $date = new DateTime($event['start_date']);
        $diff = (new DateTime())->diff($date);
        $days = $diff->days;
        $tagClass = $days <= 3 ? 'bg-primary-container/20 text-primary' : 'bg-secondary-container/20 text-secondary';
        $tagText = $days == 0 ? 'Today' : ($days == 1 ? 'Tomorrow' : "In $days Days");
    ?>
    <span class="<?php echo $tagClass; ?> px-sm py-1 rounded-full font-label-sm text-label-sm"><?php echo $tagText; ?></span>
    <h4 class="font-headline-sm text-headline-sm mt-sm mb-xs"><?php echo htmlspecialchars($event['name']); ?></h4>
    <div class="flex items-center gap-sm text-on-surface-variant font-body-sm text-body-sm mt-md">
    <span class="material-symbols-outlined text-sm" style="font-size: 18px;">location_on</span>
        <?php echo htmlspecialchars($event['venue_name']); ?>
    </div>
    <div class="flex items-center gap-sm text-on-surface-variant font-body-sm text-body-sm mt-xs">
    <span class="material-symbols-outlined text-sm" style="font-size: 18px;">schedule</span>
        <?php echo $date->format('h:i A'); ?> - <?php echo (new DateTime($event['end_date']))->format('h:i A'); ?>
    </div>
    <div class="mt-lg pt-md border-t border-surface-container flex items-center justify-between">
    <div class="flex -space-x-2">
    <img class="w-8 h-8 rounded-full border-2 border-surface-container-lowest" src="https://i.pravatar.cc/100?u=1"/>
    <img class="w-8 h-8 rounded-full border-2 border-surface-container-lowest" src="https://i.pravatar.cc/100?u=2"/>
    <div class="w-8 h-8 rounded-full bg-surface-container border-2 border-surface-container-lowest flex items-center justify-center text-[10px] font-bold text-on-surface-variant">+42</div>
    </div>
    <a href="index.php?page=edit-event&id=<?php echo $event['id']; ?>" class="text-primary font-label-md flex items-center gap-xs">Manage <span class="material-symbols-outlined" style="font-size: 18px;">chevron_right</span></a>
    </div>
    </div>
    </div>
    <?php endforeach; ?>
<?php endif; ?>
</div> 
<!-- Mini Task List --> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-surface-container mt-md"> 
<h3 class="font-headline-sm text-headline-sm mb-md">High Priority Tasks</h3> 
<div class="space-y-sm"> 
<?php if (empty($priorityTasks)): ?>
    <p class="text-on-surface-variant italic p-md">No high priority tasks.</p>
<?php else: ?>
    <?php foreach ($priorityTasks as $task): ?>
    <div class="flex items-center justify-between p-md bg-surface-container rounded-lg">
    <div class="flex items-center gap-md">
    <span class="material-symbols-outlined text-error">priority_high</span>
    <p class="font-body-md text-body-md"><?php echo htmlspecialchars($task['description']); ?></p>
    </div>
    <span class="text-on-surface-variant font-label-sm">
        <?php
            $dueDate = new DateTime($task['due_date']);
            $today = new DateTime();
            if ($dueDate->format('Y-m-d') == $today->format('Y-m-d')) echo 'Today';
            else echo $dueDate->format('M d');
        ?>
    </span>
    </div>
    <?php endforeach; ?>
<?php endif; ?>
</div> 
</div> 
</div> 
<!-- Recent Activities (Right Column) --> 
<div class="space-y-md"> 
<div class="flex items-center justify-between"> 
<h3 class="font-headline-sm text-headline-sm text-on-surface">Recent Activities</h3> 
</div> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-surface-container min-h-[400px]"> 
<div class="relative space-y-lg before:absolute before:left-[11px] before:top-2 before:bottom-2 before:w-[2px] before:bg-surface-container-high"> 
<?php if (empty($recentActivities)): ?>
    <p class="text-on-surface-variant italic pl-lg">No recent activity.</p>
<?php else: ?>
    <?php foreach ($recentActivities as $activity): ?>
    <?php
        $icon = 'info';
        $bgColor = 'bg-primary';
        switch($activity['type']) {
            case 'payment': $icon = 'attach_money'; $bgColor = 'bg-primary'; break;
            case 'guest': $icon = 'person_add'; $bgColor = 'bg-secondary'; break;
            case 'update': $icon = 'edit'; $bgColor = 'bg-tertiary'; break;
            case 'mail': $icon = 'mail'; $bgColor = 'bg-on-surface-variant'; break;
            case 'check': $icon = 'check'; $bgColor = 'bg-primary'; break;
        }
    ?>
    <!-- Activity Item -->
    <div class="relative pl-lg">
    <div class="absolute left-0 top-1 w-6 h-6 rounded-full <?php echo $bgColor; ?> flex items-center justify-center z-10">
    <span class="material-symbols-outlined text-[14px] text-white">
        <?php echo $icon; ?>
    </span>
    </div>
    <div>
    <p class="font-body-md text-body-md text-on-surface"><?php echo htmlspecialchars($activity['description']); ?></p>
    <p class="font-label-sm text-label-sm text-on-surface-variant mt-xs"><?php echo timeAgo($activity['created_at']); ?></p>
    </div>
    </div>
    <?php endforeach; ?>
<?php endif; ?>
</div> 
<button class="w-full mt-lg py-md border border-outline-variant rounded-lg font-label-md text-label-md hover:bg-surface-container transition-colors">Show All Activity</button> 
</div> 
<!-- Budget Snapshot Chart Placeholder --> 
<div class="bg-primary p-lg rounded-xl shadow-lg text-on-primary relative overflow-hidden"> 
<div class="relative z-10"> 
<h4 class="font-label-md text-label-md opacity-80">Remaining Budget</h4> 
<p class="font-headline-lg text-headline-lg">$<?php echo number_format($stats['total_budget'] - $stats['total_payments']); ?></p>
<div class="mt-md w-full bg-primary-fixed/20 h-2 rounded-full overflow-hidden"> 
<div class="bg-primary-fixed h-full" style="width: <?php echo $budgetUtilized; ?>%"></div>
</div> 
<p class="font-label-sm text-label-sm mt-sm"><?php echo $budgetUtilized; ?>% of total budget used</p>
</div> 
<div class="absolute -right-4 -bottom-4 opacity-10"> 
<span class="material-symbols-outlined" style="font-size: 120px;">monitoring</span> 
</div> 
</div> 
</div> 
</div> 
</div> 
<?php 
$content = ob_get_clean(); 
include __DIR__ . '/../templates/layout.php'; 
?>
