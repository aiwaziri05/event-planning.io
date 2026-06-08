<?php 
$pageTitle = 'EventPlan Pro - Dashboard';
ob_start(); 
?> 
<div class="max-w-7xl mx-auto space-y-lg"> 
<!-- Welcome Section --> 
<div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-md"> 
<div> 
<h2 class="font-headline-lg text-headline-lg text-primary">Overview</h2> 
<p class="font-body-md text-body-md text-on-surface-variant">Good morning, Alex. Here's what's happening with your events today.</p> 
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
<p class="font-headline-md text-headline-md text-on-surface">12</p> 
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
<p class="font-headline-md text-headline-md text-on-surface">450</p> 
</div> 
<!-- Total Budget --> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-surface-container"> 
<div class="flex items-center justify-between mb-md"> 
<div class="p-sm bg-tertiary-container/10 rounded-lg"> 
<span class="material-symbols-outlined text-tertiary">account_balance_wallet</span> 
</div> 
<span class="text-tertiary font-label-sm">82% utilized</span> 
</div> 
<h3 class="font-label-md text-label-md text-on-surface-variant">Total Budget</h3> 
<p class="font-headline-md text-headline-md text-on-surface">$25,000</p> 
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
<p class="font-headline-md text-headline-md text-on-surface">$15,500</p> 
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
<!-- Event Card 1 --> 
<div class="bg-surface-container-lowest rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] overflow-hidden border border-surface-container group"> 
<div class="h-32 overflow-hidden"> 
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A professional corporate gala event in a luxury ballroom setting with soft ambient blue lighting, white floral centerpieces, and elegant round tables set for a banquet. The mood is sophisticated and celebratory, captured in a high-end commercial photography style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAxa6x9kHBKRsU7CTDME_lXQsIoFAXg1Gvhn4IAKRQZn9Q9RbmnlYwDuszBL87GJwLF4uNzgttATlE8Qd84elxvrEPaBQ4VyhETQFKsIx2muZrDmUuwSTnsgH_Pgyg3K3w4IH10v-AdmmX3he4MNSPW5a95ZDQaU5kNXvn2IoJd03zumLEfyRiwbRSZTn7BN6CRk6V-56imdY393KXlu_9UpV7O07kavqMWCXDrUkCY7gM6BerS_4LZjB3yJRa4WbRdRkzmkiGR-KBt"/> 
</div> 
<div class="p-lg"> 
<span class="bg-primary-container/20 text-primary px-sm py-1 rounded-full font-label-sm text-label-sm">In 3 Days</span> 
<h4 class="font-headline-sm text-headline-sm mt-sm mb-xs">Tech Innovate Summit</h4> 
<div class="flex items-center gap-sm text-on-surface-variant font-body-sm text-body-sm mt-md"> 
<span class="material-symbols-outlined text-sm" style="font-size: 18px;">location_on</span> 
                                        Grand Hyatt Conference Center 
                                    </div> 
<div class="flex items-center gap-sm text-on-surface-variant font-body-sm text-body-sm mt-xs"> 
<span class="material-symbols-outlined text-sm" style="font-size: 18px;">schedule</span> 
                                        09:00 AM - 05:00 PM 
                                    </div> 
<div class="mt-lg pt-md border-t border-surface-container flex items-center justify-between"> 
<div class="flex -space-x-2"> 
<img class="w-8 h-8 rounded-full border-2 border-surface-container-lowest" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7iR53ib9i4TDD07XAPMdCBaDxdc1rV4lYGkNfFMDj_Q5gwEjxfV8Mo7yfryjZWnQX6v0P-7QIXP_YnsFf8ihwD7mH4OhThwEsTbpq7PrmpUNv2QBTQqDNcuqPXAZmL7vgDX091_UbH26-9XAaQB9jPTUU8R0ao_ivyAXsDHKff0S45u1bGSceq_PrcFgfZ9EHU4tNaS37eseK8a-YfprcA66xWZNFj80MuQGJJVnb2ggLSLYzXtpF38w9nvcFDUOG7afoWbtuv_t2"/> 
<img class="w-8 h-8 rounded-full border-2 border-surface-container-lowest" src="https://lh3.googleusercontent.com/aida-public/AB6AXuASOMZFoVHl0YVX3Xs40Q19BZn0SRqX4VepYm_74wAc1O1nay2Ea7bGdSNIkf6N7KJg1hhH7skqbE--y02pF0X11cFEBuU_ct31qG1CvvPGqtan91Yx8-QhrL69jdApVrWCLhsVWzty6i4xwcEX1yiPbTJgYtruieqNEs336DtXv7jHHBmD6V7A152iyUM36oPTBtaLgzmwVIvDosOdB8eIO8aZPAYs-X4lCpOm5b2UTF-7JzRdURf6XFYreUR8cCKr6IV7gaMhU88k"/> 
<div class="w-8 h-8 rounded-full bg-surface-container border-2 border-surface-container-lowest flex items-center justify-center text-[10px] font-bold text-on-surface-variant">+42</div> 
</div> 
<button class="text-primary font-label-md flex items-center gap-xs">Manage <span class="material-symbols-outlined" style="font-size: 18px;">chevron_right</span></button> 
</div> 
</div> 
</div> 
<!-- Event Card 2 --> 
<div class="bg-surface-container-lowest rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] overflow-hidden border border-surface-container group"> 
<div class="h-32 overflow-hidden"> 
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A bright and airy garden wedding reception with long rustic wooden tables, hanging fairy lights, and lush greenery in a scenic outdoor park. The afternoon sun creates a warm golden glow over the festive arrangement. The aesthetic is romantic, natural, and modern." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAsQgeyWZfFs8RIK1qy4zvj8H9lA-m7mtFYJ2r_eZdSffooM244nXN4b504M4SLO9w-kxULDhXvObTpIRQQw-XRt40rroGu9snmYT3NWZ7bgfnuU9R2H-rZGeRqE3-VCljMf6DFct585-gAkGC5quQBFisRS0FqStdo5qURzhqKTlIN517Kki02_SkN4BO8L8sodPb4wGBXcP4fMHuBkbLxA0bMid0B8IjNirJWTfRk04qiKARg0p3GznS4fD2F4A-T2QCFwm-wQcRf"/> 
</div> 
<div class="p-lg"> 
<span class="bg-secondary-container/20 text-secondary px-sm py-1 rounded-full font-label-sm text-label-sm">Next Week</span> 
<h4 class="font-headline-sm text-headline-sm mt-sm mb-xs">Peterson Wedding</h4> 
<div class="flex items-center gap-sm text-on-surface-variant font-body-sm text-body-sm mt-md"> 
<span class="material-symbols-outlined text-sm" style="font-size: 18px;">location_on</span> 
                                        Riverside Gardens 
                                    </div> 
<div class="flex items-center gap-sm text-on-surface-variant font-body-sm text-body-sm mt-xs"> 
<span class="material-symbols-outlined text-sm" style="font-size: 18px;">schedule</span> 
                                        04:00 PM - 11:30 PM 
                                    </div> 
<div class="mt-lg pt-md border-t border-surface-container flex items-center justify-between"> 
<div class="flex -space-x-2"> 
<img class="w-8 h-8 rounded-full border-2 border-surface-container-lowest" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDOncoWCU49mmlGhmvW7oyivGeibL4vzuJE3tZsgR_jUgE9qDWxClVBwMDE2AvME2wltfoHcxtywr7FwLjdOKYTJY0_1gzpZIElvW3fUlxWXu_Bwk_l4V9aBt0sW_ZfQpHGjxkd5SWG80wxJ-Th1C28w1yaQzI7k0kU1N_1e3khNzfUwUKJhY0cq37Ouv6Kf4nDGYFc6HqMMki4Uclv8gUc5COma_LSukD0u9gt_q1dgPTF0WNfmxJ_YULnO_00Qh28qNICfjWutzzp"/> 
<img class="w-8 h-8 rounded-full border-2 border-surface-container-lowest" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDoxBKiVRKMVGRCUVfuuHEqZPB0_Zu9SecZCHWjt3lyxWZWzDZRYpPpi-Rqf04_xMnNvNBstykx2rxA0HnI0IV-_7yjrI4isjIgdPUSJ2QJMLQtQCnLM6BK-Vw6t2tniILewMIYxdhBuIYvt9ryl8Rz5KtXZZ16NVK_FUD3pXxqusd-6a0qZ9HQx8MPGcVylte5wS9IPqo8EkERrzTlRVvXZMgrgtFfPbW_qnXu_U4DKrZR9ptUql-wjvZfjFMB_f3qlzmmxOgduxcp"/> 
<div class="w-8 h-8 rounded-full bg-surface-container border-2 border-surface-container-lowest flex items-center justify-center text-[10px] font-bold text-on-surface-variant">+120</div> 
</div> 
<button class="text-primary font-label-md flex items-center gap-xs">Manage <span class="material-symbols-outlined" style="font-size: 18px;">chevron_right</span></button> 
</div> 
</div> 
</div> 
</div> 
<!-- Mini Task List --> 
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-surface-container mt-md"> 
<h3 class="font-headline-sm text-headline-sm mb-md">High Priority Tasks</h3> 
<div class="space-y-sm"> 
<div class="flex items-center justify-between p-md bg-surface-container rounded-lg"> 
<div class="flex items-center gap-md"> 
<span class="material-symbols-outlined text-error">priority_high</span> 
<p class="font-body-md text-body-md">Finalize catering for Tech Summit</p> 
</div> 
<span class="text-on-surface-variant font-label-sm">Today</span> 
</div> 
<div class="flex items-center justify-between p-md hover:bg-surface-container transition-colors rounded-lg"> 
<div class="flex items-center gap-md"> 
<span class="material-symbols-outlined text-on-surface-variant">check_circle</span> 
<p class="font-body-md text-body-md text-on-surface-variant line-through">Send invitations to VIP speakers</p> 
</div> 
<span class="text-on-surface-variant font-label-sm">Completed</span> 
</div> 
<div class="flex items-center justify-between p-md bg-surface-container rounded-lg"> 
<div class="flex items-center gap-md"> 
<span class="material-symbols-outlined text-primary">assignment</span> 
<p class="font-body-md text-body-md">Review floor plan with venue manager</p> 
</div> 
<span class="text-on-surface-variant font-label-sm">Tomorrow</span> 
</div> 
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
<!-- Activity Item 1 --> 
<div class="relative pl-lg"> 
<div class="absolute left-0 top-1 w-6 h-6 rounded-full bg-primary flex items-center justify-center z-10"> 
<span class="material-symbols-outlined text-[14px] text-on-primary">attach_money</span> 
</div> 
<div> 
<p class="font-body-md text-body-md text-on-surface"><span class="font-bold">Payment Received:</span> $5,200 from Grand Hyatt</p> 
<p class="font-label-sm text-label-sm text-on-surface-variant mt-xs">2 hours ago</p> 
</div> 
</div> 
<!-- Activity Item 2 --> 
<div class="relative pl-lg"> 
<div class="absolute left-0 top-1 w-6 h-6 rounded-full bg-secondary flex items-center justify-center z-10"> 
<span class="material-symbols-outlined text-[14px] text-on-secondary">person_add</span> 
</div> 
<div> 
<p class="font-body-md text-body-md text-on-surface">15 new guests registered for <span class="font-bold">Tech Summit</span></p> 
<p class="font-label-sm text-label-sm text-on-surface-variant mt-xs">5 hours ago</p> 
</div> 
</div> 
<!-- Activity Item 3 --> 
<div class="relative pl-lg"> 
<div class="absolute left-0 top-1 w-6 h-6 rounded-full bg-tertiary flex items-center justify-center z-10"> 
<span class="material-symbols-outlined text-[14px] text-on-tertiary">edit</span> 
</div> 
<div> 
<p class="font-body-md text-body-md text-on-surface"><span class="font-bold">Sarah Miller</span> updated the budget file</p> 
<p class="font-label-sm text-label-sm text-on-surface-variant mt-xs">Yesterday, 4:15 PM</p> 
</div> 
</div> 
<!-- Activity Item 4 --> 
<div class="relative pl-lg"> 
<div class="absolute left-0 top-1 w-6 h-6 rounded-full bg-on-surface-variant flex items-center justify-center z-10"> 
<span class="material-symbols-outlined text-[14px] text-surface-container-lowest">mail</span> 
</div> 
<div> 
<p class="font-body-md text-body-md text-on-surface">Invitation draft sent to <span class="font-bold">John Peterson</span></p> 
<p class="font-label-sm text-label-sm text-on-surface-variant mt-xs">Oct 12, 10:20 AM</p> 
</div> 
</div> 
<!-- Activity Item 5 --> 
<div class="relative pl-lg"> 
<div class="absolute left-0 top-1 w-6 h-6 rounded-full bg-primary flex items-center justify-center z-10"> 
<span class="material-symbols-outlined text-[14px] text-on-primary">check</span> 
</div> 
<div> 
<p class="font-body-md text-body-md text-on-surface">Venue confirmed: <span class="font-bold">Riverside Gardens</span></p> 
<p class="font-label-sm text-label-sm text-on-surface-variant mt-xs">Oct 11, 02:45 PM</p> 
</div> 
</div> 
</div> 
<button class="w-full mt-lg py-md border border-outline-variant rounded-lg font-label-md text-label-md hover:bg-surface-container transition-colors">Show All Activity</button> 
</div> 
<!-- Budget Snapshot Chart Placeholder --> 
<div class="bg-primary p-lg rounded-xl shadow-lg text-on-primary relative overflow-hidden"> 
<div class="relative z-10"> 
<h4 class="font-label-md text-label-md opacity-80">Remaining Budget</h4> 
<p class="font-headline-lg text-headline-lg">$9,500</p> 
<div class="mt-md w-full bg-primary-fixed/20 h-2 rounded-full overflow-hidden"> 
<div class="bg-primary-fixed h-full w-[62%]"></div> 
</div> 
<p class="font-label-sm text-label-sm mt-sm">62% of quarterly budget used</p> 
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
