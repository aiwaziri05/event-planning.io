<?php 
$pageTitle = 'Payment Management - EventPlan Pro';
ob_start(); 
?> 
<!-- Page Header & Action --> 
<div class="flex justify-between items-end mb-xl"> 
<div> 
<h2 class="font-headline-lg text-headline-lg text-on-background">Payment History</h2> 
<p class="font-body-md text-body-md text-outline">Monitor and manage all financial transactions for your upcoming events.</p> 
</div> 
<button class="flex items-center gap-sm bg-primary text-on-primary px-lg py-md rounded-lg font-label-md text-label-md shadow-md hover:bg-surface-tint active:scale-95 transition-all"> 
<span class="material-symbols-outlined">add</span> 
        Add Payment 
      </button> 
</div> 
<!-- Bento Grid Summary Section --> 
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter mb-xl"> 
<!-- Total Paid Card --> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-outline-variant/30 flex flex-col justify-between"> 
<div class="flex justify-between items-start"> 
<div class="p-sm bg-primary-fixed rounded-lg text-on-primary-fixed-variant"> 
<span class="material-symbols-outlined">check_circle</span> 
</div> 
<span class="font-label-sm text-label-sm text-primary bg-primary-fixed px-2 py-1 rounded-full">+12.5%</span> 
</div> 
<div class="mt-md"> 
<p class="font-label-md text-label-md text-outline">Total Paid</p> 
<p class="font-headline-lg text-headline-lg text-on-background">$142,500.00</p> 
</div> 
</div> 
<!-- Outstanding Balance Card --> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-outline-variant/30 flex flex-col justify-between"> 
<div class="flex justify-between items-start"> 
<div class="p-sm bg-tertiary-fixed rounded-lg text-on-tertiary-fixed-variant"> 
<span class="material-symbols-outlined">pending_actions</span> 
</div> 
<span class="font-label-sm text-label-sm text-tertiary bg-tertiary-fixed px-2 py-1 rounded-full">-4.2%</span> 
</div> 
<div class="mt-md"> 
<p class="font-label-md text-label-md text-outline">Outstanding Balance</p> 
<p class="font-headline-lg text-headline-lg text-on-background">$28,340.00</p> 
</div> 
</div> 
<!-- Quick Analysis Card --> 
<div class="bg-primary-container p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.1)] flex flex-col justify-between relative overflow-hidden"> 
<div class="absolute -right-4 -top-4 opacity-10"> 
<span class="material-symbols-outlined text-[120px]">analytics</span> 
</div> 
<div class="relative z-10"> 
<p class="font-label-md text-label-md text-on-primary-container/80">Collection Progress</p> 
<div class="flex items-center gap-md mt-sm"> 
<div class="flex-1 bg-on-primary-container/20 h-2 rounded-full overflow-hidden"> 
<div class="bg-white h-full w-[84%]"></div> 
</div> 
<span class="font-label-md text-label-md text-white">84%</span> 
</div> 
</div> 
<div class="mt-md relative z-10"> 
<button class="font-label-md text-label-md text-white flex items-center gap-xs hover:underline"> 
            View report <span class="material-symbols-outlined text-sm">arrow_forward</span> 
</button> 
</div> 
</div> 
</div> 
<!-- Data Table Container --> 
<div class="bg-surface-container-lowest rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-outline-variant/30 overflow-hidden"> 
<div class="p-lg border-b border-outline-variant/30 flex justify-between items-center"> 
<h3 class="font-headline-sm text-headline-sm">Transaction Logs</h3> 
<div class="flex items-center gap-md"> 
<button class="flex items-center gap-xs font-label-md text-label-md text-on-surface-variant bg-surface-container-low px-md py-sm rounded-lg border border-outline-variant hover:bg-surface-container transition-colors"> 
<span class="material-symbols-outlined text-sm">filter_list</span> 
            Filter 
          </button> 
<button class="flex items-center gap-xs font-label-md text-label-md text-on-surface-variant bg-surface-container-low px-md py-sm rounded-lg border border-outline-variant hover:bg-surface-container transition-colors"> 
<span class="material-symbols-outlined text-sm">download</span> 
            Export 
          </button> 
</div> 
</div> 
<div class="overflow-x-auto"> 
<table class="w-full text-left border-collapse"> 
<thead> 
<tr class="bg-surface-container-low border-b border-outline-variant/30"> 
<th class="px-lg py-md font-label-sm text-label-sm text-outline uppercase tracking-wider">Payment Date</th> 
<th class="px-lg py-md font-label-sm text-label-sm text-outline uppercase tracking-wider">Reference Number</th> 
<th class="px-lg py-md font-label-sm text-label-sm text-outline uppercase tracking-wider">Method</th> 
<th class="px-lg py-md font-label-sm text-label-sm text-outline uppercase tracking-wider text-right">Amount</th> 
<th class="px-lg py-md font-label-sm text-label-sm text-outline uppercase tracking-wider text-center">Status</th> 
<th class="px-lg py-md font-label-sm text-label-sm text-outline uppercase tracking-wider"></th> 
</tr> 
</thead> 
<tbody class="divide-y divide-outline-variant/20"> 
<!-- Row 1 --> 
<tr class="hover:bg-surface-container-low/50 transition-colors"> 
<td class="px-lg py-md font-body-sm text-body-sm text-on-surface">Oct 24, 2023</td> 
<td class="px-lg py-md font-label-md text-label-md text-primary font-mono">#PAY-992104</td> 
<td class="px-lg py-md"> 
<div class="flex items-center gap-sm"> 
<span class="material-symbols-outlined text-outline">credit_card</span> 
<span class="font-body-sm text-body-sm text-on-surface">Wire Transfer</span> 
</div> 
</td> 
<td class="px-lg py-md font-label-md text-label-md text-on-surface text-right font-bold">$12,450.00</td> 
<td class="px-lg py-md text-center"> 
<span class="bg-primary-fixed/30 text-primary px-3 py-1 rounded-full font-label-sm text-label-sm">Completed</span> 
</td> 
<td class="px-lg py-md text-right"> 
<button class="text-outline hover:text-primary transition-colors"> 
<span class="material-symbols-outlined">more_vert</span> 
</button> 
</td> 
</tr> 
<!-- Row 2 --> 
<tr class="hover:bg-surface-container-low/50 transition-colors"> 
<td class="px-lg py-md font-body-sm text-body-sm text-on-surface">Oct 22, 2023</td> 
<td class="px-lg py-md font-label-md text-label-md text-primary font-mono">#PAY-881029</td> 
<td class="px-lg py-md"> 
<div class="flex items-center gap-sm"> 
<span class="material-symbols-outlined text-outline">account_balance</span> 
<span class="font-body-sm text-body-sm text-on-surface">Credit Card</span> 
</div> 
</td> 
<td class="px-lg py-md font-label-md text-label-md text-on-surface text-right font-bold">$3,200.00</td> 
<td class="px-lg py-md text-center"> 
<span class="bg-primary-fixed/30 text-primary px-3 py-1 rounded-full font-label-sm text-label-sm">Completed</span> 
</td> 
<td class="px-lg py-md text-right"> 
<button class="text-outline hover:text-primary transition-colors"> 
<span class="material-symbols-outlined">more_vert</span> 
</button> 
</td> 
</tr> 
<!-- Row 3 --> 
<tr class="hover:bg-surface-container-low/50 transition-colors"> 
<td class="px-lg py-md font-body-sm text-body-sm text-on-surface">Oct 20, 2023</td> 
<td class="px-lg py-md font-label-md text-label-md text-primary font-mono">#PAY-776412</td> 
<td class="px-lg py-md"> 
<div class="flex items-center gap-sm"> 
<span class="material-symbols-outlined text-outline">payments</span> 
<span class="font-body-sm text-body-sm text-on-surface">Bank Deposit</span> 
</div> 
</td> 
<td class="px-lg py-md font-label-md text-label-md text-on-surface text-right font-bold">$45,000.00</td> 
<td class="px-lg py-md text-center"> 
<span class="bg-tertiary-fixed/30 text-tertiary px-3 py-1 rounded-full font-label-sm text-label-sm">Pending</span> 
</td> 
<td class="px-lg py-md text-right"> 
<button class="text-outline hover:text-primary transition-colors"> 
<span class="material-symbols-outlined">more_vert</span> 
</button> 
</td> 
</tr> 
<!-- Row 4 --> 
<tr class="hover:bg-surface-container-low/50 transition-colors"> 
<td class="px-lg py-md font-body-sm text-body-sm text-on-surface">Oct 18, 2023</td> 
<td class="px-lg py-md font-label-md text-label-md text-primary font-mono">#PAY-112003</td> 
<td class="px-lg py-md"> 
<div class="flex items-center gap-sm"> 
<span class="material-symbols-outlined text-outline">credit_card</span> 
<span class="font-body-sm text-body-sm text-on-surface">Wire Transfer</span> 
</div> 
</td> 
<td class="px-lg py-md font-label-md text-label-md text-on-surface text-right font-bold">$850.00</td> 
<td class="px-lg py-md text-center"> 
<span class="bg-error-container text-error px-3 py-1 rounded-full font-label-sm text-label-sm">Failed</span> 
</td> 
<td class="px-lg py-md text-right"> 
<button class="text-outline hover:text-primary transition-colors"> 
<span class="material-symbols-outlined">more_vert</span> 
</button> 
</td> 
</tr> 
<!-- Row 5 --> 
<tr class="hover:bg-surface-container-low/50 transition-colors"> 
<td class="px-lg py-md font-body-sm text-body-sm text-on-surface">Oct 15, 2023</td> 
<td class="px-lg py-md font-label-md text-label-md text-primary font-mono">#PAY-554109</td> 
<td class="px-lg py-md"> 
<div class="flex items-center gap-sm"> 
<span class="material-symbols-outlined text-outline">account_balance</span> 
<span class="font-body-sm text-body-sm text-on-surface">Credit Card</span> 
</div> 
</td> 
<td class="px-lg py-md font-label-md text-label-md text-on-surface text-right font-bold">$7,800.00</td> 
<td class="px-lg py-md text-center"> 
<span class="bg-primary-fixed/30 text-primary px-3 py-1 rounded-full font-label-sm text-label-sm">Completed</span> 
</td> 
<td class="px-lg py-md text-right"> 
<button class="text-outline hover:text-primary transition-colors"> 
<span class="material-symbols-outlined">more_vert</span> 
</button> 
</td> 
</tr> 
</tbody> 
</table> 
</div> 
<!-- Pagination --> 
<div class="px-lg py-md border-t border-outline-variant/30 flex justify-between items-center bg-surface-container-lowest"> 
<p class="font-body-sm text-body-sm text-outline">Showing <span class="text-on-surface font-bold">1 to 5</span> of <span class="text-on-surface font-bold">48</span> transactions</p> 
<div class="flex items-center gap-sm"> 
<button class="p-2 border border-outline-variant rounded-lg hover:bg-surface-container-low text-on-surface-variant disabled:opacity-30" disabled=""> 
<span class="material-symbols-outlined">chevron_left</span> 
</button> 
<div class="flex gap-xs"> 
<button class="w-8 h-8 rounded-lg bg-primary text-on-primary font-label-md text-label-md">1</button> 
<button class="w-8 h-8 rounded-lg hover:bg-surface-container-low font-label-md text-label-md">2</button> 
<button class="w-8 h-8 rounded-lg hover:bg-surface-container-low font-label-md text-label-md">3</button> 
<span class="px-2 self-center text-outline">...</span> 
<button class="w-8 h-8 rounded-lg hover:bg-surface-container-low font-label-md text-label-md">10</button> 
</div> 
<button class="p-2 border border-outline-variant rounded-lg hover:bg-surface-container-low text-on-surface-variant"> 
<span class="material-symbols-outlined">chevron_right</span> 
</button> 
</div> 
</div> 
</div> 
<?php 
$content = ob_get_clean(); 
include __DIR__ . '/../templates/layout.php'; 
?>
