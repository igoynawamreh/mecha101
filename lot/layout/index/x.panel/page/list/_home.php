<?php

Hook::set('_', function($_) {
	/**
	 * Parent page (./lot/page/index.page).
	 */
	// Remove "Add Child" icon
	$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['pages']['lot']['pages']['lot'][LOT . DS . 'page' . DS . 'index.page']['tasks']['s']['hidden'] = true;

	// Remove "Delete" icon
	$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['pages']['lot']['pages']['lot'][LOT . DS . 'page' . DS . 'index.page']['tasks']['l']['hidden'] = true;

	/**
	 * Child page(s) (./lot/page/index/<**>/<*>.page).
	 */
	foreach (g(LOT . DS . 'page' . DS . 'index', 'page', true) as $path => $type) {
		// The Home page has no children.
	}

	return $_;
}, 9999);
