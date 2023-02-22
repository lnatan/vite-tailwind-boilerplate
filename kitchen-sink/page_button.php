<?php /* Template Name: Example Button*/ ?>

<?php get_header() ?>

<h1 class="py-3 mb-6 text-center border-b"><?php the_title() ?></h1>

<?php
  $buttons = array(
    array(
      'kind' => 'primary',
      'size' => 'big',
      'text' => 'Button text'
    ),
    array(
      'kind' => 'primary',
      'size' => 'small',
      'text' => 'Button text'
    ),
    array(
      'kind' => 'secondary',
      'size' => 'big',
      'text' => 'Button text'
    ),
    array(
      'kind' => 'secondary',
      'size' => 'small',
      'text' => 'Button text'
    ),
    array(
      'kind' => 'Link',
      'size' => 'big',
      'text' => 'Button text',
      'icon' => 'play-arrow'
    ),
  );
?>

<div class="flex items-end space-x-6 py-6">
  <?php render_view('button', $buttons[0]) ?>
  <?php render_view('button', $buttons[1]) ?>
  <?php render_view('button', $buttons[2]) ?>
  <?php render_view('button', $buttons[3]) ?>
  <?php render_view('button', $buttons[4]) ?>
</div>



<h2>Primary Big Button</h2>
<div class="flex items-end space-x-6">
  <button type="button" class="bg-neutral-900 text-white text-center text-base py-3 px-10 rounded-2xl hover:bg-neutral-600 active:bg-neutral-700">Button</button>
  <button type="button" disabled class="bg-neutral-900 text-white text-center text-base py-3 px-10 rounded-2xl hover:bg-neutral-600 disabled:bg-neutral-400 disabled:pointer-events-none">Button</button>
</div>

<?php get_footer() ?>