<?php
$class = 'inline-flex items-center';

if ($kind === 'primary') {
  $class .= ' font-wide text-white rounded-2xl bg-neutral-900 hover:bg-neutral-600 active:bg-neutral-700';
  $class .= $size === 'big' ? '  text-base py-3 px-10' : ' text-sm py-3 px-11';
} elseif ($kind === 'secondary') {
  $class .= ' font-wide text-black rounded-2xl border border-neutral-900 bg-transparent hover:bg-neutral-200 active:bg-zinc-300';
  $class .= $size === 'big' ? '  text-base py-3 px-10' : ' text-sm py-3 px-11';
} elseif ($kind === 'ghost') {
  $class .= ' hover:text-neutral-700 active:text-neutral-800';
  $class .= $size === 'big' ? ' text-base' : ' text-sm';
}
?>

<?php if (!empty($link)) : ?>
  <a href="<?= $link ?>" class="<?= $class ?> <?= ($disabled ? 'disabled' : '') ?>">
    <span><?= $text ?></span>
    <?php if (!empty($icon)) : ?>
      <span class="svg-icon svg-icon-24 svg-icon-<?= $icon ?>"></span>
    <?php endif ?>
  </a>
<?php else : ?>
  <button type="<?= $type ?: 'button' ?>" <?php echo $disabled ? 'disabled' : '' ?> class="<?= $class ?>">
    <span><?= $text ?></span>
    <?php if (!empty($icon)) : ?>
      <span class="svg-icon svg-icon-24 svg-icon-<?= $icon ?>"></span>
    <?php endif ?>
  </button>
<?php endif ?>