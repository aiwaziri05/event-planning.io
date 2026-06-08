<?php 
$pageTitle = 'User Profile - EventPlan Pro';
ob_start(); 
?> 
<div class="max-w-5xl mx-auto"> 
<div class="grid grid-cols-12 gap-lg"> 
<!-- Profile Header / Overview Section (Bento Style) --> 
<div class="col-span-12 lg:col-span-4 flex flex-col gap-lg"> 
<div class="bg-surface-container-lowest p-lg rounded-lg shadow-[0px_4px_12px_rgba(0,0,0,0.05)] flex flex-col items-center text-center"> 
<div class="relative mb-md"> 
<div class="w-32 h-32 rounded-full border-4 border-surface-container overflow-hidden"> 
<img alt="User Profile Image" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdXN6pv4b21xy_Ssu83UKf25IFPol2Ivs46Mjc05u7aAnkIsFiBlpaEVtehIBneiEJz_5LAZRwQseNW99zT8zbjkZ0IVcdnwtuE1LQZtS7ByuN4_iUuEUMn5pMfSpuLnw0cAm7bbQwYGZmYGMDn-39v38oQMrlp6ix069nJwcmks0pAPlfCCZO1vTBTwxCLCiI5hC05yl6GtFUEOk7C3zhLJLPE9vlDPDE3Urw26vBw_iDeLd9rH6axTwot77DFzYHFUhU2cUtr1da"/> 
</div> 
<button class="absolute bottom-0 right-0 p-sm bg-primary text-on-primary rounded-full shadow-lg hover:scale-105 transition-transform active:scale-95"> 
<span class="material-symbols-outlined text-[20px]">edit</span> 
</button> 
</div> 
<h3 class="font-headline-sm text-headline-sm text-on-surface">Alex Thompson</h3> 
<p class="font-body-sm text-body-sm text-on-surface-variant">Senior Event Planner</p> 
<div class="w-full mt-lg pt-lg border-t border-outline-variant flex flex-col gap-sm"> 
<div class="flex justify-between items-center text-left"> 
<span class="font-label-md text-label-md text-on-surface-variant">Role</span> 
<span class="font-label-md text-label-md text-primary bg-primary-container/10 px-sm py-xs rounded">Administrator</span> 
</div> 
<div class="flex justify-between items-center text-left"> 
<span class="font-label-md text-label-md text-on-surface-variant">Member since</span> 
<span class="font-label-md text-label-md text-on-surface">Oct 2023</span> 
</div> 
</div> 
</div> 
<div class="bg-primary text-on-primary p-lg rounded-lg shadow-[0px_4px_12px_rgba(0,0,0,0.05)] relative overflow-hidden"> 
<div class="relative z-10"> 
<h4 class="font-label-md text-label-md opacity-80 uppercase tracking-widest mb-xs">Active Events</h4> 
<p class="font-headline-lg text-headline-lg font-bold">12</p> 
<p class="font-body-sm text-body-sm opacity-90 mt-sm">You have 4 events requiring immediate action this week.</p> 
</div> 
<span class="material-symbols-outlined absolute -right-4 -bottom-4 text-[120px] opacity-10">event_note</span> 
</div> 
</div> 
<!-- Settings Form Section --> 
<div class="col-span-12 lg:col-span-8 flex flex-col gap-lg"> 
<!-- Basic Information Card --> 
<div class="bg-surface-container-lowest p-lg rounded-lg shadow-[0px_4px_12px_rgba(0,0,0,0.05)]"> 
<div class="flex items-center gap-sm mb-lg border-b border-surface-container pb-md"> 
<span class="material-symbols-outlined text-primary">badge</span> 
<h4 class="font-headline-sm text-headline-sm text-on-surface">Personal Information</h4> 
</div> 
<form class="grid grid-cols-1 md:grid-cols-2 gap-md"> 
<div class="flex flex-col gap-xs"> 
<label class="font-label-md text-label-md text-on-surface-variant">Full Name</label> 
<input class="bg-surface-bright border border-outline-variant rounded-lg p-md font-body-md text-body-md focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" type="text" value="Alex Thompson"/> 
</div> 
<div class="flex flex-col gap-xs"> 
<label class="font-label-md text-label-md text-on-surface-variant">Email Address</label> 
<input class="bg-surface-bright border border-outline-variant rounded-lg p-md font-body-md text-body-md focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" type="email" value="alex.thompson@eventpro.com"/> 
</div> 
<div class="flex flex-col gap-xs md:col-span-2"> 
<label class="font-label-md text-label-md text-on-surface-variant">Phone Number</label> 
<div class="flex gap-sm"> 
<select class="bg-surface-bright border border-outline-variant rounded-lg p-md font-body-md text-body-md focus:ring-2 focus:ring-primary focus:border-primary outline-none w-24"> 
<option>+1</option> 
<option>+44</option> 
<option>+91</option> 
</select> 
<input class="flex-1 bg-surface-bright border border-outline-variant rounded-lg p-md font-body-md text-body-md focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" type="tel" value="555-0123-4567"/> 
</div> 
</div> 
<div class="md:col-span-2 flex justify-end mt-md"> 
<button class="bg-primary text-on-primary font-label-md text-label-md py-md px-xl rounded-lg hover:brightness-110 active:scale-95 transition-all shadow-[0px_4px_12px_rgba(0,0,0,0.05)]" type="button"> 
                                    Save Changes 
                                </button> 
</div> 
</form> 
</div> 
<!-- Password Change Section --> 
<div class="bg-surface-container-lowest p-lg rounded-lg shadow-[0px_4px_12px_rgba(0,0,0,0.05)]"> 
<div class="flex items-center gap-sm mb-lg border-b border-surface-container pb-md"> 
<span class="material-symbols-outlined text-primary">lock_reset</span> 
<h4 class="font-headline-sm text-headline-sm text-on-surface">Security Settings</h4> 
</div> 
<div class="flex flex-col gap-lg"> 
<div class="flex flex-col md:flex-row md:items-center justify-between gap-md p-md bg-surface-container-low rounded-lg border border-outline-variant/30"> 
<div class="flex gap-md items-start"> 
<span class="material-symbols-outlined text-on-surface-variant mt-1">shield</span> 
<div> 
<p class="font-label-md text-label-md text-on-surface">Change Password</p> 
<p class="font-body-sm text-body-sm text-on-surface-variant">Update your account password regularly to stay secure.</p> 
</div> 
</div> 
<button class="bg-surface-container-highest text-on-surface-variant hover:bg-surface-container font-label-md text-label-md py-sm px-lg rounded-lg transition-all border border-outline-variant"> 
                                    Update 
                                </button> 
</div> 
<form class="grid grid-cols-1 gap-md"> 
<div class="flex flex-col gap-xs"> 
<label class="font-label-md text-label-md text-on-surface-variant">Current Password</label> 
<input class="bg-surface-bright border border-outline-variant rounded-lg p-md font-body-md text-body-md focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" placeholder="••••••••••••" type="password"/> 
</div> 
<div class="grid grid-cols-1 md:grid-cols-2 gap-md"> 
<div class="flex flex-col gap-xs"> 
<label class="font-label-md text-label-md text-on-surface-variant">New Password</label> 
<input class="bg-surface-bright border border-outline-variant rounded-lg p-md font-body-md text-body-md focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" type="password"/> 
</div> 
<div class="flex flex-col gap-xs"> 
<label class="font-label-md text-label-md text-on-surface-variant">Confirm New Password</label> 
<input class="bg-surface-bright border border-outline-variant rounded-lg p-md font-body-md text-body-md focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" type="password"/> 
</div> 
</div> 
<div class="flex justify-end mt-md gap-md"> 
<button class="text-on-surface-variant font-label-md text-label-md py-md px-xl rounded-lg hover:bg-surface-container transition-all" type="button"> 
                                        Cancel 
                                    </button> 
<button class="bg-primary text-on-primary font-label-md text-label-md py-md px-xl rounded-lg hover:brightness-110 active:scale-95 transition-all shadow-[0px_4px_12px_rgba(0,0,0,0.05)]" type="button"> 
                                        Update Password 
                                    </button> 
</div> 
</form> 
</div> 
</div> 
<!-- Additional Options / Danger Zone --> 
<div class="bg-surface-container-lowest p-lg rounded-lg shadow-[0px_4px_12px_rgba(0,0,0,0.05)] border border-error/10"> 
<div class="flex items-center gap-sm mb-lg border-b border-surface-container pb-md"> 
<span class="material-symbols-outlined text-error">error_outline</span> 
<h4 class="font-headline-sm text-headline-sm text-error">Danger Zone</h4> 
</div> 
<div class="flex flex-col md:flex-row items-center justify-between gap-md"> 
<div> 
<p class="font-label-md text-label-md text-on-surface font-bold">Deactivate Account</p> 
<p class="font-body-sm text-body-sm text-on-surface-variant">Temporarily disable your profile. You can reactivate it anytime by logging back in.</p> 
</div> 
<button class="text-error border border-error/30 hover:bg-error/5 font-label-md text-label-md py-sm px-lg rounded-lg transition-all"> 
                                Deactivate 
                            </button> 
</div> 
</div> 
</div> 
</div> 
</div> 
<?php 
$content = ob_get_clean(); 
include __DIR__ . '/../templates/layout.php'; 
?>
