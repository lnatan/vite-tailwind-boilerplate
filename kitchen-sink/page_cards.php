<?php /* Template Name: Example Cards*/ ?>

<?php get_header() ?>

<?php
$cards = array(
    array(
        'title' => 'Card 1',
        'image_url' => 'https://picsum.photos/800/600',
        'button_text' => 'Learn more',
        'button_type' => 'main'
    ),
    array(
        'title' => 'Card 2',
        'image_url' => 'https://picsum.photos/800/600',
        'button_text' => 'Buy now',
        'button_type' => 'outlined'
    ),
    array(
        'title' => 'Card 3',
        'image_url' => 'https://picsum.photos/800/600',
        'button_text' => 'Sign up',
        'button_type' => 'transparent'
    ),
);
?>

<div class="flex flex-wrap -mx-4">
  <?php foreach ($cards as $card) { ?>
    <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 px-4 py-4">
      <?php my_custom_card($card['title'], $card['image_url'], $card['button_text'], $card['button_type']); ?>
    </div>
  <?php } ?>
</div>
<div class="flex flex-wrap -mx-4">
  <?php foreach ($cards as $card) { ?>
    <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 px-4 py-4">
      <?php my_custom_card($card['title'], $card['image_url'], $card['button_text'], $card['button_type']); ?>
    </div>
  <?php } ?>
</div>

Example button 
<?php include 'inc/button.php' ?>

<?php get_footer() ?>