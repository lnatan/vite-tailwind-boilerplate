<?php /* Template Name: Example Button*/ ?>

<?php get_header() ?>

<h1 class="py-3 mb-6 text-center border-b"><?php the_title() ?></h1>

<?php
  $buttons = array(
    array(
      'kind' => 'primary',
      'size' => 'big',
      'text' => 'Button text',
    ),
    array(
      'kind' => 'primary',
      'size' => 'small',
      'text' => 'Disabled',
      'disabled' => true
    ),
    array(
      'kind' => 'secondary',
      'size' => 'big',
      'text' => 'Button text',
      'link' => '/'
    ),
    array(
      'kind' => 'secondary',
      'size' => 'small',
      'text' => 'Disabled',
      'link' => '/',
      'disabled' => true
    ),
    array(
      'kind' => 'ghost',
      'size' => 'big',
      'text' => 'Button text',
      'icon' => 'play-arrow',
      'link' => '/'
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

<?php get_footer() ?>