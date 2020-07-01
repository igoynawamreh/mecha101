<?= self::before(); ?>
<?= self::components('navbar', ['color_scheme' => 'navbar-dark bg-dark']); ?>

<div class="bg-secondary py-3 py-md-5" style="min-height: 100vh;">
	<div class="container">

		<div class="p-3 p-sm-4 p-md-5 bg-dark rounded-top">
			<div>
				<?=
				self::components('trace', [
					'link_class' => 'text-light',
					'active_class' => 'text-muted sr-only',
					'separator' => '/',
					'separator_class' => 'text-light'
				]);
				?>
			</div>

			<h1 class="display-4 text-white mt-2 mb-0">
				<?= $page->title ?: i('No Title'); ?>
			</h1>

			<?php if ($page->description): ?>
				<p class="lead text-light mt-3 mb-0">
					<?=
					$set_class(
						[
							['a', 'text-warning']
						],
						$page->description
					);
					?>
				</p>
			<?php endif; ?>

			<ul class="list-inline text-light mt-3 mb-0">
				<?php if (!empty($state->x->user) && $page->author instanceof User): ?>
					<li class="list-inline-item">
						<?= i('By'); ?>
						<a href="<?= $page->author->link ?: $page->author->url; ?>" class="text-warning" rel="author">
							<?= $page->author; ?>
						</a>
					</li>
				<?php elseif ($page->author): ?>
					<li class="list-inline-item">
						<?= i('By'); ?>
						<?= $page->author; ?>
					</li>
				<?php endif; ?>

				<li class="list-inline-item">
					<time datetime="<?= $page->time->ISO8601; ?>">
						<?= $page->time('%B %d, %Y'); ?>
					</time>
				</li>

				<?php if (!empty($state->x->view) && false !== File::exist(Path::F($page->path) . DS . 'view.data')): ?>
					<li class="list-inline-item">
						<?= $page->view; ?>
					</li>
				<?php endif; ?>
			</ul>

			<?php if (!empty($state->x->tag) && $page->tags->count): ?>
				<div class="mt-2">
					<?php foreach ($page->tags as $tag): ?>
						<a href="<?= $tag->url; ?>" class="badge badge-light" rel="tag"><?= $tag->title; ?></a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>



		<div class="row no-gutters">
			<div class="col-12 col-lg-8 p-3 p-sm-4 p-md-5 bg-white">
				<?= $page->content; ?>

				<div class="card bg-light mt-4">
					<h5 class="card-header text-dark">
						<?= i('Another articles'); ?>
					</h5>
					<div class="card-body">
						<?=
						self::components('pages.card.grid', [
							'page_path' => 'articles',
							'sort' => false,
							'chunk' => 6,
							'shake' => true,

							'row_classes' => 'row row-cols-2 row-cols-md-3 mb-n3',
							'col_classes' => 'col mb-3',

							'card_classes' => 'bg-white',
							'card_body_classes' => 'p-2',

							'image' => true,
							'image_field_name' => 'featured_image',
							'image_position' => 'top',
							'image_classes' => 'w-100',

							'title_tag' => 'h6',
							'title_classes' => 'mt-0 mb-0',
							'title_link_classes' => 'text-dark text-decoration-none stretched-link',
						]);
						?>
					</div><!-- /.card-body -->
				</div><!-- /.card -->
			</div><!-- /col -->

			<div class="col-12 col-lg-4 p-3 p-sm-4" style="background-color: #c5cae9;">
				<?=
				self::components('pages.card.list-group', [
					'page_path' => 'articles',
					'sort' => [-1, 'view'],
					'chunk' => 5,

					'card_classes' => 'bg-primary mb-3',
					'card_header' => true,
					'card_header_tag' => 'h5',
					'card_header_classes' => 'text-white',
					'card_header_title' => i('Popular articles'),

					'list_group_classes' => '',
					'list_group_item_classes' => '',

					'view_more' => true,
					'view_more_classes' => 'text-primary bg-light',
					'view_more_text' => i('View More')
				]);
				?>

				<?=
				self::components('pages.card.list-group', [
					'page_path' => 'articles',
					'sort' => false,
					'chunk' => 5,
					'shake' => true,

					'card_classes' => 'bg-warning mb-3',
					'card_header' => true,
					'card_header_tag' => 'h5',
					'card_header_classes' => 'text-dark',
					'card_header_title' => i('Random articles'),

					'list_group_classes' => '',
					'list_group_item_classes' => '',

					'view_more' => true,
					'view_more_classes' => 'text-warning bg-light',
					'view_more_text' => i('View More')
				]);
				?>
			</div><!-- /col -->
		</div><!-- /.row -->



		<div class="p-3 p-sm-4 p-md-5 rounded-bottom" style="background-color: #3f51b5;">
			<h2 class="text-white mb-3">
				<?= i('Latest projects'); ?>
			</h2>

			<?=
			self::components('pages.card.grid', [
				'page_path' => 'projects',
				'sort' => [-1, 'time'],
				'chunk' => 3,

				'row_classes' => 'row row-cols-1 row-cols-sm-2 row-cols-lg-4 mb-n3',
				'col_classes' => 'col mb-3',

				'card_classes' => 'bg-white',
				'card_body_classes' => '',

				'image' => true,
				'image_field_name' => 'featured_image',
				'image_position' => 'top',
				'image_classes' => 'w-100',

				'title_tag' => 'h5',
				'title_classes' => 'mt-0 mb-0',
				'title_link_classes' => 'text-dark text-decoration-none stretched-link',

				'description' => true,
				'description_to_excerpt' => 50,
				'description_classes' => 'text-dark mt-2 mb-0',
				'description_link_classes' => 'text-primary',

				'view_more' => true,
				'view_more_classes' => 'btn btn-dark stretched-link',
				'view_more_text' => i('View More')
			]);
			?>
		</div>

	</div><!-- /.container -->
</div><!-- /section -->

<?= self::components('footer'); ?>
<?= self::after(); ?>
