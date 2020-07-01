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
				<p class="lead text-light mt-2 mb-0">
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



		<div class="p-3 p-sm-4 bg-light">
			<?=
			self::components('pages.card.grid', [
				'page_path' => 'current_pages',

				'row_classes' => 'row row-cols-1 row-cols-sm-2 row-cols-lg-4',
				'col_classes' => 'col mb-3',

				'card_classes' => 'bg-white',
				'card_body_classes' => '',

				'image' => true,
				'image_field_name' => 'featured_image',
				'image_position' => 'top',
				'image_classes' => 'w-100',

				'title_tag' => 'h5',
				'title_classes' => 'mt-0 mb-0',
				'title_link_classes' => 'text-dark text-decoration-none',

				'metadata' => true,
				'metadata_classes' => 'small text-muted mt-2 mb-0',
				'metadata_link_classes' => 'text-primary',

				'description' => true,
				'description_to_excerpt' => 50,
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
				<nav class="d-flex justify-content-center" aria-label="<?= i('Page navigation'); ?>">
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
		</div>



		<div class="p-3 p-sm-4 p-md-5 rounded-bottom" style="background-color: #607d8b;">
			<h2 class="text-white mb-3">
				<?= i('Latest articles'); ?>
			</h2>

			<?=
			self::components('pages.card.grid', [
				'page_path' => 'articles',
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
