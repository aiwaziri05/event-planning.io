<?php 
$pageTitle = 'Budget Tracking - EventPlan Pro';
ob_start(); 
?> 
<!-- Header Section --> 
<div class="flex justify-between items-end mb-lg"> 
<div> 
<h2 class="font-headline-lg text-headline-lg text-on-surface">Budget Tracking</h2> 
<p class="font-body-md text-body-md text-on-surface-variant">Manage your event expenses and vendor payments</p> 
</div> 
<button class="bg-primary text-on-primary px-lg py-md rounded-lg flex items-center gap-sm font-label-md text-label-md hover:shadow-lg hover:translate-y-[-2px] transition-all active:scale-95"> 
<span class="material-symbols-outlined">add</span> 
                Add Budget 
            </button> 
</div> 
<!-- Budget Summary Cards (Bento Style) --> 
<div class="grid grid-cols-1 md:grid-cols-3 gap-lg mb-xl"> 
<!-- Total Budget --> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-outline-variant flex flex-col gap-sm overflow-hidden relative"> 
<div class="absolute top-0 right-0 p-4 opacity-10"> 
<span class="material-symbols-outlined text-[64px]">account_balance_wallet</span> 
</div> 
<span class="font-label-md text-label-md text-on-surface-variant flex items-center gap-xs"> 
<span class="material-symbols-outlined text-primary text-sm" style="font-variation-settings: 'FILL' 1;">account_balance_wallet</span> 
                    Total Budget 
                </span> 
<span class="font-headline-md text-headline-md text-on-surface">$25,000.00</span> 
<div class="mt-xs"> 
<div class="w-full bg-surface-container rounded-full h-1"> 
<div class="bg-primary h-1 rounded-full" style="width: 100%"></div> 
</div> 
</div> 
</div> 
<!-- Total Spent --> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-outline-variant flex flex-col gap-sm overflow-hidden relative"> 
<div class="absolute top-0 right-0 p-4 opacity-10 text-tertiary"> 
<span class="material-symbols-outlined text-[64px]">payments</span> 
</div> 
<span class="font-label-md text-label-md text-on-surface-variant flex items-center gap-xs"> 
<span class="material-symbols-outlined text-tertiary text-sm" style="font-variation-settings: 'FILL' 1;">payments</span> 
                    Total Spent 
                </span> 
<span class="font-headline-md text-headline-md text-on-surface">$14,250.00</span> 
<div class="mt-xs"> 
<div class="w-full bg-surface-container rounded-full h-1"> 
<div class="bg-tertiary h-1 rounded-full" style="width: 57%"></div> 
</div> 
<span class="font-label-sm text-label-sm text-tertiary mt-1 block">57% of total budget used</span> 
</div> 
</div> 
<!-- Remaining Balance --> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-outline-variant flex flex-col gap-sm overflow-hidden relative"> 
<div class="absolute top-0 right-0 p-4 opacity-10 text-secondary"> 
<span class="material-symbols-outlined text-[64px]">savings</span> 
</div> 
<span class="font-label-md text-label-md text-on-surface-variant flex items-center gap-xs"> 
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">savings</span> 
                    Remaining Balance 
                </span> 
<span class="font-headline-md text-headline-md text-on-surface">$10,750.00</span> 
<div class="mt-xs"> 
<div class="w-full bg-surface-container rounded-full h-1"> 
<div class="bg-secondary h-1 rounded-full" style="width: 43%"></div> 
</div> 
</div> 
</div> 
</div> 
<!-- Expense Analytics Card (Visual Interest) --> 
<div class="mb-xl grid grid-cols-1 md:grid-cols-12 gap-lg"> 
<div class="md:col-span-8 bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-outline-variant"> 
<div class="flex justify-between items-center mb-lg"> 
<h3 class="font-headline-sm text-headline-sm text-on-surface">Spending Trend</h3> 
<div class="flex gap-sm"> 
<span class="flex items-center gap-xs text-label-sm font-label-sm"><div class="w-2 h-2 rounded-full bg-primary"></div> Estimated</span> 
<span class="flex items-center gap-xs text-label-sm font-label-sm"><div class="w-2 h-2 rounded-full bg-tertiary"></div> Actual</span> 
</div> 
</div> 
<div class="h-48 flex items-end justify-between gap-4 px-4"> 
<div class="w-full flex flex-col items-center gap-2"> 
<div class="w-12 bg-surface-container rounded-t h-32 flex flex-col justify-end"> 
<div class="bg-primary-fixed-dim w-full h-full rounded-t opacity-40"></div> 
<div class="bg-primary w-full h-24 absolute rounded-t"></div> 
</div> 
<span class="font-label-sm text-label-sm">Venue</span> 
</div> 
<div class="w-full flex flex-col items-center gap-2"> 
<div class="w-12 bg-surface-container rounded-t h-40 flex flex-col justify-end"> 
<div class="bg-primary-fixed-dim w-full h-full rounded-t opacity-40"></div> 
<div class="bg-primary w-full h-36 rounded-t"></div> 
</div> 
<span class="font-label-sm text-label-sm">Catering</span> 
</div> 
<div class="w-full flex flex-col items-center gap-2"> 
<div class="w-12 bg-surface-container rounded-t h-24 flex flex-col justify-end"> 
<div class="bg-primary-fixed-dim w-full h-full rounded-t opacity-40"></div> 
<div class="bg-primary w-full h-16 rounded-t"></div> 
</div> 
<span class="font-label-sm text-label-sm">Tech</span> 
</div> 
<div class="w-full flex flex-col items-center gap-2"> 
<div class="w-12 bg-surface-container rounded-t h-36 flex flex-col justify-end"> 
<div class="bg-primary-fixed-dim w-full h-full rounded-t opacity-40"></div> 
<div class="bg-primary w-full h-28 rounded-t"></div> 
</div> 
<span class="font-label-sm text-label-sm">Decor</span> 
</div> 
<div class="w-full flex flex-col items-center gap-2"> 
<div class="w-12 bg-surface-container rounded-t h-20 flex flex-col justify-end"> 
<div class="bg-primary-fixed-dim w-full h-full rounded-t opacity-40"></div> 
<div class="bg-primary w-full h-12 rounded-t"></div> 
</div> 
<span class="font-label-sm text-label-sm">Other</span> 
</div> 
</div> 
</div> 
<div class="md:col-span-4 bg-primary p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.1)] text-on-primary flex flex-col justify-center overflow-hidden relative"> 
<div class="z-10"> 
<h3 class="font-headline-sm text-headline-sm mb-sm">Budget Insight</h3> 
<p class="font-body-sm text-body-sm opacity-90 mb-lg">Your catering costs are currently 12% under the initial estimate. Consider reallocating $800 to the "Tech &amp; Production" category for a better AV experience.</p> 
<button class="bg-on-primary text-primary px-md py-sm rounded-lg font-label-md text-label-md hover:bg-opacity-90 transition-all">View Details</button> 
</div> 
<!-- Abstract decorative element --> 
<div class="absolute -bottom-10 -right-10 w-40 h-40 bg-on-primary opacity-10 rounded-full"></div> 
<div class="absolute -top-10 -left-10 w-32 h-32 border-4 border-on-primary opacity-5 rounded-full"></div> 
</div> 
</div> 
<!-- Budget Details Table --> 
<div class="bg-surface-container-lowest rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-outline-variant overflow-hidden"> 
<div class="px-lg py-lg border-b border-surface-container-high flex justify-between items-center"> 
<h3 class="font-headline-sm text-headline-sm text-on-surface">Expenses Breakdown</h3> 
<div class="flex gap-md"> 
<button class="flex items-center gap-sm font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors"> 
<span class="material-symbols-outlined">filter_list</span> 
                        Filter 
                    </button> 
<button class="flex items-center gap-sm font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors"> 
<span class="material-symbols-outlined">download</span> 
                        Export 
                    </button> 
</div> 
</div> 
<div class="overflow-x-auto"> 
<table class="w-full text-left border-collapse"> 
<thead> 
<tr class="bg-surface-container-low"> 
<th class="px-lg py-md font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Category</th> 
<th class="px-lg py-md font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Description</th> 
<th class="px-lg py-md font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider text-right">Estimated Cost</th> 
<th class="px-lg py-md font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider text-right">Actual Cost</th> 
<th class="px-lg py-md font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Status</th> 
<th class="px-lg py-md font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider"></th> 
</tr> 
</thead> 
<tbody class="divide-y divide-surface-container-high"> 
<tr class="hover:bg-surface-container-low transition-colors group"> 
<td class="px-lg py-md"> 
<div class="flex items-center gap-md"> 
<div class="w-10 h-10 rounded-lg bg-primary-container flex items-center justify-center text-primary"> 
<span class="material-symbols-outlined">location_city</span> 
</div> 
<span class="font-label-md text-label-md text-on-surface">Venue &amp; Rentals</span> 
</div> 
</td> 
<td class="px-lg py-md font-body-sm text-body-sm text-on-surface-variant">Grand Plaza Hall booking &amp; furniture</td> 
<td class="px-lg py-md font-body-md text-body-md text-on-surface text-right">$8,500.00</td> 
<td class="px-lg py-md font-body-md text-body-md text-on-surface text-right font-bold">$8,200.00</td> 
<td class="px-lg py-md"> 
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-secondary-container text-on-secondary-container"> 
<span class="w-1.5 h-1.5 rounded-full bg-primary mr-1.5"></span> 
                                    Paid 
                                </span> 
</td> 
<td class="px-lg py-md text-right"> 
<button class="material-symbols-outlined text-outline hover:text-primary transition-colors">more_vert</button> 
</td> 
</tr> 
<tr class="hover:bg-surface-container-low transition-colors group"> 
<td class="px-lg py-md"> 
<div class="flex items-center gap-md"> 
<div class="w-10 h-10 rounded-lg bg-tertiary-fixed-dim bg-opacity-20 flex items-center justify-center text-tertiary"> 
<span class="material-symbols-outlined">restaurant</span> 
</div> 
<span class="font-label-md text-label-md text-on-surface">Catering</span> 
</div> 
</td> 
<td class="px-lg py-md font-body-sm text-body-sm text-on-surface-variant">Three-course dinner for 200 guests</td> 
<td class="px-lg py-md font-body-md text-body-md text-on-surface text-right">$12,000.00</td> 
<td class="px-lg py-md font-body-md text-body-md text-on-surface text-right font-bold">$5,000.00</td> 
<td class="px-lg py-md"> 
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-surface-container text-on-surface-variant"> 
<span class="w-1.5 h-1.5 rounded-full bg-outline mr-1.5"></span> 
                                    Partial 
                                </span> 
</td> 
<td class="px-lg py-md text-right"> 
<button class="material-symbols-outlined text-outline hover:text-primary transition-colors">more_vert</button> 
</td> 
</tr> 
<tr class="hover:bg-surface-container-low transition-colors group"> 
<td class="px-lg py-md"> 
<div class="flex items-center gap-md"> 
<div class="w-10 h-10 rounded-lg bg-on-tertiary-fixed-variant bg-opacity-10 flex items-center justify-center text-on-tertiary-fixed-variant"> 
<span class="material-symbols-outlined">videocam</span> 
</div> 
<span class="font-label-md text-label-md text-on-surface">AV &amp; Production</span> 
</div> 
</td> 
<td class="px-lg py-md font-body-sm text-body-sm text-on-surface-variant">Livestreaming and stage lighting</td> 
<td class="px-lg py-md font-body-md text-body-md text-on-surface text-right">$3,500.00</td> 
<td class="px-lg py-md font-body-md text-body-md text-on-surface text-right font-bold">$1,050.00</td> 
<td class="px-lg py-md"> 
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-error-container text-on-error-container"> 
<span class="w-1.5 h-1.5 rounded-full bg-error mr-1.5"></span> 
                                    Pending 
                                </span> 
</td> 
<td class="px-lg py-md text-right"> 
<button class="material-symbols-outlined text-outline hover:text-primary transition-colors">more_vert</button> 
</td> 
</tr> 
<tr class="hover:bg-surface-container-low transition-colors group"> 
<td class="px-lg py-md"> 
<div class="flex items-center gap-md"> 
<div class="w-10 h-10 rounded-lg bg-secondary-fixed-dim bg-opacity-30 flex items-center justify-center text-on-secondary-fixed-variant"> 
<span class="material-symbols-outlined">palette</span> 
</div> 
<span class="font-label-md text-label-md text-on-surface">Decorations</span> 
</div> 
</td> 
<td class="px-lg py-md font-body-sm text-body-sm text-on-surface-variant">Floral arrangements and branding</td> 
<td class="px-lg py-md font-body-md text-body-md text-on-surface text-right">$1,000.00</td> 
<td class="px-lg py-md font-body-md text-body-md text-on-surface text-right font-bold">$0.00</td> 
<td class="px-lg py-md"> 
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-surface-container text-on-surface-variant"> 
<span class="w-1.5 h-1.5 rounded-full bg-outline mr-1.5"></span> 
                                    Unpaid 
                                </span> 
</td> 
<td class="px-lg py-md text-right"> 
<button class="material-symbols-outlined text-outline hover:text-primary transition-colors">more_vert</button> 
</td> 
</tr> 
</tbody> 
</table> 
</div> 
<div class="px-lg py-md border-t border-surface-container-high flex justify-between items-center bg-surface-container-lowest"> 
<span class="font-body-sm text-body-sm text-on-surface-variant">Showing 4 of 12 categories</span> 
<div class="flex gap-sm"> 
<button class="w-8 h-8 flex items-center justify-center rounded-lg border border-outline-variant text-on-surface-variant hover:bg-surface-container transition-colors disabled:opacity-50" disabled=""> 
<span class="material-symbols-outlined text-sm">chevron_left</span> 
</button> 
<button class="w-8 h-8 flex items-center justify-center rounded-lg border border-primary bg-primary text-on-primary font-label-sm text-label-sm">1</button> 
<button class="w-8 h-8 flex items-center justify-center rounded-lg border border-outline-variant text-on-surface-variant hover:bg-surface-container transition-colors font-label-sm text-label-sm">2</button> 
<button class="w-8 h-8 flex items-center justify-center rounded-lg border border-outline-variant text-on-surface-variant hover:bg-surface-container transition-colors font-label-sm text-label-sm">3</button> 
<button class="w-8 h-8 flex items-center justify-center rounded-lg border border-outline-variant text-on-surface-variant hover:bg-surface-container transition-colors"> 
<span class="material-symbols-outlined text-sm">chevron_right</span> 
</button> 
</div> 
</div> 
</div> 
<!-- Secondary Information Cards --> 
<div class="mt-xl grid grid-cols-1 md:grid-cols-2 gap-lg pb-xl"> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-outline-variant"> 
<h4 class="font-headline-sm text-headline-sm text-on-surface mb-md">Payment Deadlines</h4> 
<div class="space-y-md"> 
<div class="flex items-center justify-between p-sm border-l-4 border-error bg-surface-container-low rounded-r-lg"> 
<div class="flex flex-col"> 
<span class="font-label-md text-label-md text-on-surface">Catering Final Deposit</span> 
<span class="font-label-sm text-label-sm text-error">Due in 2 days</span> 
</div> 
<span class="font-body-md text-body-md font-bold">$7,000.00</span> 
</div> 
<div class="flex items-center justify-between p-sm border-l-4 border-primary bg-surface-container-low rounded-r-lg"> 
<div class="flex flex-col"> 
<span class="font-label-md text-label-md text-on-surface">AV &amp; Production Balance</span> 
<span class="font-label-sm text-label-sm text-on-surface-variant">Due in 15 days</span> 
</div> 
<span class="font-body-md text-body-md font-bold">$2,450.00</span> 
</div> 
</div> 
</div> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-outline-variant relative overflow-hidden flex items-center"> 
<div class="z-10 w-2/3"> 
<h4 class="font-headline-sm text-headline-sm text-on-surface mb-xs">Budget Visualization</h4> 
<p class="font-body-sm text-body-sm text-on-surface-variant mb-md">Your budget health is currently stable. Explore vendor discounts to save even more on upcoming expenses.</p> 
<button class="text-primary font-label-md text-label-md flex items-center gap-xs hover:gap-sm transition-all"> 
                        Go to Analytics <span class="material-symbols-outlined text-sm">arrow_forward</span> 
</button> 
</div> 
<div class="w-1/3 flex justify-center"> 
<div class="relative w-24 h-24"> 
<svg class="w-full h-full transform -rotate-90" viewbox="0 0 36 36"> 
<path class="text-surface-container stroke-current" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke-width="4"></path> 
<path class="text-primary stroke-current" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke-dasharray="75, 100" stroke-linecap="round" stroke-width="4"></path> 
</svg> 
<div class="absolute inset-0 flex items-center justify-center font-bold text-on-surface text-lg">75%</div> 
</div> 
</div> 
</div> 
</div> 
<?php 
$content = ob_get_clean(); 
include __DIR__ . '/../templates/layout.php'; 
?>
