<aside class="fixed left-0 top-0 h-full w-[280px] bg-surface-container-lowest border-r border-outline-variant flex flex-col py-lg gap-xs shadow-sm z-50"> 
<div class="px-lg mb-xl"> 
<div class="flex items-center gap-md"> 
<div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-on-primary"> 
<span class="material-symbols-outlined">event</span> 
</div> 
<div> 
<h1 class="font-headline-md text-headline-md text-primary font-bold">EventPlan Pro</h1> 
<p class="font-label-md text-label-md text-on-surface-variant">Management Suite</p> 
</div> 
</div> 
</div> 
<nav class="flex flex-col gap-xs flex-grow"> 
<a class="flex items-center gap-md <?php echo $page === 'dashboard' ? 'bg-secondary-container text-on-secondary-container border-l-4 border-primary rounded-r-full' : 'text-on-surface-variant hover:bg-surface-container-high'; ?> transition-all py-md px-lg active:translate-x-1" href="index.php?page=dashboard"> 
<span class="material-symbols-outlined">dashboard</span> 
<span class="font-label-md text-label-md">Dashboard</span> 
</a> 
<a class="flex items-center gap-md <?php echo $page === 'events' ? 'bg-secondary-container text-on-secondary-container border-l-4 border-primary rounded-r-full' : 'text-on-surface-variant hover:bg-surface-container-high'; ?> transition-all py-md px-lg active:translate-x-1" href="index.php?page=events"> 
<span class="material-symbols-outlined">event</span> 
<span class="font-label-md text-label-md">Events</span> 
</a> 
<a class="flex items-center gap-md <?php echo $page === 'guests' ? 'bg-secondary-container text-on-secondary-container border-l-4 border-primary rounded-r-full' : 'text-on-surface-variant hover:bg-surface-container-high'; ?> transition-all py-md px-lg active:translate-x-1" href="index.php?page=guests"> 
<span class="material-symbols-outlined">group</span> 
<span class="font-label-md text-label-md">Guests</span> 
</a> 
<a class="flex items-center gap-md <?php echo $page === 'budget' ? 'bg-secondary-container text-on-secondary-container border-l-4 border-primary rounded-r-full' : 'text-on-surface-variant hover:bg-surface-container-high'; ?> transition-all py-md px-lg active:translate-x-1" href="index.php?page=budget"> 
<span class="material-symbols-outlined">payments</span> 
<span class="font-label-md text-label-md">Budget</span> 
</a> 
<a class="flex items-center gap-md <?php echo $page === 'collaboration' ? 'bg-secondary-container text-on-secondary-container border-l-4 border-primary rounded-r-full' : 'text-on-surface-variant hover:bg-surface-container-high'; ?> transition-all py-md px-lg active:translate-x-1" href="index.php?page=collaboration"> 
<span class="material-symbols-outlined">groups</span> 
<span class="font-label-md text-label-md">Collaboration</span> 
</a> 
<a class="flex items-center gap-md <?php echo $page === 'event-centers' ? 'bg-secondary-container text-on-secondary-container border-l-4 border-primary rounded-r-full' : 'text-on-surface-variant hover:bg-surface-container-high'; ?> transition-all py-md px-lg active:translate-x-1" href="index.php?page=event-centers"> 
<span class="material-symbols-outlined">location_on</span> 
<span class="font-label-md text-label-md">Event Centers</span> 
</a> 
<a class="flex items-center gap-md <?php echo $page === 'payments' ? 'bg-secondary-container text-on-secondary-container border-l-4 border-primary rounded-r-full' : 'text-on-surface-variant hover:bg-surface-container-high'; ?> transition-all py-md px-lg active:translate-x-1" href="index.php?page=payments"> 
<span class="material-symbols-outlined">receipt_long</span> 
<span class="font-label-md text-label-md">Payments</span> 
</a> 
<div class="mt-auto flex flex-col gap-xs"> 
<a class="flex items-center gap-md <?php echo $page === 'profile' ? 'bg-secondary-container text-on-secondary-container border-l-4 border-primary rounded-r-full' : 'text-on-surface-variant hover:bg-surface-container-high'; ?> transition-all py-md px-lg active:translate-x-1" href="index.php?page=profile"> 
<span class="material-symbols-outlined" <?php echo $page === 'profile' ? 'style="font-variation-settings: \'FILL\' 1;"' : ''; ?>>person</span> 
<span class="font-label-md text-label-md">Profile</span> 
</a> 
<a class="flex items-center gap-md text-on-surface-variant hover:bg-surface-container-high transition-all py-md px-lg active:translate-x-1" href="index.php?page=login"> 
<span class="material-symbols-outlined">logout</span> 
<span class="font-label-md text-label-md">Logout</span> 
</a> 
</div> 
</nav> 
</aside> 
