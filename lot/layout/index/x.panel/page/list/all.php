<?php

Hook::set('_', function($_) {
	// Remove "New Data" button (add data through the edit page only)
	$_['lot']['desk']['lot']['form']['lot'][0]['lot']['tasks']['lot']['data']['hidden'] = true;

	return $_;
}, 9999);
