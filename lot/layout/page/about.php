<?= self::before(); ?>
<?= self::components('navbar', ['color_scheme' => 'navbar-dark bg-dark']); ?>

<div class="bg-secondary py-3 py-md-5" style="min-height: 100vh;">
	<div class="container">

		<div class="row no-gutters">
			<div class="col-lg-4 bg-dark" style="min-height: 360px; max-height: 360px; background-image: <?= $page->photo ? 'url(' . URL::long(ltrim($page->photo, '/'), false) . ')' : 'none'; ?>; background-position: center center; background-repeat: no-repeat; background-size: cover;"></div><!-- /col -->

			<div class="col-lg-8 p-3 p-sm-4 p-md-5 bg-primary">
				<h2 class="text-white mb-3">
					<?= $page->im ? $page->im : i('No Name'); ?>
				</h2>

				<p class="text-white mb-3">
					<span><?= i('Experienced'); ?>:</span>
					<span><?= $page->experienced ? $page->experienced : i('No Experience'); ?></span>
				</p>

				<div class="row text-white">
					<div class="col-md-6">
						<div class="row">
							<div class="col-sm-4">
								<span class="font-weight-bold"><?= i('Status'); ?>:</span>
							</div><!-- /col -->
							<div class="col-sm-8">
								<span><?= $page->status ? $page->status : i('No Status'); ?></span>
							</div><!-- /col -->
						</div><!-- /.row -->
						<div class="row">
							<div class="col-sm-4">
								<span class="font-weight-bold"><?= i('Position'); ?>:</span>
							</div><!-- /col -->
							<div class="col-sm-8">
								<span><?= $page->position ? $page->position : i('No Position'); ?></span>
							</div><!-- /col -->
						</div><!-- /.row -->
						<div class="row">
							<div class="col-sm-4">
								<span class="font-weight-bold"><?= i('Industry'); ?>:</span>
							</div><!-- /col -->
							<div class="col-sm-8">
								<span><?= $page->industry ? $page->industry : i('No Industry'); ?></span>
							</div><!-- /col -->
						</div><!-- /.row -->
						<div class="row">
							<div class="col-sm-4">
								<span class="font-weight-bold"><?= i('Speciality'); ?>:</span>
							</div><!-- /col -->
							<div class="col-sm-8">
								<span><?= $page->speciality ? $page->speciality : i('No Speciality'); ?></span>
							</div><!-- /col -->
						</div><!-- /.row -->
						<div class="row">
							<div class="col-sm-4">
								<span class="font-weight-bold"><?= i('Job Type'); ?>:</span>
							</div><!-- /col -->
							<div class="col-sm-8">
								<span><?= $page->job_type ? $page->job_type : i('No Job Type'); ?></span>
							</div><!-- /col -->
						</div><!-- /.row -->
					</div><!-- /col -->
					<div class="col-md-6">
						<div class="row">
							<div class="col-sm-4">
								<span class="font-weight-bold"><?= i('Salary'); ?>:</span>
							</div><!-- /col -->
							<div class="col-sm-8">
								<span><?= $page->salary ? $page->salary : i('No Salary'); ?></span>
							</div><!-- /col -->
						</div><!-- /.row -->
						<div class="row">
							<div class="col-sm-4">
								<span class="font-weight-bold"><?= i('Mobility'); ?>:</span>
							</div><!-- /col -->
							<div class="col-sm-8">
								<span><?= $page->mobility ? $page->mobility : i('No Mobility'); ?></span>
							</div><!-- /col -->
						</div><!-- /.row -->
						<div class="row">
							<div class="col-sm-4">
								<span class="font-weight-bold"><?= i('Education'); ?>:</span>
							</div><!-- /col -->
							<div class="col-sm-8">
								<span><?= $page->education ? $page->education : i('No Education'); ?></span>
							</div><!-- /col -->
						</div><!-- /.row -->
						<div class="row">
							<div class="col-sm-4">
								<span class="font-weight-bold"><?= i('Languages'); ?>:</span>
							</div><!-- /col -->
							<div class="col-sm-8">
								<span><?= $page->languages ? $page->languages : i('No Languages'); ?></span>
							</div><!-- /col -->
						</div><!-- /.row -->
						<div class="row">
							<div class="col-sm-4">
								<span class="font-weight-bold"><?= i('Hobbies'); ?>:</span>
							</div><!-- /col -->
							<div class="col-sm-8">
								<span><?= $page->hobbies ? $page->hobbies : i('No Hobbies'); ?></span>
							</div><!-- /col -->
						</div><!-- /.row -->
					</div><!-- /col -->
				</div><!-- /.row -->
			</div><!-- /col -->
		</div><!-- /.row -->




		<div class="row no-gutters">
			<div class="col-12 col-lg-8 p-3 p-sm-4 p-md-5 bg-light order-lg-2">
				<h2 class="text-dark mb-3">
					<?= i('Skills'); ?>
				</h2>
				<div class="row mb-n2">
					<?php if ($page->skills): ?>
						<?php foreach ($page->skills as $s): ?>
							<div class="col-12 mb-2">
								<h5 class="h6 mb-1"><?= $s['name'] ? $s['name'] : i('No Title'); ?></h5>
								<div class="progress">
								 	<div class="progress-bar" role="progressbar" aria-valuenow="<?= $s['value'] ? $s['value'] : 0; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $s['value'] ? $s['value'] : '0%'; ?>;">
								 		<?= $s['value'] ? $s['value'] : '0%'; ?>
								 	</div><!-- /.progress-bar -->
								</div><!-- /.progress -->
							</div><!-- /col -->
						<?php endforeach; ?>
					<?php else: ?>
						<div class="col-12 mb-2">
							<h5 class="h6 mb-1"><?= i('No Skills'); ?></h5>
							<div class="progress">
							 	<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
							</div>
						</div><!-- /col -->
					<?php endif; ?>
				</div><!-- /.row -->

				<?php if ($page->content): ?>
					<hr class="mt-5">
					<h2 class="text-dark mb-3">
						<?= i('Read More About Me'); ?>
					</h2>
					<?= $page->content; ?>
				<?php endif; ?>
			</div><!-- /col -->

			<div class="col-12 col-lg-4 p-3 p-sm-4 p-md-5 bg-info order-lg-1">
				<h2 class="text-white mb-3">
					<?= i('Timeline'); ?>
				</h2>
				<?php if ($page->timeline): ?>
					<ol class="list-unstyled mb-n3">
						<?php foreach ($page->timeline as $t): ?>
							<li class="mb-3">
								<span class="text-light">
									<?= $t['date_start'] ? $t['date_start'] : '0'; ?> - <?= $t['date_end'] ? $t['date_end'] : '0'; ?>
								</span>
								<h5 class="text-white text-uppercase mb-0">
									<?= $t['title'] ? $t['title'] : i('No Title'); ?>
								</h5>
								<span class="text-light">
									<?= $t['position'] ? $t['position'] : i('No Position'); ?>
								</span>
							</li>
						<?php endforeach; ?>
					</ol>
				<?php else: ?>
					<p class="text-light mb-0"><?= i('No Timeline'); ?></p>
				<?php endif; ?>
			</div><!-- /col -->
		</div><!-- /.row -->

	</div><!-- /.container -->
</div><!-- /section -->

<?= self::components('footer'); ?>
<?= self::after(); ?>
