<footer class="footer bg-dark py-4">
	<div class="container">
		<p>
			<span class="text-light">Current page:</span>
			<?=
			self::components('trace', [
				'link_class' => 'text-white',
				'active_class' => 'text-muted',
				'separator' => '/',
				'separator_class' => 'text-muted'
			]);
			?>
		</p>
		<p class="text-light mb-0">
			&#x00A9; <?= $date->year; ?> &#x00B7; <a class="text-white" href="<?= $url; ?>"><?= $site->title; ?></a>
		</p>
	</div>
</footer>
