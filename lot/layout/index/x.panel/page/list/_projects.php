<?php

Hook::set('_', function($_) {
	/**
	 * Parent page (./lot/page/projects.page).
	 */
	// Remove "Delete" icon
	$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['pages']['lot']['pages']['lot'][LOT . DS . 'page' . DS . 'projects.page']['tasks']['l']['hidden'] = true;

	/**
	 * Child page(s) (./lot/page/projects/<**>/<*>.page).
	 */
	foreach (g(LOT . DS . 'page' . DS . 'projects', 'page', true) as $path => $type) {
		// Example to remove "Delete" icon
		// $_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['pages']['lot']['pages']['lot'][$path]['tasks']['l']['hidden'] = true;

		// Example to remove "Delete" icon for specific page (./lot/page/projects/child-1.page)
		// if (LOT . DS . 'page' . DS . 'projects' . DS . 'child-1.page' === $path) {
		//     $_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['pages']['lot']['pages']['lot'][$path]['tasks']['l']['hidden'] = true;
		// }

		/**
		 * Level 1 only (./lot/page/projects/<*>.page)
		 */
		if (1 === substr_count($_['path'], '/') && 0 === strpos($_['path'], 'page/projects')) {
			// Example to remove "Delete" icon
			// $_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['pages']['lot']['pages']['lot'][$path]['tasks']['l']['hidden'] = true;
		}
	}

	return $_;
}, 9999);
