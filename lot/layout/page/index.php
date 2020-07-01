<?= self::before(); ?>
<?= self::components('navbar', ['color_scheme' => 'navbar-dark bg-dark']); ?>

<div class="bg-secondary py-3 py-md-5" style="min-height: 100vh;">
	<div class="container">

		<div class="p-3 p-sm-4 p-md-5 bg-dark rounded-top">
			<h1 class="display-4 text-white mt-0 mb-0">
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



		<div class="bg-light">
			<div class="row no-gutters">
				<div class="col-12 col-md-6 p-3 pt-md-4 pr-md-0 pb-md-4 pl-md-4">
					<?=
					self::components('pages.card.list-group-content', [
						'page_path' => 'articles',
						'sort' => [-1, 'time'],
						'chunk' => 3,

						'card_classes' => 'h-100 bg-white',
						'card_header' => true,
						'card_header_tag' => 'h5',
						'card_header_classes' => 'text-white bg-primary border-primary d-flex align-items-center',
						'card_header_title' =>
							'<svg class="d-inline-block mr-2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
								<path fill-rule="evenodd" d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
								<path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
						  	</svg>' .
							i('Latest articles'),

						'list_group_classes' => 'h-100',
						'list_group_item_classes' => 'bg-white p-3',

						'image' => true,
						'image_field_name' => 'featured_image',
						'image_position' => ['left', '150px'],
						'image_classes' => 'rounded',

						'title_tag' => 'h5',
						'title_classes' => 'mt-0 mb-0',
						'title_link_classes' => 'text-dark',

						'description' => true,
						'description_to_excerpt' => 150,
						'description_classes' => 'text-dark mt-2 mb-0',
						'description_link_classes' => 'text-primary',

						'metadata' => true,
						'metadata_classes' => 'small text-muted mt-2 mb-0',
						'metadata_link_classes' => 'text-primary',

						'tagx' => true,
						'tagx_classes' => 'text-muted mt-2 mb-0',
						'tagx_prefix' => '',
						'tagx_separator' => ' ',
						'tagx_link_classes' => 'badge badge-secondary',

						'view_more' => true,
						'view_more_classes' => 'text-primary bg-light mt-auto',
						'view_more_text' => i('View More')
					]);
					?>
				</div><!-- /col -->

				<div class="col-12 col-md-6 pt-0 pr-3 pb-3 pl-3 pt-md-4 pr-md-4 pb-md-4 pl-md-4">
					<?=
					self::components('pages.card.list-group-content', [
						'page_path' => 'articles',
						'sort' => [-1, 'view'],
						'chunk' => 3,

						'card_classes' => 'h-100 bg-white',
						'card_header' => true,
						'card_header_tag' => 'h5',
						'card_header_classes' => 'text-white bg-danger border-danger d-flex align-items-center',
						'card_header_title' =>
							'<svg class="d-inline-block mr-2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
							</svg>' .
							i('Popular articles'),

						'list_group_classes' => 'h-100',
						'list_group_item_classes' => 'bg-white p-3',

						'image' => true,
						'image_field_name' => 'featured_image',
						'image_position' => ['left', '150px'],
						'image_classes' => 'rounded',

						'title_tag' => 'h5',
						'title_classes' => 'mt-0 mb-0',
						'title_link_classes' => 'text-dark',

						'description' => true,
						'description_to_excerpt' => 150,
						'description_classes' => 'text-dark mt-2 mb-0',
						'description_link_classes' => 'text-danger',

						'metadata' => true,
						'metadata_classes' => 'small text-muted mt-2 mb-0',
						'metadata_link_classes' => 'text-danger',

						'tagx' => true,
						'tagx_classes' => 'text-muted mt-2 mb-0',
						'tagx_prefix' => '',
						'tagx_separator' => ' ',
						'tagx_link_classes' => 'badge badge-secondary',

						'view_more' => true,
						'view_more_classes' => 'text-danger bg-light mt-auto',
						'view_more_text' => i('View More')
					]);
					?>
				</div><!-- /col -->
			</div><!-- /.row -->
		</div>



		<div class="p-3 p-sm-4 p-md-5 bg-dark rounded-bottom">
			<h2 class="text-white mb-3">
				<?= i('Latest projects'); ?>
			</h2>

			<?=
			self::components('pages.card.grid', [
				'page_path' => 'projects',
				'sort' => [-1, 'time'],
				'chunk' => 3,

				'row_classes' => 'row row-cols-1 row-cols-sm-2 row-cols-md-4 mb-n3',
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

				'metadata' => false,
				'metadata_classes' => 'text-dark mt-2 mb-0',
				'metadata_link_classes' => 'text-primary',

				'description' => true,
				'description_to_excerpt' => 80,
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
