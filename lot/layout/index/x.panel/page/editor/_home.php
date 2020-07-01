<?php

/**
 * Parent page (./lot/page/index.page).
 */
if ('page/index' === Path::F((string) $_['path'], '/') && 'g' === $_['task']) {
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
 * Child page(s) (./lot/page/index/<**>/<*>.page).
 */
$edit = (0 === strpos($_['path'], 'page/index/'));
$create = (0 === strpos($_['path'], 'page/index') && 's' === $_['task']);

if ($edit || $create) {
	// The Home page has no children.
}
