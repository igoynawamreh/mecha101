<?php

/*
|--------------------------------------------------------------------------
| Add CSS and JS assets.
|--------------------------------------------------------------------------
*/

Asset::set('css/bootstrap.min.css', 20);
Asset::set('css/style.css', 20.1);
Asset::set('js/jquery.min.js', 20);
Asset::set('js/bootstrap.bundle.min.js', 20.1);
Asset::set('js/script.js', 20.2);

/*
|--------------------------------------------------------------------------
| Create site link data to be used in navigation/navbar.
|--------------------------------------------------------------------------
*/

$GLOBALS['links'] = new Anemon((function($out, $state, $url) {
    $index = LOT . DS . 'page' . strtr($state->path, '/', DS) . '.page';
    foreach (g(LOT . DS . 'page', 'page') as $k => $v) {
        // Exclude home page
        if ($k === $index) {
            continue;
        }
        $v = new Page($k);
        // Add active state
        $v->set('active', 0 === strpos($url->path . '/', '/' . $v->name . '/'));
        $out[$k] = $v;
    }
    ksort($out);
    return $out;
})([], $state, $url));

/*
|--------------------------------------------------------------------------
| Create site trace data to be used in navigation/breadcrumb.
|--------------------------------------------------------------------------
*/

$GLOBALS['traces'] = new Pages((function($out, $state, $url) {
    $chops = explode('/', trim($url->path, '/'));
    $v = LOT . DS . 'page';
    while ($chop = array_shift($chops)) {
        $v .= '/' . $chop;
        if ($file = File::exist([
            $v . '.page',
            $v . '.archive'
        ])) {
            $out[] = $file;
        }
    }
    return $out;
})([], $state, $url));

/*
|--------------------------------------------------------------------------
| Set class.
|--------------------------------------------------------------------------
|
| Set class.
|
| Usage example:
| $set_class(
| 		[
|      		['a', 'a-class'],
|           ['abbr', 'abbr-class']
| 		],
|		'<abbr>HTML</abbr> content <a>here</a>'
| );
|
| Output:
| <abbr class="abbr-class">HTML</abbr> content <a class="a-class">here</a>
|
*/

$GLOBALS['set_class'] = function($array, $content) {
	foreach ($array as $k => $v) {
		$tag = $array[$k][0];
		$class = $array[$k][1];
	    if (false !== strpos($content, '</' . $tag . '>')) {
	        if (false !== strpos($content, '<' . $tag . ' ')) {
	            $content = preg_replace_callback('/<' . $tag . '(\s[^>]*)?>/', function($m) use($class, $tag) {
	                if (false !== strpos($m[1], ' class="')) {
	                    $m[1] = str_replace(' class="', ' class="' . $class . ' ', $m[1]);
	                } else {
	                    $m[1] .= ' class="' . $class . '"';
	                }
	                return '<' . $tag . $m[1] . '>';
	            }, $content);
	        }
	        $content = str_replace('<' . $tag . '>', '<' . $tag . ' class="' . $class . '">', $content);
	    }
	}
    return $content;
};

/*
|--------------------------------------------------------------------------
| Page extension (x.page).
|--------------------------------------------------------------------------
*/

$page_files = __DIR__
              . DS . 'index'
              . DS . 'x.page'
              . DS . '*.php';

foreach (glob($page_files) as $file) {
	require $file;
}

/*
|--------------------------------------------------------------------------
| Panel extension (x.panel).
|--------------------------------------------------------------------------
*/

/**
 * (x.panel.image).
 */
// Remove (x.panel.image) tab in all page. This is added later if we need it.
Hook::let('_', "_\\lot\\x\\panel\\image\\page\\fields");

// Remove the (x.panel.image) image URL prefix
$name = State::get('x.panel\\.image.name') ?? 'image';
Hook::set(['do.page.get', 'do.page.set'], function($_) use($name, $url) {
    if (!empty($_['alert']['error'])) {
        return $_; // Abort on error!
    }
    if (Request::is('Post') && $_['f']) {
        $file = new File($_['f']);
        $data = From::page($file->content, true);
        if (isset($data[$name])) {
            // Remove the root URL
            $data[$name] = strtr($data[$name], [$url . '' => '']);
            // Update the page file
            $file->set(To::page($data))->save();
        }
    }
    return $_;
}, 20.1); // Make sure to run after image upload event.

// You may also need to add this hook to ensure that the image URL remains accessible
// when displayed through Mecha that is mounted to a sub-folder.
Hook::set('page.' . $name, function($image) use($url) {
    return 0 === strpos($image, '/lot/') ? $url . $image : $image;
}, 0);

/**
 * Panel Page
 */
if (0 === strpos($_['path'], 'page')) {
	/**
	 * Editor
	 *
     * Create: example.com/panel/::s::/page/<**>?layout=page.page
     * Edit:   example.com/panel/::g::/page/<*>.page
     *         example.com/panel/::g::/page/<**>/<*>.page
     */
	if (!$site->is('pages')) {
		$files = __DIR__
				 . DS . 'index'
				 . DS . 'x.panel'
				 . DS . 'page'
				 . DS . 'editor'
				 . DS . '*.php';

		foreach (glob($files) as $file) {
			require $file;
		}
	}

	/**
	 * List
	 *
     * example.com/panel/::g::/page
     * example.com/panel/::g::/page/<**>
     */
	if ($site->is('pages')) {
		$files = __DIR__
				 . DS . 'index'
				 . DS . 'x.panel'
				 . DS . 'page'
				 . DS . 'list'
				 . DS . '*.php';

		foreach (glob($files) as $file) {
			require $file;
		}
	}
}

/**
 * Panel User
 */
if (0 === strpos($_['path'], 'user')) {
	/**
	 * Editor
	 *
     * Create: example.com/panel/::s::/user?layout=page.user
 	 * Edit:   example.com/panel/::g::/user/<*>.page
     */
	if (!$site->is('pages')) {
		$files = __DIR__
				 . DS . 'index'
				 . DS . 'x.panel'
				 . DS . 'user'
				 . DS . 'editor'
				 . DS . '*.php';

		foreach (glob($files) as $file) {
			require $file;
		}
	}

	/**
	 * List
	 *
     * example.com/panel/::g::/user
 	 * example.com/panel/::g::/user/<**>
     */
	if ($site->is('pages')) {
		$files = __DIR__
				 . DS . 'index'
				 . DS . 'x.panel'
				 . DS . 'user'
				 . DS . 'list'
				 . DS . '*.php';

		foreach (glob($files) as $file) {
			require $file;
		}
	}
}
