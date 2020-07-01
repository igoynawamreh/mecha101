<?php

Hook::set('_', function($_) {
	/**
     * Index page only (example.com/panel/::g::/page).
     */
    if (0 !== strpos($_['path'], 'page/')) {
		// Remove "New Page" button
		$_['lot']['desk']['lot']['form']['lot'][0]['lot']['tasks']['lot']['page']['hidden'] = true;
	}

	return $_;
}, 9999);
