<?php

Hook::set('_', function($_) {
	/**
	 * Parent page (./lot/page/pages.page).
	 */
	// Remove "Delete" icon
	$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['pages']['lot']['pages']['lot'][LOT . DS . 'page' . DS . 'pages.page']['tasks']['l']['hidden'] = true;

	/**
	 * Child page(s) (./lot/page/pages/<**>/<*>.page).
	 */
	foreach (g(LOT . DS . 'page' . DS . 'pages', 'page', true) as $path => $type) {
		// Example to remove "Delete" icon
		// $_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['pages']['lot']['pages']['lot'][$path]['tasks']['l']['hidden'] = true;

		// Example to remove "Delete" icon for specific page (./lot/page/pages/child-1.page)
		// if (LOT . DS . 'page' . DS . 'pages' . DS . 'child-1.page' === $path) {
		//     $_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['pages']['lot']['pages']['lot'][$path]['tasks']['l']['hidden'] = true;
		// }

		/**
		 * Level 1 only (./lot/page/pages/<*>.page)
		 */
		if (1 === substr_count($_['path'], '/') && 0 === strpos($_['path'], 'page/pages')) {
			// Example to remove "Delete" icon
			// $_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['pages']['lot']['pages']['lot'][$path]['tasks']['l']['hidden'] = true;
		}
	}

	return $_;
}, 9999);
