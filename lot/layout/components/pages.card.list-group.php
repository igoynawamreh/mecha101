<?php

$xp = Pages::from(LOT . DS . 'page' . DS . $page_path);
$xp = !empty($sort) ? $xp->sort($sort) : $xp;
$xp = !empty($chunk) ? $xp->chunk($chunk, 0) : $xp;
$xp = !empty($shake) ? $xp->shake() : $xp;
$xpages = 'current_pages' === $page_path ? $pages : $xp;

$card_classes = !empty($card_classes) ? ' ' . $card_classes : '';
$card_header_tag = !empty($card_header_tag) ? $card_header_tag : 'div';
$card_header_classes = !empty($card_header_classes) ? ' ' . $card_header_classes : '';
$card_header_title = !empty($card_header_title) ? $card_header_title : i('No Title');

$list_group_classes = !empty($list_group_classes) ? ' ' . $list_group_classes : '';
$list_group_item_classes = !empty($list_group_item_classes) ? ' ' . $list_group_item_classes : '';

$view_more = !empty($view_more) && 'current_pages' !== $page_path ? $view_more : false;
$view_more_classes = !empty($view_more_classes) ? ' ' . $view_more_classes : $list_group_item_classes;
$view_more_text = !empty($view_more_text) ? $view_more_text : i('View More');

/*
Usage:

<?=
self::components('pages.card.list-group', [
	'page_path' => 'path/to/page',        // or 'current_pages'
	'sort' => [-1, 'time'],               // false if page_path: 'current_pages'
	'chunk' => [5, 0],                    // false if page_path: 'current_pages'
	'shake' => false,                     // false if page_path: 'current_pages'

	'card_classes' => 'bg-white',
	'card_header' => true,
	'card_header_tag' => 'h5',            // or 'h*' or 'div'
	'card_header_classes' => 'text-dark',
	'card_header_title' => i('Title'),

	'list_group_classes' => '',
	'list_group_item_classes' => '',

	'view_more' => true,                             // false if page_path: 'current_pages'
	'view_more_classes' => 'text-primary bg-light',  // uses $list_group_item_classes if empty
	'view_more_text' => i('View More')
]);
?>
*/

?>

<div class="card<?= $card_classes; ?>">

	<?php if ($card_header): ?>
		<<?= $card_header_tag; ?> class="card-header<?= $card_header_classes; ?>">
			<?= $card_header_title; ?>
		</<?= $card_header_tag ?>>
	<?php endif; ?>

	<?php if ($xpages->count): ?>

		<div class="list-group list-group-flush<?= $list_group_classes; ?>">
			<?php foreach ($xpages as $p): ?>
				<?php if ($p->link): ?>
					<a href="<?= $p->link; ?>" class="list-group-item list-group-item-action<?= $list_group_item_classes; ?>" id="page-<?= $p->id; ?>" rel="nofollow noopener" target="_blank">
						<?= $p->title ?: i('No Title'); ?> &#x21E2;
					</a>
				<?php else: ?>
					<a href="<?= $p->url; ?>" class="list-group-item list-group-item-action<?= $list_group_item_classes; ?>" id="page-<?= $p->id; ?>">
						<?= $p->title ?: i('No Title'); ?>
					</a>
				<?php endif; ?>
			<?php endforeach; ?>

			<?php if ($view_more): ?>
				<a href="<?= $url . '/' . $page_path; ?>" class="list-group-item list-group-item-action<?= $view_more_classes; ?>">
					<?= $view_more_text; ?>
				</a>
			<?php endif; ?>
		</div><!-- /.list-group -->

	<?php else: ?>

		<div class="card-body">
			<div class="alert alert-warning mb-0" role="alert">
				<?= i('No Pages Yet'); ?>
			</div>
		</div><!-- /.card-body -->

	<?php endif; ?>

</div><!-- /.card -->
