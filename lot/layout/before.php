<!DOCTYPE html>
<html dir="<?= $site->direction; ?>" lang="<?= $site->language; ?>">
	<head>
	    <meta charset="<?= $site->charset; ?>">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <title><?= w($t->reverse); ?></title>

	    <?php if ($w = w($page->description ?? $site->description ?? "")): ?>
	    	<meta content="<?= $w; ?>" name="description">
	    <?php endif; ?>

	    <meta content="<?= $page->author; ?>" name="author">

	    <?php if ('archive' === $page->x): ?>
	    	<!-- Prevent search engines from indexing pages with `archive` state -->
	    	<meta content="noindex" name="robots">
	    <?php endif; ?>

	    <link href="<?= $url; ?>/favicon.ico" rel="icon">
	    <link href="<?= $url->clean; ?>" rel="canonical">
	</head>
  	<body>
    	<?= $alert; ?>
