<?php 
$pageTitle = 'Event List - EventPlan Pro';
ob_start(); 
?> 
<!-- Header Section --> 
<div class="flex flex-col md:flex-row md:items-center justify-between mb-xl gap-md"> 
<div> 
<h2 class="font-headline-lg text-headline-lg text-on-surface">Event Directory</h2> 
<p class="text-body-md font-body-md text-on-surface-variant">Manage and track your upcoming and past organization events.</p> 
</div> 
<button class="flex items-center gap-sm bg-primary text-on-primary px-lg py-md rounded-lg shadow-sm hover:brightness-110 active:scale-95 transition-all"> 
<span class="material-symbols-outlined">add</span> 
<span class="font-label-md text-label-md">Add Event</span> 
</button> 
</div> 
<!-- Filter & Stats Bar --> 
<div class="grid grid-cols-1 md:grid-cols-4 gap-lg mb-xl"> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-sm border border-surface-container"> 
<p class="text-label-md font-label-md text-on-surface-variant">Total Events</p> 
<p class="font-headline-md text-headline-md text-on-surface">124</p> 
</div> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-sm border border-surface-container"> 
<p class="text-label-md font-label-md text-on-surface-variant">Planned</p> 
<p class="font-headline-md text-headline-md text-primary">42</p> 
</div> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-sm border border-surface-container"> 
<p class="text-label-md font-label-md text-on-surface-variant">In Progress</p> 
<p class="font-headline-md text-headline-md text-tertiary">12</p> 
</div> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-sm border border-surface-container"> 
<p class="text-label-md font-label-md text-on-surface-variant">Completed</p> 
<p class="font-headline-md text-headline-md text-secondary">70</p> 
</div> 
</div> 
<!-- Events Table Container --> 
<div class="bg-surface-container-lowest rounded-xl shadow-sm border border-surface-container overflow-hidden"> 
<div class="overflow-x-auto"> 
<table class="w-full text-left border-collapse"> 
<thead> 
<tr class="bg-surface-container border-b border-outline-variant"> 
<th class="px-lg py-md font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Event Name</th> 
<th class="px-lg py-md font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Event Type</th> 
<th class="px-lg py-md font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Date</th> 
<th class="px-lg py-md font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Venue</th> 
<th class="px-lg py-md font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Status</th> 
<th class="px-lg py-md font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider text-right">Actions</th> 
</tr> 
</thead> 
<tbody class="divide-y divide-surface-container"> 
<!-- Row 1 --> 
<tr class="hover:bg-surface-bright transition-colors"> 
<td class="px-lg py-lg"> 
<div class="flex flex-col"> 
<span class="font-body-md text-body-md text-on-surface font-semibold">Global Tech Summit 2024</span> 
<span class="text-label-sm text-on-surface-variant">Ref: #EV-9021</span> 
</div> 
</td> 
<td class="px-lg py-lg"> 
<span class="bg-secondary-container text-on-secondary-container px-md py-xs rounded-full text-label-sm font-label-sm">Seminar</span> 
</td> 
<td class="px-lg py-lg font-body-md text-body-md">Oct 12, 2024</td> 
<td class="px-lg py-lg font-body-md text-body-md">Grand Ballroom, Hilton</td> 
<td class="px-lg py-lg"> 
<div class="flex items-center gap-xs text-primary font-label-md"> 
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span> 
                                    Planned 
                                </div> 
</td> 
<td class="px-lg py-lg text-right"> 
<div class="flex items-center justify-end gap-sm"> 
<button class="p-xs text-primary hover:bg-primary-container/20 rounded transition-colors"><span class="material-symbols-outlined">visibility</span></button> 
<a href="index.php?page=edit-event" class="p-xs text-on-surface-variant hover:bg-surface-container rounded transition-colors"><span class="material-symbols-outlined">edit</span></a> 
<button class="p-xs text-error hover:bg-error-container/20 rounded transition-colors"><span class="material-symbols-outlined">delete</span></button> 
</div> 
</td> 
</tr> 
<!-- Row 2 --> 
<tr class="hover:bg-surface-bright transition-colors"> 
<td class="px-lg py-lg"> 
<div class="flex flex-col"> 
<span class="font-body-md text-body-md text-on-surface font-semibold">Miller &amp; Watson Wedding</span> 
<span class="text-label-sm text-on-surface-variant">Ref: #EV-8842</span> 
</div> 
</td> 
<td class="px-lg py-lg"> 
<span class="bg-secondary-container text-on-secondary-container px-md py-xs rounded-full text-label-sm font-label-sm">Wedding</span> 
</td> 
<td class="px-lg py-lg font-body-md text-body-md">Nov 05, 2024</td> 
<td class="px-lg py-lg font-body-md text-body-md">The Glass House Estate</td> 
<td class="px-lg py-lg"> 
<div class="flex items-center gap-xs text-tertiary font-label-md"> 
<span class="w-2 h-2 rounded-full bg-tertiary"></span> 
                                    In Progress 
                                </div> 
</td> 
<td class="px-lg py-lg text-right"> 
<div class="flex items-center justify-end gap-sm"> 
<button class="p-xs text-primary hover:bg-primary-container/20 rounded transition-colors"><span class="material-symbols-outlined">visibility</span></button> 
<button class="p-xs text-on-surface-variant hover:bg-surface-container rounded transition-colors"><span class="material-symbols-outlined">edit</span></button> 
<button class="p-xs text-error hover:bg-error-container/20 rounded transition-colors"><span class="material-symbols-outlined">delete</span></button> 
</div> 
</td> 
</tr> 
<!-- Row 3 --> 
<tr class="hover:bg-surface-bright transition-colors"> 
<td class="px-lg py-lg"> 
<div class="flex flex-col"> 
<span class="font-body-md text-body-md text-on-surface font-semibold">Annual Charity Gala</span> 
<span class="text-label-sm text-on-surface-variant">Ref: #EV-7561</span> 
</div> 
</td> 
<td class="px-lg py-lg"> 
<span class="bg-secondary-container text-on-secondary-container px-md py-xs rounded-full text-label-sm font-label-sm">Gala</span> 
</td> 
<td class="px-lg py-lg font-body-md text-body-md">Sep 28, 2024</td> 
<td class="px-lg py-lg font-body-md text-body-md">Metropolitan Art Museum</td> 
<td class="px-lg py-lg"> 
<div class="flex items-center gap-xs text-secondary font-label-md"> 
<span class="w-2 h-2 rounded-full bg-secondary"></span> 
                                    Completed 
                                </div> 
</td> 
<td class="px-lg py-lg text-right"> 
<div class="flex items-center justify-end gap-sm"> 
<button class="p-xs text-primary hover:bg-primary-container/20 rounded transition-colors"><span class="material-symbols-outlined">visibility</span></button> 
<button class="p-xs text-on-surface-variant hover:bg-surface-container rounded transition-colors"><span class="material-symbols-outlined">edit</span></button> 
<button class="p-xs text-error hover:bg-error-container/20 rounded transition-colors"><span class="material-symbols-outlined">delete</span></button> 
</div> 
</td> 
</tr> 
<!-- Row 4 --> 
<tr class="hover:bg-surface-bright transition-colors"> 
<td class="px-lg py-lg"> 
<div class="flex flex-col"> 
<span class="font-body-md text-body-md text-on-surface font-semibold">Q3 Product Launch</span> 
<span class="text-label-sm text-on-surface-variant">Ref: #EV-9210</span> 
</div> 
</td> 
<td class="px-lg py-lg"> 
<span class="bg-secondary-container text-on-secondary-container px-md py-xs rounded-full text-label-sm font-label-sm">Corporate</span> 
</td> 
<td class="px-lg py-lg font-body-md text-body-md">Dec 01, 2024</td> 
<td class="px-lg py-lg font-body-md text-body-md">Convention Center Hall B</td> 
<td class="px-lg py-lg"> 
<div class="flex items-center gap-xs text-primary font-label-md"> 
<span class="w-2 h-2 rounded-full bg-primary"></span> 
                                    Planned 
                                </div> 
</td> 
<td class="px-lg py-lg text-right"> 
<div class="flex items-center justify-end gap-sm"> 
<button class="p-xs text-primary hover:bg-primary-container/20 rounded transition-colors"><span class="material-symbols-outlined">visibility</span></button> 
<button class="p-xs text-on-surface-variant hover:bg-surface-container rounded transition-colors"><span class="material-symbols-outlined">edit</span></button> 
<button class="p-xs text-error hover:bg-error-container/20 rounded transition-colors"><span class="material-symbols-outlined">delete</span></button> 
</div> 
</td> 
</tr> 
</tbody> 
</table> 
</div> 
<!-- Pagination --> 
<div class="px-lg py-md bg-surface-container border-t border-outline-variant flex items-center justify-between"> 
<span class="text-label-md font-label-md text-on-surface-variant">Showing 1-4 of 124 events</span> 
<div class="flex items-center gap-sm"> 
<button class="p-xs rounded hover:bg-surface-container-highest transition-colors disabled:opacity-50" disabled=""> 
<span class="material-symbols-outlined">chevron_left</span> 
</button> 
<button class="w-8 h-8 flex items-center justify-center rounded bg-primary text-on-primary font-label-md">1</button> 
<button class="w-8 h-8 flex items-center justify-center rounded hover:bg-surface-container-highest font-label-md">2</button> 
<button class="w-8 h-8 flex items-center justify-center rounded hover:bg-surface-container-highest font-label-md">3</button> 
<button class="p-xs rounded hover:bg-surface-container-highest transition-colors"> 
<span class="material-symbols-outlined">chevron_right</span> 
</button> 
</div> 
</div> 
</div> 
<!-- Upcoming Highlights (Bento Section) --> 
<div class="mt-xl grid grid-cols-1 md:grid-cols-3 gap-lg"> 
<div class="col-span-1 md:col-span-2 bg-primary-container rounded-xl p-xl flex flex-col justify-between text-white relative overflow-hidden"> 
<div class="relative z-10"> 
<h3 class="font-headline-md text-headline-md mb-sm">Master Your Logistics</h3> 
<p class="font-body-md text-body-md opacity-90 max-w-md">Our new vendor management module is now live. Connect with over 5,000 verified catering and venue partners directly through your dashboard.</p> 
</div> 
<div class="mt-xl relative z-10"> 
<button class="bg-white text-primary font-label-md px-lg py-md rounded-lg hover:bg-surface-bright transition-colors">Explore Marketplace</button> 
</div> 
<span class="material-symbols-outlined absolute -right-4 -bottom-4 text-[180px] opacity-10 rotate-12">rocket_launch</span> 
</div> 
<div class="bg-surface-container-lowest rounded-xl p-lg border border-surface-container flex flex-col"> 
<div class="flex items-center justify-between mb-lg"> 
<h3 class="font-label-md text-label-md text-on-surface-variant">Quick Alerts</h3> 
<span class="material-symbols-outlined text-tertiary">bolt</span> 
</div> 
<div class="space-y-md"> 
<div class="flex items-start gap-md"> 
<div class="w-2 h-2 rounded-full bg-error mt-2"></div> 
<p class="text-body-sm font-body-sm">3 payments for <b>"Miller Wedding"</b> are overdue by 48 hours.</p> 
</div> 
<div class="flex items-start gap-md"> 
<div class="w-2 h-2 rounded-full bg-primary mt-2"></div> 
<p class="text-body-sm font-body-sm">Venue confirmation received for <b>"Q3 Product Launch"</b>.</p> 
</div> 
<div class="flex items-start gap-md"> 
<div class="w-2 h-2 rounded-full bg-secondary mt-2"></div> 
<p class="text-body-sm font-body-sm">New guest list uploaded for <b>"Tech Summit"</b> (450 names).</p> 
</div> 
</div> 
</div> 
</div> 
<?php 
$content = ob_get_clean(); 
include __DIR__ . '/../templates/layout.php'; 
?>
