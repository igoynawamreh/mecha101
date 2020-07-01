<?= self::before(); ?>

<?php if ($page->author): ?>
	<h1><?= $page->author; ?></h1>
<?php else: ?>
	<h1><?= w($page->title) ?></h1>
<?php endif; ?>

<?= $page->content ?>

<?= self::after(); ?>
