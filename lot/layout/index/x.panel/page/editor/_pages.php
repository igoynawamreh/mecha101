<?php

/**
 * Parent page (./lot/page/pages.page).
 */
if ('page/pages' === Path::F((string) $_['path'], '/') && 'g' === $_['task']) {
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
 * Child page(s) (./lot/page/pages/<**>/<*>.page).
 */
$edit = (0 === strpos($_['path'], 'page/pages/'));
$create = (0 === strpos($_['path'], 'page/pages') && 's' === $_['task']);

if ($edit || $create) {
	// none

	/**
	 * Level 1 only (./lot/page/pages/<*>.page)
	 */
	if (1 === substr_count($_['path'], '/') && 's' === $_['task'] || 2 === substr_count($_['path'], '/') && 'g' === $_['task']) {
		Hook::set('_', function($_) {
			// Example to remove `content` field
			// $_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['page']['lot']['fields']['lot']['content']['hidden'] = true;

			return $_;
		}, 9999);
	}
}
