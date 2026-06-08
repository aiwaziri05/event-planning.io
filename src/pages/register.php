<!DOCTYPE html> 
 
<html class="light" lang="en">
<?php 
$pageTitle = 'Register - EventPlan Pro';
include __DIR__ . '/../includes/head.php'; 
?> 
<body class="font-body-md text-on-background min-h-screen flex items-center justify-center p-margin-mobile md:p-margin-desktop"> 
<div class="flex flex-col md:flex-row w-full max-w-5xl bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0px_10px_25px_rgba(0,0,0,0.05)] border border-outline-variant/30"> 
<!-- Left Side: Visual Branding (Suppressed Nav for Transactional Page) --> 
<div class="hidden md:flex md:w-1/2 relative bg-primary items-center justify-center overflow-hidden"> 
<div class="absolute inset-0 z-0"> 
<img class="w-full h-full object-cover opacity-40 mix-blend-overlay" data-alt="A sophisticated event planning scene with elegant table settings, crystal glassware, and soft floral arrangements. The lighting is warm and cinematic, creating a professional yet inviting atmosphere. The color palette features deep blues and clean whites to match a modern corporate aesthetic. High-end architectural details frame the festive environment in a minimalist, balanced composition." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBTM6VxYXygZVu_sWV3V-xeZHLFbVvUFj0uK0RQ1iarwUMCwNn4hPtO0OeemvPPox4lSum9F3wL61zJInd56XaYzIKoEYMB_CW-9UATkKOF4LzvPXX9cQnrbcEqilu-fHiXmMhSoUCHWN4oOVHl8aLUa0Bjr07b2BkJjC78Qo2chKa86gclP79-NrnweZveSQY7E-SgYtZ9HZFEQYJD2H717-R97BkpWREbnOtHiGVg-8aez4LjyHJ9vVe2BnaehcXcvJpagL_xpZDO"/> 
</div> 
<div class="relative z-10 px-xl text-center"> 
<h1 class="font-headline-lg text-headline-lg text-on-primary mb-md">EventPlan Pro</h1> 
<p class="font-body-lg text-body-lg text-on-primary/90 max-w-md"> 
                    The complete management suite for orchestrating unforgettable events with precision and style. 
                </p> 
<div class="mt-xl flex flex-col gap-md items-center"> 
<div class="flex items-center gap-sm bg-white/10 backdrop-blur-sm px-md py-sm rounded-lg border border-white/20"> 
<span class="material-symbols-outlined text-on-primary">check_circle</span> 
<span class="font-label-md text-label-md text-on-primary">Manage Guests</span> 
</div> 
<div class="flex items-center gap-sm bg-white/10 backdrop-blur-sm px-md py-sm rounded-lg border border-white/20"> 
<span class="material-symbols-outlined text-on-primary">check_circle</span> 
<span class="font-label-md text-label-md text-on-primary">Budget Tracking</span> 
</div> 
<div class="flex items-center gap-sm bg-white/10 backdrop-blur-sm px-md py-sm rounded-lg border border-white/20"> 
<span class="material-symbols-outlined text-on-primary">check_circle</span> 
<span class="font-label-md text-label-md text-on-primary">Real-time Collaboration</span> 
</div> 
</div> 
</div> 
</div> 
<!-- Right Side: Registration Form --> 
<div class="w-full md:w-1/2 p-lg md:p-xl flex flex-col justify-center"> 
<div class="mb-xl"> 
<div class="md:hidden flex items-center gap-sm mb-lg"> 
<div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center"> 
<span class="material-symbols-outlined text-on-primary text-[20px]">event_note</span> 
</div> 
<span class="font-headline-sm text-headline-sm text-primary font-bold">EventPlan Pro</span> 
</div> 
<h2 class="font-headline-md text-headline-md text-on-surface mb-xs">Create an account</h2> 
<p class="font-body-md text-body-md text-on-surface-variant">Join thousands of planners managing world-class events.</p> 
</div> 
<form class="flex flex-col gap-lg" action="index.php?page=dashboard" method="POST"> 
<!-- Full Name Field --> 
<div class="flex flex-col gap-xs"> 
<label class="font-label-md text-label-md text-on-surface-variant" for="full_name">Full Name</label> 
<div class="relative"> 
<span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline">person</span> 
<input class="w-full pl-[48px] pr-md py-md bg-surface-container-lowest border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all placeholder:text-outline/50" id="full_name" name="full_name" placeholder="John Doe" type="text"/> 
</div> 
</div> 
<!-- Email Field --> 
<div class="flex flex-col gap-xs"> 
<label class="font-label-md text-label-md text-on-surface-variant" for="email">Email Address</label> 
<div class="relative"> 
<span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline">mail</span> 
<input class="w-full pl-[48px] pr-md py-md bg-surface-container-lowest border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all placeholder:text-outline/50" id="email" name="email" placeholder="name@company.com" type="email"/> 
</div> 
</div> 
<!-- Password Field --> 
<div class="flex flex-col gap-xs"> 
<label class="font-label-md text-label-md text-on-surface-variant" for="password">Password</label> 
<div class="relative"> 
<span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline">lock</span> 
<input class="w-full pl-[48px] pr-md py-md bg-surface-container-lowest border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all placeholder:text-outline/50" id="password" name="password" placeholder="••••••••" type="password"/> 
</div> 
</div> 
<!-- Confirm Password Field --> 
<div class="flex flex-col gap-xs"> 
<label class="font-label-md text-label-md text-on-surface-variant" for="confirm_password">Confirm Password</label> 
<div class="relative"> 
<span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline">verified_user</span> 
<input class="w-full pl-[48px] pr-md py-md bg-surface-container-lowest border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all placeholder:text-outline/50" id="confirm_password" name="confirm_password" placeholder="••••••••" type="password"/> 
</div> 
</div> 
<!-- Terms --> 
<div class="flex items-start gap-md"> 
<input class="mt-1 w-5 h-5 text-primary border-outline-variant rounded focus:ring-primary" id="terms" type="checkbox"/> 
<label class="font-body-sm text-body-sm text-on-surface-variant" for="terms"> 
                        I agree to the <a class="text-primary hover:underline" href="#">Terms of Service</a> and <a class="text-primary hover:underline" href="#">Privacy Policy</a>. 
                    </label> 
</div> 
<!-- Action Button --> 
<button class="w-full bg-primary text-on-primary py-md rounded-lg font-label-md text-label-md hover:bg-primary-container hover:shadow-lg active:scale-[0.98] transition-all flex items-center justify-center gap-sm" type="submit"> 
                    Register 
                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span> 
</button> 
</form> 
<!-- Footer Action --> 
<div class="mt-xl pt-lg border-t border-outline-variant/30 text-center"> 
<p class="font-body-md text-body-md text-on-surface-variant"> 
                    Already have an account?  
                    <a class="text-primary font-bold hover:underline" href="index.php?page=login">Log in</a> 
</p> 
</div> 
</div> 
</div> 
</body></html> 
