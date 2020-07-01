<?php

/**
 * Parent page (./lot/page/articles.page).
 */
if ('page/articles' === Path::F((string) $_['path'], '/') && 'g' === $_['task']) {
	Hook::set('_', function($_) {
		/**
		 * Page tab.
		 */
		// Hide `name`/slug field
		$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['page']['lot']['fields']['lot']['name']['type'] = 'hidden';

		// Remove `content` field
		$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['page']['lot']['fields']['lot']['content']['hidden'] = true;

		/**
		 * Tasks.
		 */
		// Remove "Archive" button
		$_['lot']['desk']['lot']['form']['lot'][2]['lot']['fields']['lot'][0]['lot']['tasks']['lot']['archive']['hidden'] = true;

		// Remove "Delete" button
		$_['lot']['desk']['lot']['form']['lot'][2]['lot']['fields']['lot'][0]['lot']['tasks']['lot']['l']['hidden'] = true;

		return $_;
	}, 9999);
}

/**
 * Child page(s) (./lot/page/articles/<**>/<*>.page).
 */
$edit = (0 === strpos($_['path'], 'page/articles/'));
$create = (0 === strpos($_['path'], 'page/articles') && 's' === $_['task']);

if ($edit || $create) {
	/**
	 * (x.panel.image) tab.
	 */
	// Add (x.panel.image) tab
	Hook::let('_', "_\\lot\\x\\panel\\image\\page\\fields");

	// Set (x.panel.image) tab title to "Featured Image"
	State::set("x.panel\\.image.title", i('Featured Image'));

	// Set (x.panel.image) name to `featured_image`
	State::set("x.panel\\.image.name", 'featured_image');

	/**
	 * Level 1 only (./lot/page/articles/<*>.page)
	 */
	if (1 === substr_count($_['path'], '/') && 's' === $_['task'] || 2 === substr_count($_['path'], '/') && 'g' === $_['task']) {
		Hook::set('_', function($_) {
			// Example to remove `content` field
			// $_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['page']['lot']['fields']['lot']['content']['hidden'] = true;

			return $_;
		}, 9999);
	}
}
