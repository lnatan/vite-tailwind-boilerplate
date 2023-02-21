<?php /* views/card.php */ ?>
<div class="card">
  <?php if (!empty($heading)) : ?>
    <h4><?= htmlspecialchars($heading) ?></h4>      
  <?php endif;
  if (!empty($body)) : ?>
    <p><?= htmlspecialchars($body) ?></p>      
  <?php endif;
  if (!empty($footing)) : ?>      
    <span><?= htmlspecialchars($footing) ?></span>
  <?php endif; ?>
</div>