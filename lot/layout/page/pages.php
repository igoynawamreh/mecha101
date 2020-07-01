<?= self::before(); ?>
<?= self::components('navbar', ['color_scheme' => 'navbar-dark bg-dark']); ?>

<div class="bg-light py-3 py-md-5" style="min-height: 100vh;">
	<div class="container" style="max-width: 800px;">

		<div class="card bg-white">
			<div class="card-body p-md-4 p-lg-5">
				<h1 class="text-dark mb-4">
					<?= $page->title ?: i('No Title'); ?>
				</h1>

				<?= $page->content; ?>
			</div><!-- /.card-body -->
		</div><!-- /.card -->

	</div><!-- /.container -->
</div><!-- /section -->

<?= self::components('footer'); ?>
<?= self::after(); ?>
