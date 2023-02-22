<?php
  $class = 'flex items-center ';

if ($kind === 'primary') {
  $class .= 'bg-neutral-900 text-white text-center rounded-2xl hover:bg-neutral-600 active:bg-neutral-70 disabled:bg-neutral-400 disabled:pointer-events-none';
} elseif ($kind === 'secondary') {
  $class .= ' border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white';
} elseif ($kind === 'link') {
  $class .= ' hover:text-black';
}

if ($size === 'big') {
  $class .= ' text-base py-3 px-10';
} else {
  $class .= ' text-sm py-3 px-11';
}
?>
<button 
  type="<?= $type ?: 'button' ?>" 
  <?= isset($disabled) ?? $disabled ?> 
  class="<?= $class ?>"
>
  <span><?= $text ?> </span>
  <?php if (!empty($icon)) : ?>
    <span class="svg-icon svg-icon-24 svg-icon-<?= $icon ?>"></span>
  <?php endif ?>
</button>