<!DOCTYPE html> 
 
<html class="light" lang="en">
<?php 
$pageTitle = 'Login - EventPlan Pro';
include __DIR__ . '/../includes/head.php'; 
?> 
<body class="bg-background text-on-background min-h-screen flex items-center justify-center p-md"> 
<!-- Login Container --> 
<main class="w-full max-w-[1200px] grid grid-cols-1 md:grid-cols-2 bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0px_4px_12px_rgba(0,0,0,0.05)]"> 
<!-- Visual Section (Hidden on small screens) --> 
<section class="hidden md:block relative overflow-hidden bg-primary"> 
<div class="absolute inset-0 z-0"> 
<img alt="Event Planning Visual" class="w-full h-full object-cover opacity-60 mix-blend-overlay" data-alt="A high-angle photograph of a sophisticated corporate event gala with long tables decorated with elegant floral arrangements and crystal glassware. The scene is bathed in warm, cinematic lighting that contrasts beautifully with deep blue accent colors in the decor. The atmosphere is professional, organized, and high-end, perfectly reflecting a premium event planning service. The image uses a clean, modern aesthetic with a focus on symmetry and meticulous detail." src="https://lh3.googleusercontent.com/aida-public/AB6AXuClP-E1ALxpb-BOWwm-osQkiveQmo2jW4J6sfBUha42u-zRxNIqf5SicOJQLSiT-S7epq-cP72jhsolZSVCZJVrKoWVDLCPBxGq16DaRS-TH2qim1uS4xyPA1bTnKzjPLVNpshxKMWL6hzI7Bz5DCvdT5rNOwCeQCmmu6pFjL7ndyw81Pemue6QQDltaNEbzsIS6nFlsHBfqX_Ees-TX0USakpG2sUa3Sbq72Bl6IsHAJqLpcwNwVomcnLXtH0u8kupNmg2rojemM9x"/> 
</div> 
<div class="relative z-10 h-full flex flex-col justify-center p-xl text-on-primary"> 
<h1 class="font-headline-lg text-headline-lg mb-md">EventPlan Pro</h1> 
<p class="font-body-lg text-body-lg opacity-90 max-w-md">Streamline your event management workflow with our comprehensive suite of planning tools designed for professionals.</p> 
<div class="mt-xl flex gap-md"> 
<div class="flex flex-col items-center"> 
<span class="font-headline-sm text-headline-sm">500+</span> 
<span class="font-label-sm text-label-sm uppercase opacity-70">Events Planned</span> 
</div> 
<div class="w-[1px] bg-on-primary opacity-20 h-lg self-center"></div> 
<div class="flex flex-col items-center"> 
<span class="font-headline-sm text-headline-sm">99%</span> 
<span class="font-label-sm text-label-sm uppercase opacity-70">Client Success</span> 
</div> 
</div> 
</div> 
</section> 
<!-- Form Section --> 
<section class="flex flex-col justify-center items-center p-lg md:p-xl lg:p-[64px]"> 
<div class="w-full max-w-[400px]"> 
<header class="mb-xl text-center md:text-left"> 
<div class="flex items-center gap-sm justify-center md:justify-start mb-md"> 
<span class="material-symbols-outlined text-primary text-[32px]" data-icon="event">event</span> 
<span class="font-headline-sm text-headline-sm text-primary font-bold">EventPlan Pro</span> 
</div> 
<h2 class="font-headline-md text-headline-md text-on-surface mb-xs">Welcome Back</h2> 
<p class="font-body-md text-body-md text-on-surface-variant">Log in to manage your upcoming events and collaborations.</p> 
</header> 
<form class="space-y-lg" action="index.php?page=dashboard" method="POST"> 
<!-- Email Field --> 
<div class="space-y-base"> 
<label class="font-label-md text-label-md text-on-surface-variant ml-xs" for="email">Email Address</label> 
<div class="relative"> 
<span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline" data-icon="mail">mail</span> 
<input class="w-full pl-[48px] pr-md py-md bg-surface-container-lowest border border-outline-variant rounded-lg font-body-md text-body-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all" id="email" name="email" placeholder="name@company.com" type="email"/> 
</div> 
</div> 
<!-- Password Field --> 
<div class="space-y-base"> 
<div class="flex justify-between items-center px-xs"> 
<label class="font-label-md text-label-md text-on-surface-variant" for="password">Password</label> 
<a class="font-label-md text-label-md text-primary hover:underline transition-all" href="#">Forgot password?</a> 
</div> 
<div class="relative"> 
<span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline" data-icon="lock">lock</span> 
<input class="w-full pl-[48px] pr-[48px] py-md bg-surface-container-lowest border border-outline-variant rounded-lg font-body-md text-body-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all" id="password" name="password" placeholder="••••••••" type="password"/> 
<button class="absolute right-md top-1/2 -translate-y-1/2 text-outline hover:text-on-surface transition-colors" type="button"> 
<span class="material-symbols-outlined" data-icon="visibility">visibility</span> 
</button> 
</div> 
</div> 
<!-- Remember Me --> 
<div class="flex items-center px-xs"> 
<input class="w-md h-md text-primary border-outline-variant rounded focus:ring-primary transition-all" id="remember" name="remember" type="checkbox"/> 
<label class="ml-sm font-body-sm text-body-sm text-on-surface-variant cursor-pointer select-none" for="remember">Remember me for 30 days</label> 
</div> 
<!-- Submit Button --> 
<button class="w-full bg-primary text-on-primary py-md rounded-lg font-label-md text-label-md hover:bg-surface-tint active:scale-[0.98] transition-all shadow-[0px_4px_12px_rgba(0,74,198,0.2)]" type="submit"> 
                        Login to Dashboard 
                    </button> 
<!-- Alternative Social Login --> 
<div class="relative py-md"> 
<div class="absolute inset-0 flex items-center"> 
<div class="w-full border-t border-outline-variant"></div> 
</div> 
<div class="relative flex justify-center text-label-sm uppercase"> 
<span class="bg-surface-container-lowest px-md text-on-surface-variant">Or continue with</span> 
</div> 
</div> 
<div class="grid grid-cols-2 gap-md"> 
<button class="flex items-center justify-center gap-sm py-md px-md bg-surface-container border border-outline-variant rounded-lg font-label-md text-label-md hover:bg-surface-container-high transition-colors" type="button"> 
<img alt="Google" class="w-[18px] h-[18px]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD29r8NaGrovJidzpWcD-Err3WNATnC0Vb-WsELK24qMOSz9TpoYabVkrqBa5JO4jFM6gAJnWrUU1uqkSWNnudlwWReuHqBhI36I7MnoWSMz7vk1Xk6zrQVB3waPhlVlJ5oXsMHi9azkUgWhPWKgMEvtaltNTw8SJ8p3fH5gtm-4yGcitgZ7aedU2CboY-A_NqBJZ9GRVZc8BHq46WcJ89it23lWQSH6IjOY67QuS529j1jwh2IPH35A4Fa5ss1S1dkhOsyrFp27Y6I"/> 
                            Google 
                        </button> 
<button class="flex items-center justify-center gap-sm py-md px-md bg-surface-container border border-outline-variant rounded-lg font-label-md text-label-md hover:bg-surface-container-high transition-colors" type="button"> 
<span class="material-symbols-outlined text-on-surface" data-icon="terminal" data-weight="fill">terminal</span> 
                            SSO 
                        </button> 
</div> 
</form> 
<footer class="mt-xl text-center"> 
<p class="font-body-sm text-body-sm text-on-surface-variant"> 
                        Don't have an account?  
                        <a class="text-primary font-bold hover:underline" href="index.php?page=register">Register Now</a> 
</p> 
</footer> 
</div> 
</section> 
</main> 
<!-- Footer Terms --> 
<div class="fixed bottom-lg left-0 right-0 text-center"> 
<nav class="flex justify-center gap-lg"> 
<a class="font-label-sm text-label-sm text-outline hover:text-on-surface-variant transition-colors" href="#">Privacy Policy</a> 
<a class="font-label-sm text-label-sm text-outline hover:text-on-surface-variant transition-colors" href="#">Terms of Service</a> 
<a class="font-label-sm text-label-sm text-outline hover:text-on-surface-variant transition-colors" href="#">Support</a> 
</nav> 
</div> 
</body></html> 
