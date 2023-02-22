<?php /* views/cards_grid.php */ ?>
<section>
  <ul>
    <?php foreach ($data as $card) : ?>
    <li>
      <?php render_view('card', $card) ?>
    </li>
    <?php endforeach; ?>    
  </ul>
</section>