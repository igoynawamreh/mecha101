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
		</div>



		<div class="row no-gutters">
			<div class="col-12 col-lg-8 p-3 p-sm-4 bg-light">
				<?=
				self::components('pages.card.grid', [
					'page_path' => 'current_pages',

					'row_classes' => 'row',
					'col_classes' => 'col-12 mb-3',

					'card_classes' => 'bg-white',
					'card_body_classes' => '',

					'image' => true,
					'image_field_name' => 'featured_image',
					'image_position' => ['left', '30%'],
					'image_classes' => 'rounded',

					'title_tag' => 'h2',
					'title_classes' => 'h5 mt-0 mb-0',
					'title_link_classes' => 'text-dark',

					'metadata' => true,
					'metadata_classes' => 'small text-muted mt-2 mb-0',
					'metadata_link_classes' => 'text-primary',

					'description' => true,
					'description_to_excerpt' => 150,
					'description_classes' => 'text-dark mt-2 mb-0',
					'description_link_classes' => 'text-primary',

					'tagx' => true,
					'tagx_classes' => 'text-muted mt-2 mb-0',
					'tagx_prefix' => '',
					'tagx_separator' => ' ',
					'tagx_link_classes' => 'badge badge-secondary',
				]);
				?>

				<?php if ($pages->count): ?>
					<nav aria-label="<?= i('Page navigation'); ?>">
					    <ul class="pagination mb-0">
					     	<li class="page-item<?= $pager->prev ? '' : ' disabled'; ?>">
					     	  	<a class="page-link" href="<?= $pager->prev; ?>" rel="prev">
					     	  		<?= i('Previous'); ?>
					     	  	</a>
					     	</li>
					     	<li class="page-item<?= $pager->next ? '' : ' disabled'; ?>">
					     		<a class="page-link" href="<?= $pager->next; ?>" rel="next">
					     			<?= i('Next'); ?>
					     		</a>
					     	</li>
					    </ul>
					</nav>
				<?php endif; ?>
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
