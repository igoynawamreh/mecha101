<?= self::before(); ?>
<?= self::components('navbar', ['color_scheme' => 'navbar-dark bg-dark']); ?>

<div class="bg-light py-3 py-md-5" style="min-height: 100vh;">
	<div class="container" style="max-width: 800px;">

		<?=
		self::components('pages.card.grid', [
			'page_path' => 'current_pages',

			'row_classes' => 'row',
			'col_classes' => 'col-12 mb-3',

			'card_classes' => 'bg-white',
			'card_body_classes' => '',

			'title_tag' => 'h2',
			'title_classes' => 'h5 mt-0 mb-0',
			'title_link_classes' => 'text-dark stretched-link',

			'description' => true,
			'description_to_excerpt' => 150,
			'description_classes' => 'text-dark mt-2 mb-0',
			'description_link_classes' => 'text-primary',
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

	</div><!-- /.container -->
</div><!-- /section -->

<?= self::components('footer'); ?>
<?= self::after(); ?>
