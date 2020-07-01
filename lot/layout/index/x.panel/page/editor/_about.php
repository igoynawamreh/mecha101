<?php

/**
 * Parent page (./lot/page/about.page).
 */
if ('page/about' === Path::F((string) $_['path'], '/') && 'g' === $_['task']) {
	Hook::set('_', function($_) {
		$page = new Page($_['f']);

		/**
		 * Page tab.
		 */
		// Hide `name`/slug field
		$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['page']['lot']['fields']['lot']['name']['type'] = 'hidden';

		/**
		 * About tab.
		 */
		// Add `about` tab
		$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['about'] = [
			'title' => i('About'),
			'lot' => [
				'fields' => [
					'type' => 'fields',
					'stack' => 10
				]
			],
			'stack' => 10
		];

		// Add `im` field
		$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['about']['lot']['fields']['lot']['im'] = [
			'type' => 'text',
			'name' => 'page[im]',
			'value' => $page['im'],
			'title' => i('Name'),
			'alt' => 'John Doe',
			// 'description' => '',
			'width' => true,
			'stack' => 10.1
		];

		// Add `status` field
		$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['about']['lot']['fields']['lot']['status'] = [
			'type' => 'text',
			'name' => 'page[status]',
			'value' => $page['status'],
			'title' => i('Status'),
			'alt' => 'Job status',
			// 'description' => '',
			'width' => true,
			'stack' => 10.2
		];

		// Add `position` field
		$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['about']['lot']['fields']['lot']['position'] = [
			'type' => 'text',
			'name' => 'page[position]',
			'value' => $page['position'],
			'title' => i('Position'),
			'alt' => 'Job position',
			// 'description' => '',
			'width' => true,
			'stack' => 10.3
		];

		// Add `industry` field
		$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['about']['lot']['fields']['lot']['industry'] = [
			'type' => 'text',
			'name' => 'page[industry]',
			'value' => $page['industry'],
			'title' => i('Industry'),
			'alt' => 'Industry',
			// 'description' => '',
			'width' => true,
			'stack' => 10.4
		];

		// Add `speciality` field
		$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['about']['lot']['fields']['lot']['speciality'] = [
			'type' => 'text',
			'name' => 'page[speciality]',
			'value' => $page['speciality'],
			'title' => i('Speciality'),
			'alt' => 'Speciality',
			// 'description' => '',
			'width' => true,
			'stack' => 10.5
		];

		// Add experienced field
		$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['about']['lot']['fields']['lot']['experienced'] = [
			'type' => 'text',
			'name' => 'page[experienced]',
			'value' => $page['experienced'],
			'title' => i('Experienced'),
			'alt' => 'Experienced',
			// 'description' => '',
			'width' => true,
			'stack' => 10.6
		];

		// Add `job_type` field
		$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['about']['lot']['fields']['lot']['job_type'] = [
			'type' => 'text',
			'name' => 'page[job_type]',
			'value' => $page['job_type'],
			'title' => i('Job type'),
			'alt' => 'Job type',
			// 'description' => '',
			'width' => true,
			'stack' => 10.7
		];

		// Add `salary` field
		$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['about']['lot']['fields']['lot']['salary'] = [
			'type' => 'text',
			'name' => 'page[salary]',
			'value' => $page['salary'],
			'title' => i('Salary'),
			'alt' => 'Salary',
			// 'description' => '',
			'width' => true,
			'stack' => 10.8
		];

		// Add `mobility` field
		$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['about']['lot']['fields']['lot']['mobility'] = [
			'type' => 'text',
			'name' => 'page[mobility]',
			'value' => $page['mobility'],
			'title' => i('Mobility'),
			'alt' => 'Mobility',
			// 'description' => '',
			'width' => true,
			'stack' => 10.9
		];

		// Add `education` field
		$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['about']['lot']['fields']['lot']['education'] = [
			'type' => 'text',
			'name' => 'page[education]',
			'value' => $page['education'],
			'title' => i('Education'),
			'alt' => 'Education',
			// 'description' => '',
			'width' => true,
			'stack' => 10.11
		];

		// Add `languages` field
		$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['about']['lot']['fields']['lot']['languages'] = [
			'type' => 'text',
			'name' => 'page[languages]',
			'value' => $page['languages'],
			'title' => i('Languages'),
			'alt' => 'Languages',
			// 'description' => '',
			'width' => true,
			'stack' => 10.12
		];

		// Add `hobbies` field
		$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['about']['lot']['fields']['lot']['hobbies'] = [
			'type' => 'text',
			'name' => 'page[hobbies]',
			'value' => $page['hobbies'],
			'title' => i('Hobbies'),
			'alt' => 'Hobbies',
			// 'description' => '',
			'width' => true,
			'stack' => 10.13
		];

		// Add `skills` field
		$skills_content = '';
		foreach (range(0, 3) as $i) {
			$name_name = 'page[skills][' . $i . '][name]';
			$name_value = $page['skills'][$i]['name'] ?? null;
			$value_name = 'page[skills][' . $i . '][value]';
			$value_value = $page['skills'][$i]['value'] ?? null;

			$skills_content .= '<div style="' . (0 === $i ? 'margin-top:0;' : 'margin-top:.5rem;') . '">';
			$skills_content .= '<input class="input width" name="' . $name_name . '" value="'. $name_value . '" placeholder="Skill Name" type="text">';
			$skills_content .= ' ';
			$skills_content .= '<input class="input width" name="' . $value_name . '" value="'. $value_value . '" placeholder="0%" type="text">';
			$skills_content .= '</div>';
		}
		$skills_content .= '<div class="description">TODO: Make this field repeatable.</div>';
		$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['about']['lot']['fields']['lot']['skills'] = [
			'type' => 'field',
			'content' => $skills_content,
			'title' => i('Skills'),
			'stack' => 10.14
		];

		// Add `timeline` field
		$timeline_content = '';
		foreach (range(0, 3) as $i) {
			$title_name = 'page[timeline][' . $i . '][title]';
			$title_value = $page['timeline'][$i]['title'] ?? null;
			$position_name = 'page[timeline][' . $i . '][position]';
			$position_value = $page['timeline'][$i]['position'] ?? null;
			$date_start_name = 'page[timeline][' . $i . '][date_start]';
			$date_start_value = $page['timeline'][$i]['date_start'] ?? null;
			$date_end_name = 'page[timeline][' . $i . '][date_end]';
			$date_end_value = $page['timeline'][$i]['date_end'] ?? null;

			$timeline_content .= '<div style="' . (0 === $i ? 'margin-top:0;' : 'margin-top:.5rem;') . '">';
			$timeline_content .= '<input class="input width" name="' . $title_name . '" value="'. $title_value . '" placeholder="Title" type="text">';
			$timeline_content .= ' ';
			$timeline_content .= '<input class="input width" name="' . $position_name . '" value="'. $position_value . '" placeholder="Position" type="text">';
			$timeline_content .= ' ';
			$timeline_content .= '<input class="input width" name="' . $date_start_name . '" value="'. $date_start_value . '" placeholder="Date Start (MM/YYYY)" type="text">';
			$timeline_content .= ' ';
			$timeline_content .= '<input class="input width" name="' . $date_end_name . '" value="'. $date_end_value . '" placeholder="Date End (MM/YYYY)" type="text">';
			$timeline_content .= '</div>';
		}
		$timeline_content .= '<div class="description">TODO: Make this field repeatable.</div>';
		$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['about']['lot']['fields']['lot']['timeline'] = [
			'type' => 'field',
			'content' => $timeline_content,
			'title' => i('Timeline'),
			'stack' => 10.15
		];

		// Add `contact` field
		$contact_content = '';
		foreach (range(0, 3) as $i) {
			$name_name = 'page[contact][' . $i . '][name]';
			$name_value = $page['contact'][$i]['name'] ?? null;
			$value_name = 'page[contact][' . $i . '][value]';
			$value_value = $page['contact'][$i]['value'] ?? null;

			$contact_content .= '<div style="' . (0 === $i ? 'margin-top:0;' : 'margin-top:.5rem;') . '">';
			$contact_content .= '<input class="input width" name="' . $name_name . '" value="'. $name_value . '" placeholder="Contact Name" type="text">';
			$contact_content .= ' ';
			$contact_content .= '<input class="input width" name="' . $value_name . '" value="'. $value_value  . '" placeholder="Contact Value" type="text">';
			$contact_content .= '</div>';
		}
		$contact_content .= '<div class="description">TODO: Make this field repeatable.</div>';
		$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['about']['lot']['fields']['lot']['contact'] = [
			'type' => 'field',
			'content' => $contact_content,
			'title' => i('Contact'),
			'stack' => 10.16
		];

		// Add `social` field
		$social_content = '';
		foreach (range(0, 3) as $i) {
			$name_name = 'page[social][' . $i . '][name]';
			$name_value = $page['social'][$i]['name'] ?? null;
			$link_name = 'page[social][' . $i . '][link]';
			$link_value = $page['social'][$i]['link'] ?? null;

			$social_content .= '<div style="' . (0 === $i ? 'margin-top:0;' : 'margin-top:.5rem;') . '">';
			$social_content .= '<input class="input width" name="' . $name_name . '" value="'. $name_value . '" placeholder="Social Name" type="text">';
			$social_content .= ' ';
			$social_content .= '<input class="input width" name="' . $link_name . '" value="'. $link_value . '" pattern="^(data:[^\s;]+;\S+|(https?:)\/\/\S+)$" placeholder="https://example.com/username" type="text">';
			$social_content .= '</div>';
		}
		$social_content .= '<div class="description">TODO: Make this field repeatable.</div>';
		$_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['about']['lot']['fields']['lot']['social'] = [
			'type' => 'field',
			'content' => $social_content,
			'title' => i('Social'),
			'stack' => 10.17
		];

		/**
		 * Tasks.
		 */
		// Remove "Archive" button
		$_['lot']['desk']['lot']['form']['lot'][2]['lot']['fields']['lot'][0]['lot']['tasks']['lot']['archive']['hidden'] = true;

		// Remove "Delete" button
		$_['lot']['desk']['lot']['form']['lot'][2]['lot']['fields']['lot'][0]['lot']['tasks']['lot']['l']['hidden'] = true;

		return $_;
	}, 9999);

	/**
	 * (x.panel.image) tab.
	 */
	// Add (x.panel.image) tab
	Hook::let('_', "_\\lot\\x\\panel\\image\\page\\fields");

	// Set (x.panel.image) tab title to "Photo"
	State::set("x.panel\\.image.title", i('Photo'));

	// Set (x.panel.image) name to `photo`
	State::set("x.panel\\.image.name", 'photo');
}

/**
 * Child page(s) (./lot/page/about/<**>/<*>.page).
 */
$edit = (0 === strpos($_['path'], 'page/about/'));
$create = (0 === strpos($_['path'], 'page/about') && 's' === $_['task']);

if ($edit || $create) {
	// The About page has no children.
}
