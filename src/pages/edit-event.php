<?php 
$pageTitle = 'EventPlan Pro - Edit Event';
ob_start(); 
?> 
<div class="max-w-5xl mx-auto"> 
<div class="flex items-center justify-between mb-lg"> 
<div> 
<nav class="flex gap-xs items-center text-outline font-label-md text-label-md mb-xs"> 
<span>Events</span> 
<span class="material-symbols-outlined text-sm" style="font-size: 14px;">chevron_right</span> 
<span class="text-primary">Edit Event</span> 
</nav> 
<h2 class="font-headline-lg text-headline-lg text-on-surface">Event Details</h2> 
</div> 
<div class="flex gap-md"> 
<button class="px-lg py-md rounded-lg bg-surface-container text-on-surface-variant font-label-md text-label-md hover:bg-surface-container-high transition-colors">Discard Changes</button> 
<button class="px-lg py-md rounded-lg bg-primary text-on-primary font-label-md text-label-md shadow-sm hover:shadow-md transition-all active:scale-95">Save Event</button> 
</div> 
</div> 
<div class="grid grid-cols-12 gap-lg"> 
<!-- Main Form Column --> 
<div class="col-span-12 lg:col-span-8 flex flex-col gap-lg"> 
<!-- General Information Card --> 
<section class="bg-surface-container-lowest p-xl rounded-lg shadow-[0px_4px_12px_rgba(0,0,0,0.05)]"> 
<h3 class="font-headline-sm text-headline-sm mb-lg">General Information</h3> 
<div class="space-y-lg"> 
<div> 
<label class="block font-label-md text-label-md text-on-surface-variant mb-xs" for="event-name">Event Name</label> 
<input class="w-full rounded-lg border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/20 font-body-md text-body-md p-md transition-all" id="event-name" type="text" value="Global Tech Summit 2024"/> 
</div> 
<div class="grid grid-cols-1 md:grid-cols-2 gap-lg"> 
<div> 
<label class="block font-label-md text-label-md text-on-surface-variant mb-xs" for="event-type">Event Type</label> 
<select class="w-full rounded-lg border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/20 font-body-md text-body-md p-md appearance-none transition-all" id="event-type"> 
<option>Conference</option> 
<option selected="">Exhibition</option> 
<option>Workshop</option> 
<option>Gala Dinner</option> 
<option>Product Launch</option> 
</select> 
</div> 
<div> 
<label class="block font-label-md text-label-md text-on-surface-variant mb-xs" for="status">Status</label> 
<select class="w-full rounded-lg border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/20 font-body-md text-body-md p-md appearance-none transition-all" id="status"> 
<option selected="">Planning</option> 
<option>Confirmed</option> 
<option>Postponed</option> 
<option>Completed</option> 
</select> 
</div> 
</div> 
<div> 
<label class="block font-label-md text-label-md text-on-surface-variant mb-xs" for="description">Description</label> 
<textarea class="w-full rounded-lg border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/20 font-body-md text-body-md p-md transition-all" id="description" rows="5">The annual Global Tech Summit brings together industry leaders, innovators, and technology enthusiasts to discuss the latest trends in artificial intelligence, cloud computing, and sustainable technology solutions.</textarea> 
</div> 
</div> 
</section> 
<!-- Logistics Card --> 
<section class="bg-surface-container-lowest p-xl rounded-lg shadow-[0px_4px_12px_rgba(0,0,0,0.05)]"> 
<h3 class="font-headline-sm text-headline-sm mb-lg">Venue &amp; Logistics</h3> 
<div class="space-y-lg"> 
<div> 
<label class="block font-label-md text-label-md text-on-surface-variant mb-xs" for="venue">Venue Name</label> 
<div class="relative"> 
<span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline">location_on</span> 
<input class="w-full rounded-lg border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/20 font-body-md text-body-md p-md pl-xl transition-all" id="venue" type="text" value="Grand Pavilion Convention Center"/> 
</div> 
</div> 
<div class="grid grid-cols-1 md:grid-cols-3 gap-lg"> 
<div class="md:col-span-1"> 
<label class="block font-label-md text-label-md text-on-surface-variant mb-xs" for="date">Date</label> 
<input class="w-full rounded-lg border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/20 font-body-md text-body-md p-md transition-all" id="date" type="date" value="2024-11-15"/> 
</div> 
<div class="md:col-span-1"> 
<label class="block font-label-md text-label-md text-on-surface-variant mb-xs" for="time">Start Time</label> 
<input class="w-full rounded-lg border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/20 font-body-md text-body-md p-md transition-all" id="time" type="time" value="09:00"/> 
</div> 
<div class="md:col-span-1"> 
<label class="block font-label-md text-label-md text-on-surface-variant mb-xs" for="guests">Expected Guests</label> 
<input class="w-full rounded-lg border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/20 font-body-md text-body-md p-md transition-all" id="guests" type="number" value="1200"/> 
</div> 
</div> 
</div> 
</section> 
</div> 
<!-- Sidebar Column / Secondary Actions --> 
<div class="col-span-12 lg:col-span-4 flex flex-col gap-lg"> 
<!-- Image Upload Placeholder --> 
<div class="bg-surface-container-lowest rounded-lg shadow-[0px_4px_12px_rgba(0,0,0,0.05)] overflow-hidden"> 
<div class="aspect-video relative group cursor-pointer"> 
<img alt="Event preview image" class="w-full h-full object-cover transition-transform group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA--gGcQCzGuieGGCaxqEyCpc9SCOYbvgma4Qw1cipWWwoB6ScZ-HtwuBat-9pjVcGg3XAPeOHbXzTRpnESlRuWumW0XynhGwiFZPUlOet5GbWxNelR2x4-ew5XgbtUOsGpS1wJtBoE4PpKbrH4Nnig7GDkAtEI85ZRUznequpGCKOhfM-g7ky_Ezb1PnMaDU0IZ855Z9V4oxiyUL_Gkd9rSCQrIVrhANlozeNofC9Ca7A1rPBhnLb-1NBAdpYdCi-Gfv49y70lIU2w"/> 
<div class="absolute inset-0 bg-on-background/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity"> 
<div class="bg-surface-container-lowest p-md rounded-full flex items-center gap-sm"> 
<span class="material-symbols-outlined text-primary">edit</span> 
<span class="font-label-md text-label-md text-on-surface">Change Header</span> 
</div> 
</div> 
</div> 
<div class="p-lg"> 
<p class="font-body-sm text-body-sm text-on-surface-variant">Recommended size: 1200x675px. Max file size: 5MB.</p> 
</div> 
</div> 
<!-- Quick Actions / Meta --> 
<section class="bg-surface-container-lowest p-xl rounded-lg shadow-[0px_4px_12px_rgba(0,0,0,0.05)]"> 
<h3 class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider mb-lg">Event Controls</h3> 
<div class="space-y-md"> 
<div class="flex items-center justify-between p-md rounded-lg hover:bg-surface-container transition-colors cursor-pointer group"> 
<div class="flex items-center gap-md"> 
<span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">visibility</span> 
<span class="font-body-md text-body-md">Private Event</span> 
</div> 
<div class="w-10 h-6 bg-primary rounded-full relative"> 
<div class="absolute right-1 top-1 w-4 h-4 bg-white rounded-full"></div> 
</div> 
</div> 
<div class="flex items-center justify-between p-md rounded-lg hover:bg-surface-container transition-colors cursor-pointer group"> 
<div class="flex items-center gap-md"> 
<span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">mail</span> 
<span class="font-body-md text-body-md">Guest Notifications</span> 
</div> 
<div class="w-10 h-6 bg-surface-variant rounded-full relative"> 
<div class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full"></div> 
</div> 
</div> 
<hr class="border-outline-variant opacity-50"/> 
<button class="w-full flex items-center justify-center gap-md p-md rounded-lg border-2 border-dashed border-outline-variant text-on-surface-variant hover:border-primary hover:text-primary transition-all"> 
<span class="material-symbols-outlined">add_circle</span> 
<span class="font-label-md text-label-md">Add Co-organizer</span> 
</button> 
</div> 
</section> 
<!-- Danger Zone --> 
<section class="p-lg rounded-lg border border-error/20 bg-error-container/10"> 
<div class="flex items-start gap-md"> 
<span class="material-symbols-outlined text-error">warning</span> 
<div> 
<h4 class="font-label-md text-label-md text-on-error-container font-bold">Cancel Event</h4> 
<p class="font-body-sm text-body-sm text-on-error-container/80 mb-md">Cancelling this event will notify all registered guests immediately.</p> 
<button class="text-error font-label-md text-label-md hover:underline">Request Cancellation</button> 
</div> 
</div> 
</section> 
</div> 
</div> 
</div> 
<?php 
$content = ob_get_clean(); 
include __DIR__ . '/../templates/layout.php'; 
?>
