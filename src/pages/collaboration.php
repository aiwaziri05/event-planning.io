<?php 
$pageTitle = 'Team Collaboration - EventPlan Pro';
ob_start(); 
?> 
<div class="max-w-7xl mx-auto"> 
<!-- Page Header with FAB Action --> 
<div class="flex justify-between items-end mb-xl"> 
<div> 
<h2 class="font-headline-lg text-headline-lg text-on-background">Collaboration Hub</h2> 
<p class="font-body-md text-body-md text-on-surface-variant">Manage your event planning team and track real-time updates.</p> 
</div> 
<button class="bg-primary text-on-primary px-lg py-md rounded-lg font-label-md flex items-center gap-sm shadow-md hover:bg-surface-tint transition-all active:scale-95"> 
<span class="material-symbols-outlined">person_add</span> 
                    Add Team Member 
                </button> 
</div> 
<!-- Bento Grid Layout --> 
<div class="grid grid-cols-12 gap-lg"> 
<!-- Summary Cards Section --> 
<div class="col-span-12 grid grid-cols-1 md:grid-cols-4 gap-md mb-md"> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-outline-variant/30"> 
<p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Total Members</p> 
<h3 class="font-headline-md text-headline-md text-primary mt-2">12</h3> 
</div> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-outline-variant/30"> 
<p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Active Planners</p> 
<h3 class="font-headline-md text-headline-md text-primary mt-2">4</h3> 
</div> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-outline-variant/30"> 
<p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Open Tasks</p> 
<h3 class="font-headline-md text-headline-md text-tertiary mt-2">28</h3> 
</div> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-outline-variant/30"> 
<p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Pending Invites</p> 
<h3 class="font-headline-md text-headline-md text-secondary mt-2">3</h3> 
</div> 
</div> 
<!-- Team Members Table Container (Asymmetric Content) --> 
<div class="col-span-12 lg:col-span-8 bg-surface-container-lowest rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] overflow-hidden border border-outline-variant/30"> 
<div class="p-lg border-b border-surface-container"> 
<h4 class="font-headline-sm text-headline-sm text-on-background">Team Directory</h4> 
</div> 
<div class="overflow-x-auto"> 
<table class="w-full text-left"> 
<thead class="bg-surface-container-low"> 
<tr> 
<th class="px-lg py-md font-label-sm text-label-sm text-on-surface-variant uppercase">Name</th> 
<th class="px-lg py-md font-label-sm text-label-sm text-on-surface-variant uppercase">Email</th> 
<th class="px-lg py-md font-label-sm text-label-sm text-on-surface-variant uppercase">Role</th> 
<th class="px-lg py-md font-label-sm text-label-sm text-on-surface-variant uppercase text-right">Actions</th> 
</tr> 
</thead> 
<tbody class="divide-y divide-surface-container-low"> 
<!-- Row 1 --> 
<tr class="hover:bg-surface-container-lowest/50 transition-colors"> 
<td class="px-lg py-md"> 
<div class="flex items-center gap-md"> 
<div class="w-8 h-8 rounded-full bg-primary-fixed flex items-center justify-center text-on-primary-fixed font-bold text-xs">JD</div> 
<span class="font-body-md text-body-md font-semibold">Jane Doe</span> 
</div> 
</td> 
<td class="px-lg py-md font-body-sm text-body-sm text-on-surface-variant">jane.doe@eventpro.com</td> 
<td class="px-lg py-md"> 
<span class="px-sm py-1 rounded-full bg-primary-container/10 text-primary text-xs font-bold uppercase tracking-tighter">Lead Planner</span> 
</td> 
<td class="px-lg py-md text-right"> 
<button class="text-primary hover:underline font-label-sm">Edit</button> 
</td> 
</tr> 
<!-- Row 2 --> 
<tr class="hover:bg-surface-container-lowest/50 transition-colors"> 
<td class="px-lg py-md"> 
<div class="flex items-center gap-md"> 
<div class="w-8 h-8 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed font-bold text-xs">MR</div> 
<span class="font-body-md text-body-md font-semibold">Marcus Rivera</span> 
</div> 
</td> 
<td class="px-lg py-md font-body-sm text-body-sm text-on-surface-variant">m.rivera@eventpro.com</td> 
<td class="px-lg py-md"> 
<span class="px-sm py-1 rounded-full bg-secondary-container/30 text-secondary text-xs font-bold uppercase tracking-tighter">Assistant</span> 
</td> 
<td class="px-lg py-md text-right"> 
<button class="text-primary hover:underline font-label-sm">Edit</button> 
</td> 
</tr> 
<!-- Row 3 --> 
<tr class="hover:bg-surface-container-lowest/50 transition-colors"> 
<td class="px-lg py-md"> 
<div class="flex items-center gap-md"> 
<div class="w-8 h-8 rounded-full bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed font-bold text-xs">SK</div> 
<span class="font-body-md text-body-md font-semibold">Sarah Kim</span> 
</div> 
</td> 
<td class="px-lg py-md font-body-sm text-body-sm text-on-surface-variant">skim@eventpro.com</td> 
<td class="px-lg py-md"> 
<span class="px-sm py-1 rounded-full bg-primary-container/10 text-primary text-xs font-bold uppercase tracking-tighter">Planner</span> 
</td> 
<td class="px-lg py-md text-right"> 
<button class="text-primary hover:underline font-label-sm">Edit</button> 
</td> 
</tr> 
<!-- Row 4 --> 
<tr class="hover:bg-surface-container-lowest/50 transition-colors"> 
<td class="px-lg py-md"> 
<div class="flex items-center gap-md"> 
<div class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center text-on-surface-variant font-bold text-xs">AW</div> 
<span class="font-body-md text-body-md font-semibold">Alex Wong</span> 
</div> 
</td> 
<td class="px-lg py-md font-body-sm text-body-sm text-on-surface-variant">alex.w@eventpro.com</td> 
<td class="px-lg py-md"> 
<span class="px-sm py-1 rounded-full bg-outline-variant/20 text-outline text-xs font-bold uppercase tracking-tighter">Logistics</span> 
</td> 
<td class="px-lg py-md text-right"> 
<button class="text-primary hover:underline font-label-sm">Edit</button> 
</td> 
</tr> 
</tbody> 
</table> 
</div> 
<div class="p-md bg-surface-container-low/30 text-center"> 
<button class="font-label-md text-primary hover:bg-primary-container/10 px-md py-sm rounded-lg transition-colors">View All Members</button> 
</div> 
</div> 
<!-- Activity Feed (Glassmorphism inspired sidebar card) --> 
<div class="col-span-12 lg:col-span-4 flex flex-col gap-lg"> 
<div class="bg-surface-container-lowest/80 backdrop-blur-md rounded-xl p-lg shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-outline-variant/30"> 
<div class="flex items-center justify-between mb-lg"> 
<h4 class="font-headline-sm text-headline-sm text-on-background">Recent Activity</h4> 
<span class="material-symbols-outlined text-outline">history</span> 
</div> 
<div class="space-y-lg relative"> 
<!-- Vertical line for timeline --> 
<div class="absolute left-[15px] top-2 bottom-2 w-0.5 bg-surface-container"></div> 
<!-- Activity Item 1 --> 
<div class="flex gap-md relative"> 
<div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center z-10 shrink-0"> 
<span class="material-symbols-outlined text-[16px] text-on-primary">edit</span> 
</div> 
<div> 
<p class="font-body-md text-body-md leading-tight text-on-surface"><strong>Jane Doe</strong> updated the venue budget.</p> 
<p class="font-label-sm text-label-sm text-on-surface-variant mt-1">2 mins ago</p> 
</div> 
</div> 
<!-- Activity Item 2 --> 
<div class="flex gap-md relative"> 
<div class="w-8 h-8 rounded-full bg-tertiary flex items-center justify-center z-10 shrink-0"> 
<span class="material-symbols-outlined text-[16px] text-on-tertiary">person_add</span> 
</div> 
<div> 
<p class="font-body-md text-body-md leading-tight text-on-surface"><strong>Marcus Rivera</strong> invited <strong>Alex Wong</strong> to the team.</p> 
<p class="font-label-sm text-label-sm text-on-surface-variant mt-1">45 mins ago</p> 
</div> 
</div> 
<!-- Activity Item 3 --> 
<div class="flex gap-md relative"> 
<div class="w-8 h-8 rounded-full bg-secondary flex items-center justify-center z-10 shrink-0"> 
<span class="material-symbols-outlined text-[16px] text-on-secondary">check_circle</span> 
</div> 
<div> 
<p class="font-body-md text-body-md leading-tight text-on-surface"><strong>Sarah Kim</strong> completed task "Draft Floor Plan".</p> 
<p class="font-label-sm text-label-sm text-on-surface-variant mt-1">3 hours ago</p> 
</div> 
</div> 
<!-- Activity Item 4 --> 
<div class="flex gap-md relative"> 
<div class="w-8 h-8 rounded-full bg-surface-container-highest flex items-center justify-center z-10 shrink-0"> 
<span class="material-symbols-outlined text-[16px] text-on-surface-variant">chat</span> 
</div> 
<div> 
<p class="font-body-md text-body-md leading-tight text-on-surface"><strong>Jane Doe</strong> left a comment on "Catering Invoice".</p> 
<p class="font-label-sm text-label-sm text-on-surface-variant mt-1">5 hours ago</p> 
</div> 
</div> 
</div> 
</div> 
<!-- Collaboration Tool Highlight Card --> 
<div class="bg-primary p-lg rounded-xl shadow-lg relative overflow-hidden group"> 
<div class="relative z-10"> 
<h5 class="font-headline-sm text-headline-sm text-on-primary mb-2">Sync Real-Time</h5> 
<p class="font-body-sm text-body-sm text-primary-fixed-dim mb-lg opacity-90">Experience seamless collaboration with live editing and instant notifications.</p> 
<button class="bg-surface-container-lowest text-primary font-label-md px-md py-sm rounded-lg hover:bg-primary-container hover:text-on-primary-container transition-all">Enable Sync</button> 
</div> 
<!-- Abstract Graphic Element --> 
<div class="absolute -right-10 -bottom-10 w-40 h-40 bg-white/10 rounded-full blur-3xl group-hover:bg-white/20 transition-all"></div> 
</div> 
</div> 
</div> 
</div> 
<?php 
$content = ob_get_clean(); 
include __DIR__ . '/../templates/layout.php'; 
?>
