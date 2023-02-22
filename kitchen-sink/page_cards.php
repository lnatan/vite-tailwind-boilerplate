<?php /* Template Name: Example Cards*/ ?>

<?php get_header() ?>

<?php
$cards = array(
    array(
        'heading' => 'Card 1',
        'image_url' => 'https://picsum.photos/800/600',
        'body' => 'Learn more',
        'footing' => 'main'
    ),
    array(
        'heading' => 'Card 1',
        'image_url' => 'https://picsum.photos/800/600',
        'body' => 'Learn more',
        'footing' => 'main'
    ),
    array(
        'heading' => 'Card 1',
        'image_url' => 'https://picsum.photos/800/600',
        'body' => 'Learn more',
        'footing' => 'main'
    ),
);
?>
<?php render_view('cards_grid', $cards) ?>



<?php get_footer() ?>