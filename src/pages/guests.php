<?php 
$pageTitle = 'Guest List - EventPlan Pro';
ob_start(); 
?> 
<div class="mb-xl flex items-center justify-between"> 
<div> 
<h2 class="font-headline-lg text-headline-lg text-on-surface">Guest List</h2> 
<p class="font-body-md text-body-md text-on-surface-variant">Annual Global Tech Summit 2024</p> 
</div> 
<button class="bg-primary text-on-primary px-lg py-md rounded-lg font-label-md text-label-md flex items-center gap-sm shadow-sm hover:shadow-md hover:bg-surface-tint transition-all active:scale-95"> 
<span class="material-symbols-outlined">person_add</span> 
                    Add Guest 
                </button> 
</div> 
<div class="grid grid-cols-1 md:grid-cols-3 gap-lg mb-xl"> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)]"> 
<p class="font-label-md text-label-md text-on-surface-variant">Total Confirmed</p> 
<h3 class="font-headline-md text-headline-md text-primary mt-xs">1,248</h3> 
</div> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)]"> 
<p class="font-label-md text-label-md text-on-surface-variant">Pending Invitations</p> 
<h3 class="font-headline-md text-headline-md text-tertiary mt-xs">312</h3> 
</div> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)]"> 
<p class="font-label-md text-label-md text-on-surface-variant">Capacity Fill Rate</p> 
<h3 class="font-headline-md text-headline-md text-on-surface mt-xs">84%</h3> 
</div> 
</div> 
<div class="bg-surface-container-lowest rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] overflow-hidden"> 
<div class="overflow-x-auto"> 
<table class="w-full text-left border-collapse"> 
<thead> 
<tr class="bg-surface-container border-b border-outline-variant"> 
<th class="px-lg py-md font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Guest Name</th> 
<th class="px-lg py-md font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Email Address</th> 
<th class="px-lg py-md font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Phone Number</th> 
<th class="px-lg py-md font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">RSVP Status</th> 
<th class="px-lg py-md font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider text-right">Actions</th> 
</tr> 
</thead> 
<tbody class="divide-y divide-outline-variant"> 
<tr class="hover:bg-surface-bright transition-colors group"> 
<td class="px-lg py-lg flex items-center gap-md"> 
<div class="w-10 h-10 rounded-full bg-primary-fixed flex items-center justify-center text-on-primary-fixed font-bold">JD</div> 
<span class="font-body-md text-body-md text-on-surface font-medium">Jane Doe</span> 
</td> 
<td class="px-lg py-lg font-body-md text-body-md text-on-surface-variant">jane.doe@techcorp.com</td> 
<td class="px-lg py-lg font-body-md text-body-md text-on-surface-variant">+1 (555) 012-3456</td> 
<td class="px-lg py-lg"> 
<span class="inline-flex items-center gap-xs px-md py-1 rounded-full bg-primary-container text-on-primary-container font-label-sm text-label-sm"> 
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">check_circle</span> 
                                        Confirmed 
                                    </span> 
</td> 
<td class="px-lg py-lg text-right"> 
<button class="text-on-surface-variant hover:text-primary transition-colors"> 
<span class="material-symbols-outlined">more_vert</span> 
</button> 
</td> 
</tr> 
<tr class="hover:bg-surface-bright transition-colors group"> 
<td class="px-lg py-lg flex items-center gap-md"> 
<div class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed font-bold">MS</div> 
<span class="font-body-md text-body-md text-on-surface font-medium">Mark Smith</span> 
</td> 
<td class="px-lg py-lg font-body-md text-body-md text-on-surface-variant">m.smith@innovate.io</td> 
<td class="px-lg py-lg font-body-md text-body-md text-on-surface-variant">+1 (555) 987-6543</td> 
<td class="px-lg py-lg"> 
<span class="inline-flex items-center gap-xs px-md py-1 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm"> 
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 0;">schedule</span> 
                                        Pending 
                                    </span> 
</td> 
<td class="px-lg py-lg text-right"> 
<button class="text-on-surface-variant hover:text-primary transition-colors"> 
<span class="material-symbols-outlined">more_vert</span> 
</button> 
</td> 
</tr> 
<tr class="hover:bg-surface-bright transition-colors group"> 
<td class="px-lg py-lg flex items-center gap-md"> 
<div class="w-10 h-10 rounded-full bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed font-bold">AW</div> 
<span class="font-body-md text-body-md text-on-surface font-medium">Alice Wong</span> 
</td> 
<td class="px-lg py-lg font-body-md text-body-md text-on-surface-variant">alice.w@globalnexus.com</td> 
<td class="px-lg py-lg font-body-md text-body-md text-on-surface-variant">+1 (555) 234-5678</td> 
<td class="px-lg py-lg"> 
<span class="inline-flex items-center gap-xs px-md py-1 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm"> 
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">cancel</span> 
                                        Declined 
                                    </span> 
</td> 
<td class="px-lg py-lg text-right"> 
<button class="text-on-surface-variant hover:text-primary transition-colors"> 
<span class="material-symbols-outlined">more_vert</span> 
</button> 
</td> 
</tr> 
<tr class="hover:bg-surface-bright transition-colors group"> 
<td class="px-lg py-lg flex items-center gap-md"> 
<div class="w-10 h-10 rounded-full bg-primary-fixed flex items-center justify-center text-on-primary-fixed font-bold">RJ</div> 
<span class="font-body-md text-body-md text-on-surface font-medium">Robert Johnson</span> 
</td> 
<td class="px-lg py-lg font-body-md text-body-md text-on-surface-variant">robert.j@cloudscale.net</td> 
<td class="px-lg py-lg font-body-md text-body-md text-on-surface-variant">+1 (555) 456-7890</td> 
<td class="px-lg py-lg"> 
<span class="inline-flex items-center gap-xs px-md py-1 rounded-full bg-primary-container text-on-primary-container font-label-sm text-label-sm"> 
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">check_circle</span> 
                                        Confirmed 
                                    </span> 
</td> 
<td class="px-lg py-lg text-right"> 
<button class="text-on-surface-variant hover:text-primary transition-colors"> 
<span class="material-symbols-outlined">more_vert</span> 
</button> 
</td> 
</tr> 
<tr class="hover:bg-surface-bright transition-colors group"> 
<td class="px-lg py-lg flex items-center gap-md"> 
<div class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed font-bold">EK</div> 
<span class="font-body-md text-body-md text-on-surface font-medium">Elena Kovac</span> 
</td> 
<td class="px-lg py-lg font-body-md text-body-md text-on-surface-variant">e.kovac@futurestream.org</td> 
<td class="px-lg py-lg font-body-md text-body-md text-on-surface-variant">+1 (555) 876-5432</td> 
<td class="px-lg py-lg"> 
<span class="inline-flex items-center gap-xs px-md py-1 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm"> 
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 0;">schedule</span> 
                                        Pending 
                                    </span> 
</td> 
<td class="px-lg py-lg text-right"> 
<button class="text-on-surface-variant hover:text-primary transition-colors"> 
<span class="material-symbols-outlined">more_vert</span> 
</button> 
</td> 
</tr> 
</tbody> 
</table> 
</div> 
<div class="px-lg py-md bg-surface-container-low border-t border-outline-variant flex items-center justify-between"> 
<p class="font-body-sm text-body-sm text-on-surface-variant">Showing 1 to 5 of 1,560 guests</p> 
<div class="flex gap-sm"> 
<button class="p-base hover:bg-surface-container rounded-lg transition-colors disabled:opacity-50" disabled=""> 
<span class="material-symbols-outlined">chevron_left</span> 
</button> 
<button class="w-8 h-8 rounded-lg bg-primary text-on-primary font-label-sm text-label-sm flex items-center justify-center">1</button> 
<button class="w-8 h-8 rounded-lg hover:bg-surface-container font-label-sm text-label-sm flex items-center justify-center">2</button> 
<button class="w-8 h-8 rounded-lg hover:bg-surface-container font-label-sm text-label-sm flex items-center justify-center">3</button> 
<button class="p-base hover:bg-surface-container rounded-lg transition-colors"> 
<span class="material-symbols-outlined">chevron_right</span> 
</button> 
</div> 
</div> 
</div> 
<button class="fixed bottom-lg right-lg w-14 h-14 bg-primary text-on-primary rounded-2xl shadow-xl flex items-center justify-center hover:bg-surface-tint hover:scale-105 transition-all active:scale-95 md:hidden"> 
<span class="material-symbols-outlined text-[32px]" style="font-variation-settings: 'FILL' 0;">add</span> 
</button> 
<?php 
$content = ob_get_clean(); 
include __DIR__ . '/../templates/layout.php'; 
?>
