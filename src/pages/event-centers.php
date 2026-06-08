<?php 
$pageTitle = 'EventPlan Pro - Venue Discovery';
ob_start(); 
?> 
<!-- Header Section with asymmetric layout --> 
<div class="flex flex-col md:flex-row justify-between items-end mb-xl gap-lg"> 
<div class="max-w-2xl"> 
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-sm">Discover Premium Event Centers</h2> 
<p class="font-body-lg text-body-lg text-on-surface-variant">Browse through our curated list of world-class venues tailored for your specific organizational needs, from corporate galas to intimate seminars.</p> 
</div> 
<div class="flex gap-md bg-surface-container-lowest p-xs rounded-xl shadow-sm"> 
<button class="px-lg py-sm bg-primary text-on-primary font-label-md text-label-md rounded-lg shadow-md hover:bg-primary-container transition-all"> 
                    Map View 
                </button> 
<button class="px-lg py-sm bg-surface-container-high text-on-surface font-label-md text-label-md rounded-lg hover:bg-surface-variant transition-all"> 
                    Grid View 
                </button> 
</div> 
</div> 
<!-- Filter Bar --> 
<section class="bg-surface-container-lowest p-lg rounded-xl shadow-sm mb-xl flex flex-wrap gap-lg items-center"> 
<div class="flex flex-col gap-xs min-w-[200px]"> 
<label class="font-label-md text-label-md text-on-surface-variant">Capacity Range</label> 
<select class="bg-surface-container border-none rounded-lg font-body-sm text-body-sm px-md py-sm focus:ring-2 focus:ring-primary"> 
<option>Any Capacity</option> 
<option>0 - 100 Guests</option> 
<option>100 - 500 Guests</option> 
<option>500 - 1000 Guests</option> 
<option>1000+ Guests</option> 
</select> 
</div> 
<div class="flex flex-col gap-xs min-w-[200px]"> 
<label class="font-label-md text-label-md text-on-surface-variant">Price Range</label> 
<select class="bg-surface-container border-none rounded-lg font-body-sm text-body-sm px-md py-sm focus:ring-2 focus:ring-primary"> 
<option>Any Price</option> 
<option>$0 - $1,000</option> 
<option>$1,000 - $5,000</option> 
<option>$5,000 - $10,000</option> 
<option>$10,000+</option> 
</select> 
</div> 
<div class="flex flex-col gap-xs min-w-[200px]"> 
<label class="font-label-md text-label-md text-on-surface-variant">Venue Type</label> 
<div class="flex gap-sm"> 
<button class="px-md py-sm bg-secondary-container text-on-secondary-container rounded-full text-label-sm font-label-sm">Indoor</button> 
<button class="px-md py-sm bg-surface-container text-on-surface-variant rounded-full text-label-sm font-label-sm border border-outline-variant">Outdoor</button> 
<button class="px-md py-sm bg-surface-container text-on-surface-variant rounded-full text-label-sm font-label-sm border border-outline-variant">Hybrid</button> 
</div> 
</div> 
<div class="ml-auto"> 
<button class="flex items-center gap-sm font-label-md text-label-md text-primary hover:bg-primary-fixed p-sm rounded-lg transition-colors"> 
<span class="material-symbols-outlined">filter_list</span> 
                    More Filters 
                </button> 
</div> 
</section> 
<!-- Bento Grid Layout for Venues --> 
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-xl"> 
<!-- Card 1 --> 
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group"> 
<div class="relative h-64 overflow-hidden"> 
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A wide-angle shot of a luxurious corporate event hall featuring high ceilings, elegant crystal chandeliers, and a polished marble floor. The room is bathed in warm, golden light with large floor-to-ceiling windows showing a modern city skyline at dusk. The overall aesthetic is professional, sophisticated, and clean, using a palette of white, champagne, and deep blue." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCdvYJDedImQeEhkbcq6RQouJo-pHxSQyBsG6FacdgarJLqClUtXPbWmU867WrV2YuyKtK4b9yszKU1wEPdr_uWPI04vi_Vk-i-tob7dsm-eYf-DXV4oU914cfadS6H5v_wgD-WAH2s1dAjCUKtIK8ZcteSaR-ZXp4PCQaL0lK4oP4wpveWpFOdjFoQSU23kO99XvR-hiiaZAlyYF0CwRkUot0V2lyCHfp6xeg2RSiae--z-OdMYT5unXA5u9Qs9mCJWWNzekiYdH7v"/> 
<div class="absolute top-4 right-4 bg-surface-container-lowest/90 backdrop-blur-md px-md py-xs rounded-full shadow-sm"> 
<span class="font-label-sm text-label-sm text-primary">FEATURED</span> 
</div> 
</div> 
<div class="p-lg"> 
<div class="flex justify-between items-start mb-sm"> 
<h3 class="font-headline-sm text-headline-sm text-on-surface">The Grand Atrium</h3> 
<div class="flex items-center text-tertiary"> 
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span> 
<span class="font-label-md text-label-md ml-xs">4.9</span> 
</div> 
</div> 
<div class="flex items-center gap-xs text-on-surface-variant mb-md"> 
<span class="material-symbols-outlined text-[18px]">location_on</span> 
<span class="font-body-sm text-body-sm">Downtown Financial District, NY</span> 
</div> 
<div class="grid grid-cols-2 gap-md py-md border-y border-surface-variant mb-lg"> 
<div class="flex items-center gap-sm"> 
<span class="material-symbols-outlined text-outline">groups</span> 
<div class="flex flex-col"> 
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Capacity</span> 
<span class="font-label-md text-label-md text-on-surface">1,200 Guests</span> 
</div> 
</div> 
<div class="flex items-center gap-sm"> 
<span class="material-symbols-outlined text-outline">payments</span> 
<div class="flex flex-col"> 
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Price</span> 
<span class="font-label-md text-label-md text-on-surface">$5,500 / day</span> 
</div> 
</div> 
</div> 
<button class="w-full py-md bg-surface-container text-primary font-label-md text-label-md rounded-lg hover:bg-primary-fixed transition-colors active:scale-95"> 
                        View Details 
                    </button> 
</div> 
</div> 
<!-- Card 2 --> 
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group"> 
<div class="relative h-64 overflow-hidden"> 
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A modern industrial-style loft space with exposed brick walls, black metal beams, and string lights hanging from the ceiling. The furniture is minimalist and contemporary, featuring sleek wooden tables and ghost chairs. Natural light pours in through large factory-style windows, creating a bright and creative atmosphere. The color scheme is earthy and neutral with accents of emerald green plants." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-0nl-UJL_Ank5zeIu8-6Sx0_ZxZtHoKe36w1FDQ7zVcSIhVAoj7Lmjuku2L5U85wFzG4GUJTRdAnyo253QBCKA0C5S5gyNs09x3oA7Q4TZJiIC2FUWW6bkNMbJH0h_AGHmYQS3rU9TpFG7p-7lheEOdx9Bio_Ul2rIH7LltJsr9nZ2NG-WPBzFRLf4-IvRTHr--MMgVq6-_xiQ-Xte8QjfhHpDbjBCGFsBYazj--WUm2KSqoctME1VWRaOHpDZiSfRIdmjnB-r0nw"/> 
</div> 
<div class="p-lg"> 
<div class="flex justify-between items-start mb-sm"> 
<h3 class="font-headline-sm text-headline-sm text-on-surface">Warehouse 42</h3> 
<div class="flex items-center text-tertiary"> 
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span> 
<span class="font-label-md text-label-md ml-xs">4.7</span> 
</div> 
</div> 
<div class="flex items-center gap-xs text-on-surface-variant mb-md"> 
<span class="material-symbols-outlined text-[18px]">location_on</span> 
<span class="font-body-sm text-body-sm">Creative Quarter, Brooklyn</span> 
</div> 
<div class="grid grid-cols-2 gap-md py-md border-y border-surface-variant mb-lg"> 
<div class="flex items-center gap-sm"> 
<span class="material-symbols-outlined text-outline">groups</span> 
<div class="flex flex-col"> 
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Capacity</span> 
<span class="font-label-md text-label-md text-on-surface">350 Guests</span> 
</div> 
</div> 
<div class="flex items-center gap-sm"> 
<span class="material-symbols-outlined text-outline">payments</span> 
<div class="flex flex-col"> 
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Price</span> 
<span class="font-label-md text-label-md text-on-surface">$2,800 / day</span> 
</div> 
</div> 
</div> 
<button class="w-full py-md bg-surface-container text-primary font-label-md text-label-md rounded-lg hover:bg-primary-fixed transition-colors active:scale-95"> 
                        View Details 
                    </button> 
</div> 
</div> 
<!-- Card 3 --> 
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group"> 
<div class="relative h-64 overflow-hidden"> 
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="An expansive outdoor event terrace overlooking a serene mountain lake at sunset. The deck is made of high-quality cedar wood and features modern fire pits and comfortable lounge seating. The lighting is soft and ambient from recessed floor LEDs and the fading natural sunlight. The aesthetic is organic yet upscale, utilizing natural textures and a palette of warm ochre, soft blues, and dark slate." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUji-uI97chlS8LozrSD-obCddSQiCcYl25Gb9MBXmNe5Kn-AqQnTsaKiyzvf_PK7AOGuNX1DDGvwjn7ZysDZ_lCmtVSNqoJsHiXbEixXbbaF_hD4ZmPRqMdHEUgGwDp0bh22pjMtsn4_C37TR0OWTWFn-5hLrI_zZs1VkGvNigt1rWHvaA-UnPBOaB5N5UQDzbRU8zixPDZz4Vzzk6l4RvG_CRz--pHm2bQaG917sn_uXp9CgQPjHJtTKMuxCXRC3_ECbNE5a3Evu"/> 
</div> 
<div class="p-lg"> 
<div class="flex justify-between items-start mb-sm"> 
<h3 class="font-headline-sm text-headline-sm text-on-surface">Lakeside Terrace</h3> 
<div class="flex items-center text-tertiary"> 
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span> 
<span class="font-label-md text-label-md ml-xs">5.0</span> 
</div> 
</div> 
<div class="flex items-center gap-xs text-on-surface-variant mb-md"> 
<span class="material-symbols-outlined text-[18px]">location_on</span> 
<span class="font-body-sm text-body-sm">Alpine Resort Area, CO</span> 
</div> 
<div class="grid grid-cols-2 gap-md py-md border-y border-surface-variant mb-lg"> 
<div class="flex items-center gap-sm"> 
<span class="material-symbols-outlined text-outline">groups</span> 
<div class="flex flex-col"> 
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Capacity</span> 
<span class="font-label-md text-label-md text-on-surface">200 Guests</span> 
</div> 
</div> 
<div class="flex items-center gap-sm"> 
<span class="material-symbols-outlined text-outline">payments</span> 
<div class="flex flex-col"> 
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Price</span> 
<span class="font-label-md text-label-md text-on-surface">$4,200 / day</span> 
</div> 
</div> 
</div> 
<button class="w-full py-md bg-surface-container text-primary font-label-md text-label-md rounded-lg hover:bg-primary-fixed transition-colors active:scale-95"> 
                        View Details 
                    </button> 
</div> 
</div> 
<!-- Card 4 --> 
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group"> 
<div class="relative h-64 overflow-hidden"> 
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A futuristic and sleek auditorium with curved white walls and integrated blue neon lighting strips. The seating is arranged in a steep rake for perfect visibility, featuring ergonomic dark gray chairs. The stage is equipped with a massive high-definition LED screen display. The mood is high-tech and innovative, characterized by cold white lighting and high-contrast surfaces." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCLb2aPEu3dn_7gWX1f3ElwTXwN47omeBERbpx0u46CVkA0sibELYyUtQ5B-r4GRmg1FIxvixgIUAmsICU5ghZsr9K9w0pWvSBw7aMPs_aBxWG6SpPmIYT5NBGyh_pXhfzjBOmOlGn2wIpKYoNy5w-FcUc0GBteptL35yO39wVQHsDfnibSalAmJjAijICavmoMStlvSVqPJRb8gJXMmadt3hHshlSBen-94K6s8o4GQt4TX7ikMOZjPPCQIofXXD1IL5MxR6r9aAei"/> 
</div> 
<div class="p-lg"> 
<div class="flex justify-between items-start mb-sm"> 
<h3 class="font-headline-sm text-headline-sm text-on-surface">The Tech Hub</h3> 
<div class="flex items-center text-tertiary"> 
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span> 
<span class="font-label-md text-label-md ml-xs">4.6</span> 
</div> 
</div> 
<div class="flex items-center gap-xs text-on-surface-variant mb-md"> 
<span class="material-symbols-outlined text-[18px]">location_on</span> 
<span class="font-body-sm text-body-sm">Innovation District, SF</span> 
</div> 
<div class="grid grid-cols-2 gap-md py-md border-y border-surface-variant mb-lg"> 
<div class="flex items-center gap-sm"> 
<span class="material-symbols-outlined text-outline">groups</span> 
<div class="flex flex-col"> 
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Capacity</span> 
<span class="font-label-md text-label-md text-on-surface">500 Guests</span> 
</div> 
</div> 
<div class="flex items-center gap-sm"> 
<span class="material-symbols-outlined text-outline">payments</span> 
<div class="flex flex-col"> 
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Price</span> 
<span class="font-label-md text-label-md text-on-surface">$6,800 / day</span> 
</div> 
</div> 
</div> 
<button class="w-full py-md bg-surface-container text-primary font-label-md text-label-md rounded-lg hover:bg-primary-fixed transition-colors active:scale-95"> 
                        View Details 
                    </button> 
</div> 
</div> 
<!-- Card 5 --> 
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group"> 
<div class="relative h-64 overflow-hidden"> 
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A historic European-style ballroom with ornate plasterwork, gilded wall paneling, and an intricate parquet floor. High ceilings feature beautiful fresco paintings and massive wrought-iron chandeliers. The space is filled with round banquet tables dressed in heavy white linen and silver accents. The lighting is warm and candle-like, creating a timeless and prestigious atmosphere with a palette of cream, gold, and deep burgundy." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1JqK3D158H-n4chJkAkN9GvUbsktQFpuT-lEt87gKXN7Q-ABZITH4yuNU4TLmEb2N84HJmmCdtvDEYAFhOpVZT2JivKpdye-l2Rhesisjh1smixaurXham67dpgHyXW4MWnvPPBekzOAsd5Umv53jmF_3ti4W1gaXooJcfpTRWKnHyX4CrqxSUzGxrwGcSwDU9kK9jRC3HSFzbdsUU9hloaQH_0CgkxmnvmuNZv7LeVmyT6f-u0S-IPZUR5RnY6ijT1ClkzKN_gyZ"/> 
</div> 
<div class="p-lg"> 
<div class="flex justify-between items-start mb-sm"> 
<h3 class="font-headline-sm text-headline-sm text-on-surface">The Heritage Hall</h3> 
<div class="flex items-center text-tertiary"> 
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span> 
<span class="font-label-md text-label-md ml-xs">4.8</span> 
</div> 
</div> 
<div class="flex items-center gap-xs text-on-surface-variant mb-md"> 
<span class="material-symbols-outlined text-[18px]">location_on</span> 
<span class="font-body-sm text-body-sm">Old Town Plaza, DC</span> 
</div> 
<div class="grid grid-cols-2 gap-md py-md border-y border-surface-variant mb-lg"> 
<div class="flex items-center gap-sm"> 
<span class="material-symbols-outlined text-outline">groups</span> 
<div class="flex flex-col"> 
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Capacity</span> 
<span class="font-label-md text-label-md text-on-surface">800 Guests</span> 
</div> 
</div> 
<div class="flex items-center gap-sm"> 
<span class="material-symbols-outlined text-outline">payments</span> 
<div class="flex flex-col"> 
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Price</span> 
<span class="font-label-md text-label-md text-on-surface">$4,500 / day</span> 
</div> 
</div> 
</div> 
<button class="w-full py-md bg-surface-container text-primary font-label-md text-label-md rounded-lg hover:bg-primary-fixed transition-colors active:scale-95"> 
                        View Details 
                    </button> 
</div> 
</div> 
<!-- Card 6 --> 
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group"> 
<div class="relative h-64 overflow-hidden"> 
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A minimalist garden pavilion with glass walls and a sleek white frame, situated in a lush, manicured botanical garden. The interior is open and airy with light-colored wood flooring and sculptural designer lighting fixtures hanging from the ceiling. Outside, various exotic plants and blooming flowers are visible in soft morning light. The vibe is tranquil, clean, and modern-zen, using a palette of soft whites, pale woods, and vibrant greens." src="https://lh3.googleusercontent.com/aida-public/AB6AXuADVuDRWIUCBkcuRjbk8p7lQ0T11Zj7EO2NxkH5Fk3ks6vmT0rLZf6-29UTjlG0EfjkxfQ6jftgNB2i6zexa69cl2gzZHYBPLMujWBF7zWDODahiG5rxwsKvFJnXaoRnOSyKBHDfGYRUdzukf_q57ff1Gu5vpTqzcFppiOmoUECHpuu5DFugAFfVViBRTw1ENs-39rT1hyupRq93k0uXN2s2NSz0Z97Qrj8_TzK39QAT01U4C5CWhn3C3LofMqQVCvz6wME1lrj-slq"/> 
</div> 
<div class="p-lg"> 
<div class="flex justify-between items-start mb-sm"> 
<h3 class="font-headline-sm text-headline-sm text-on-surface">Botanical Pavilion</h3> 
<div class="flex items-center text-tertiary"> 
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span> 
<span class="font-label-md text-label-md ml-xs">4.9</span> 
</div> 
</div> 
<div class="flex items-center gap-xs text-on-surface-variant mb-md"> 
<span class="material-symbols-outlined text-[18px]">location_on</span> 
<span class="font-body-sm text-body-sm">City Gardens, Vancouver</span> 
</div> 
<div class="grid grid-cols-2 gap-md py-md border-y border-surface-variant mb-lg"> 
<div class="flex items-center gap-sm"> 
<span class="material-symbols-outlined text-outline">groups</span> 
<div class="flex flex-col"> 
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Capacity</span> 
<span class="font-label-md text-label-md text-on-surface">150 Guests</span> 
</div> 
</div> 
<div class="flex items-center gap-sm"> 
<span class="material-symbols-outlined text-outline">payments</span> 
<div class="flex flex-col"> 
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Price</span> 
<span class="font-label-md text-label-md text-on-surface">$3,100 / day</span> 
</div> 
</div> 
</div> 
<button class="w-full py-md bg-surface-container text-primary font-label-md text-label-md rounded-lg hover:bg-primary-fixed transition-colors active:scale-95"> 
                        View Details 
                    </button> 
</div> 
</div> 
</div> 
<!-- Floating Action Button Contextual Check --> 
<button class="fixed bottom-8 right-8 bg-primary text-on-primary w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:bg-primary-container transition-transform active:scale-90 z-50"> 
<span class="material-symbols-outlined">add</span> 
</button> 
<?php 
$content = ob_get_clean(); 
include __DIR__ . '/../templates/layout.php'; 
?>
