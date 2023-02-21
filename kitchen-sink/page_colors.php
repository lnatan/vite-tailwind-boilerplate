<?php /* Template Name: Example Colors*/ ?>

<?php get_header() ?>

<h1 class="py-3 mb-6 text-center border-b"><?php the_title() ?></h1>

<div class="grid grid-cols-2 gap-10">

<h2 class="col-span-2">Bg colors</h2>

<div class="h-36 bg-zinc-100 rounded-lg p-2 mb-4">
  <span>color 'zinc-100' as <span class="font-bold"> Surface Secondary</span></span>
</div>

<div class="h-36 bg-neutral-900 rounded-lg p-2 mb-4">
  <span class="text-white">color 'neutral-900' as <span class="font-bold"> High Emphasis</span></span>
</div>

<div class="h-36 bg-neutral-600 rounded-lg p-2 mb-4">
  <span class="text-white">color 'neutral-600' as <span class="font-bold"> Medium Emphasis</span></span>
</div>

<div class="h-36 bg-neutral-400 rounded-lg p-2 mb-4">
  <span class="text-white">color 'neutral-400' as <span class="font-bold"> Disabled</span></span>
</div>

<h2 class="col-span-2">Alert colors</h2>

<div class="h-36 bg-emerald-400 rounded-lg p-2 mb-4">
  <span class="text-white">color 'teal-400' as <span class="font-bold"> Success</span></span>
</div>

<div class="h-36 bg-rose-500 rounded-lg p-2 mb-4">
  <span class="text-white">color 'rose-500 ' as <span class="font-bold"> Error</span></span>
</div>

<div class="h-36 bg-orange-400 rounded-lg p-2 mb-4">
  <span class="text-white">color 'orange-400' as <span class="font-bold"> Alert</span></span>
</div>

<div class="h-36 bg-indigo-100 rounded-lg p-2 mb-4">
  <span class="text-black">color 'indigo-100' as <span class="font-bold"> Tag</span></span>
</div>

<h2 class="col-span-2">Gradient colors</h2>

<div class="h-36 bg-gradient-to-r from-green-500 to-teal-400 rounded-lg p-2 mb-4">
  <span class="text-black">gradient 'bg-gradient-to-r from-green-500 to-teal-400' as <span class="font-bold"> Bonus</span></span>
</div>

<div class="h-36 bg-gradient-to-r from-yellow-600 to-amber-400 rounded-lg p-2 mb-4">
  <span class="text-white">gradient 'bg-gradient-to-r rom-yellow-600 to-amber-400' as <span class="font-bold"> Top</span></span>
</div>

<div class="h-36 bg-gradient-to-r from-orange-500 via-fuchsia-500 to-indigo-700 rounded-lg p-2 mb-4">
  <span class="text-white">gradient 'from-orange-500 via-fuchsia-500 to-indigo-700' as <span class="font-bold"> New</span></span>
</div>

<div class="h-36 bg-gradient-to-r from-amber-500 via-blue-600 to-orange-600 rounded-lg p-2 mb-4">
  <span class="text-white">gradient 'bg-gradient-to-r from-amber-500 via-blue-600 to-orange-600' as <span class="font-bold"> Hero</span></span>
</div>

</div>

<?php get_footer() ?>