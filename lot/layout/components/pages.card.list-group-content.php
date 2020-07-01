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

$image = !empty($image) ? $image : false;
$image_field_name = !empty($image_field_name) ? $image_field_name : 'image';
$image_position = !empty($image_position) ? $image_position : ['left', '30%'];
$image_classes = !empty($image_classes) ? ' ' . $image_classes : '';

$title_tag = !empty($title_tag) ? $title_tag : 'h3';
$title_classes = !empty($title_classes) ? ' ' . $title_classes : '';
$title_link_classes = !empty($title_link_classes) ? ' ' . $title_link_classes : '';

$description = !empty($description) ? $description : false;
$description_to_excerpt = !empty($description_to_excerpt) ? $description_to_excerpt : false;
$description_classes = !empty($description_classes) ? ' ' . $description_classes : '';
$description_link_classes = !empty($description_link_classes) ? $description_link_classes : '';

$metadata = !empty($metadata) ? $metadata : false;
$metadata_classes = !empty($metadata_classes) ? ' ' . $metadata_classes : '';
$metadata_link_classes = !empty($metadata_link_classes) ? ' ' . $metadata_link_classes : '';

$tagx = !empty($tagx) ? $tagx : false;
$tagx_classes = !empty($tagx_classes) ? ' ' . $tagx_classes : '';
$tagx_prefix = !empty($tagx_prefix) ? $tagx_prefix : '';
$tagx_separator = !empty($tagx_separator) ? $tagx_separator : ' ';
$tagx_link_classes = !empty($tagx_link_classes) ? ' ' . $tagx_link_classes : '';

$view_more = !empty($view_more) && 'current_pages' !== $page_path ? $view_more : false;
$view_more_classes = !empty($view_more_classes) ? ' ' . $view_more_classes : $list_group_item_classes;
$view_more_text = !empty($view_more_text) ? $view_more_text : i('View More');

/*
Usage:

<?=
self::components('pages.card.list-group-content', [
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

	'image' => true,
	'image_field_name' => 'image',        // key
	'image_position' => ['left', '30%'],  // or ['right', '30%']
	'image_classes' => 'rounded',

	'title_tag' => 'h3',
	'title_classes' => 'mt-0 mb-0',
	'title_link_classes' => 'text-primary',

	'description' => true,
	'description_to_excerpt' => 150,      // or false
	'description_classes' => 'text-dark mt-2 mb-0',
	'description_link_classes' => 'text-primary',

	'metadata' => true,
	'metadata_classes' => 'small text-muted mt-2 mb-0',
	'metadata_link_classes' => 'text-primary',

	'tagx' => true,
	'tagx_classes' => 'text-muted mt-2 mb-0',
	'tagx_prefix' => '',                   // '#'
	'tagx_separator' => ' ',               // ', ' or ' / '
	'tagx_link_classes' => 'badge badge-secondary',

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
				<div class="list-group-item<?= $list_group_item_classes; ?>" id="page-<?= $p->id; ?>">
					<?php if ($image && $p->$image_field_name && ('left' === $image_position[0] || 'right' === $image_position[0])): ?>
						<div class="d-flex justify-content-between align-items-start">

						<?php if ('left' === $image_position[0] && $p->$image_field_name): ?>
							<div class="mr-3" style="width: <?= $image_position[1]; ?>;">
								<?php if ($img = $p->$image_field_name): ?>
									<img src="<?= URL::long(ltrim($img, '/'), false); ?>" class="img-fluid<?= $image_classes; ?>" alt="<?= basename($img); ?>">
								<?php endif; ?>
							</div>
						<?php endif; ?>

						<div class="w-100">
					<?php endif; ?>

					<<?= $title_tag; ?> class="<?= t($title_classes, ' '); ?>">
						<?php if ($p->link): ?>
							<a href="<?= $p->link; ?>" class="<?= t($title_link_classes, ' '); ?>" rel="nofollow noopener" target="_blank">
								<?= $p->title ?: i('No Title'); ?> &#x21E2;
							</a>
						<?php else: ?>
							<a href="<?= $p->url; ?>" class="<?= t($title_link_classes, ' '); ?>">
								<?= $p->title ?: i('No Title'); ?>
							</a>
						<?php endif; ?>
					</<?= $title_tag; ?>>

					<?php if ($description && $p->description): ?>
						<p class="<?= t($description_classes, ' '); ?>">
							<?php
							if ($description_to_excerpt) {
								$p->description = To::excerpt($p->description, true, $description_to_excerpt);
							}
							?>
							<?=
							$set_class(
								[
									['a', t($description_link_classes, ' ')]
								],
								$p->description
							);
							?>
						</p>
					<?php endif; ?>

					<?php if ($metadata): ?>
						<ul class="list-inline<?= $metadata_classes; ?>">
							<?php if (!empty($state->x->user) && $p->author instanceof User): ?>
								<li class="list-inline-item">
									<?= i('By'); ?>
									<a href="<?= $p->author->link ?: $p->author->url; ?>" class="<?= t($metadata_link_classes, ' '); ?>" rel="author">
										<?= $p->author; ?>
									</a>
								</li>
							<?php elseif ($p->author): ?>
								<li class="list-inline-item">
									<?= i('By'); ?>
									<?= $p->author; ?>
								</li>
							<?php endif; ?>

							<li class="list-inline-item">
								<time datetime="<?= $p->time->ISO8601; ?>">
									<?= $p->time('%B %d, %Y'); ?>
								</time>
							</li>

							<?php if (!empty($state->x->view) && false !== File::exist(Path::F($p->path) . DS . 'view.data')): ?>
								<li class="list-inline-item">
									<?= $p->view; ?>
								</li>
							<?php endif; ?>
						</ul>
					<?php endif; ?>

					<?php if ($tagx && !empty($state->x->tag) && $p->tags->count): ?>
						<div class="<?= t($tagx_classes, ' '); ?>">
							<?php
							foreach ($p->tags as $tag) {
								$last = $p->tags->last();

								echo '<a href="' . $tag->url . '" class="' . t($tagx_link_classes, ' ') . '" rel="tag">';
								echo $tagx_prefix . $tag->title;
								echo '</a>';

								if ($tag->path !== $last) {
									echo $tagx_separator;
								}
							}
							?>
						</div>
					<?php endif; ?>

					<?php if ($image && $p->$image_field_name && ('left' === $image_position[0] || 'right' === $image_position[0])): ?>
						</div><!-- /.w-100 -->

						<?php if ('right' === $image_position[0] && $p->$image_field_name): ?>
							<div class="ml-3" style="width: <?= $image_position[1]; ?>;">
								<?php if ($img = $p->$image_field_name): ?>
									<img src="<?= URL::long(ltrim($img, '/'), false); ?>" class="img-fluid<?= $image_classes; ?>" alt="<?= basename($img); ?>">
								<?php endif; ?>
							</div>
						<?php endif; ?>

						</div><!-- /flex container -->
					<?php endif; ?>
				</div><!-- /.list-group-item -->
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
		</div>

	<?php endif; ?>

</div><!-- /.card -->
