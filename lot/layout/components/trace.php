<?php

$link_class = !empty($link_class) ? ' ' . $link_class : '';
$active_class = !empty($active_class) ? ' ' . $active_class : '';
$separator = !empty($separator) ? $separator : '/';
$separator_class = !empty($separator_class) ? ' ' . $separator_class : '';

/*
Usage:

<?=
self::components('trace', [
	'link_class' => 'text-primary',
	'active_class' => 'text-muted',
	'separator' => '/',
	'separator_class' => 'text-muted'
]);
?>
*/

?>

<?php if ($site->is('home')): ?>
	<span class="<?= t($active_class, ' '); ?>"><?= i('Home'); ?></span>
<?php else: ?>
	<a href="<?= $url; ?>" class="<?= t($link_class, ' '); ?>"><?= i('Home'); ?></a>
<?php endif; ?>

<?php if ($i = count($traces)): ?>
	<span class="<?= t($separator_class, ' '); ?>"><?= $separator; ?></span>
<?php endif; ?>

<?php foreach ($traces as $k => $v): ?>
	<?php if ($k < $i - 1): ?>
		<a href="<?= $v->url; ?>" class="<?= t($link_class, ' '); ?>"><?= $v->title; ?></a>
		<span class="<?= t($separator_class, ' '); ?>"><?= $separator; ?></span>
	<?php else: ?>
		<span class="<?= t($active_class, ' '); ?>"><?= $v->title; ?></span>
	<?php endif; ?>
<?php endforeach; ?>
