<?php
  $class = 'flex items-center';

  if ($kind === 'primary') {
    $class .= ' font-wide text-white rounded-2xl bg-neutral-900 hover:bg-neutral-600 active:bg-neutral-700 disabled:bg-neutral-400 disabled:pointer-events-none';
    $class .= $size === 'big' ?'  text-base py-3 px-10' : ' text-sm py-3 px-11';
  } elseif ($kind === 'secondary') {
    $class .= ' font-wide text-black rounded-2xl border border-neutral-900 bg-white hover:bg-neutral-200 active:bg-neutral-300 disabled:opacity-40 disabled:pointer-events-none';
    $class .= $size === 'big' ?'  text-base py-3 px-10' : ' text-sm py-3 px-11';
  } elseif ($kind === 'link') {
    $class .= ' align-bottom hover:text-neutral-700 active:text-neutral-800 disabled:opacity-40 disabled:pointer-events-none';
    $class .= $size === 'big' ?' text-base' : ' text-sm';
  }
?>
<button 
  type="<?= $type ?: 'button' ?>" 
  <?php echo $disabled? 'disabled': '' ?>
  class="<?= $class ?>"
>
  <span><?= $text ?></span>
  <?php if (!empty($icon)) : ?>
    <span class="svg-icon svg-icon-24 svg-icon-<?= $icon ?>"></span>
  <?php endif ?>
</button>