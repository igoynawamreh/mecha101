<?php

// Add classes to HTML element in page content
Hook::set('page.content', function($content) {
    if (!$content) {
        return $content;
	}

	$content = $GLOBALS['set_class'](
		[
			['blockquote', 'blockquote'],
			['table', 'table table-bordered'],
			['figure', 'figure'],
			['img', 'img-fluid'],
			['figcaption', 'figure-caption']
		],
		$content
	);

	return $content;
});
