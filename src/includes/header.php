<header class="fixed top-0 left-[280px] right-0 h-16 bg-surface-container-lowest flex justify-between items-center px-lg shadow-sm z-40"> 
<div class="flex items-center gap-md bg-surface-container rounded-full px-md py-xs w-96"> 
<span class="material-symbols-outlined text-on-surface-variant">search</span> 
<input class="bg-transparent border-none focus:ring-0 w-full font-body-sm text-body-sm text-on-surface" placeholder="Search events, guests, or tasks..." type="text"/> 
</div> 
<div class="flex items-center gap-md"> 
<button class="p-sm rounded-full text-on-surface-variant hover:bg-surface-container transition-colors active:scale-95"> 
<span class="material-symbols-outlined">notifications</span> 
</button> 
<button class="p-sm rounded-full text-on-surface-variant hover:bg-surface-container transition-colors active:scale-95"> 
<span class="material-symbols-outlined">settings</span> 
</button> 
<div class="h-8 w-px bg-outline-variant mx-sm"></div> 
<?php
// Mock user data since we don't have authentication yet
// In a real app, this would come from $_SESSION
if ($pdo) {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute(['alex.thompson@eventpro.com']);
    $user = $stmt->fetch();
} else {
    $user = [
        'full_name' => 'Alex Thompson',
        'role' => 'Senior Event Planner',
        'image_url' => 'https://i.pravatar.cc/100?u=alex'
    ];
}
?>
<div class="flex items-center gap-sm"> 
<div class="text-right hidden lg:block"> 
<p class="font-label-md text-label-md text-on-surface font-bold"><?php echo htmlspecialchars($user['full_name']); ?></p>
<p class="font-label-sm text-label-sm text-on-surface-variant"><?php echo htmlspecialchars($user['role']); ?></p>
</div> 
<img alt="User profile avatar" class="w-10 h-10 rounded-full border border-outline-variant" src="<?php echo htmlspecialchars($user['image_url']); ?>"/>
</div> 
</div> 
</header> 
