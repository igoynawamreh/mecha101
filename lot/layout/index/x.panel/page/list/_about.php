<?php

Hook::set('_', function($_) {
	/**
	 * Parent page (./lot/page/about.page).
	 */
	// Remove "Add Child" icon
	$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['pages']['lot']['pages']['lot'][LOT . DS . 'page' . DS . 'about.page']['tasks']['s']['hidden'] = true;

	// Remove "Delete" icon
	$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['pages']['lot']['pages']['lot'][LOT . DS . 'page' . DS . 'about.page']['tasks']['l']['hidden'] = true;

	/**
	 * Child page(s) (./lot/page/about/<**>/<*>.page).
	 */
	foreach (g(LOT . DS . 'page' . DS . 'about', 'page', true) as $path => $type) {
		// The About page has no children.
	}

	return $_;
}, 9999);
