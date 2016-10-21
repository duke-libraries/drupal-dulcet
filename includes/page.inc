<?php

function dulcet_preprocess_page(&$variables) {
	# http://www.digett.com/blog/01/11/2012/overriding-page-templates-content-type-drupal-7
	if (isset($variables['node']->type)) {
		$variables['theme_hook_suggestions'][] = 'page__' . $variables['node']->type;
	}
	if (isset($_GET['response_type']) && $_GET['response_type'] == 'embed') {
		$variables['theme_hook_suggestions'][] = 'page__embed';
	}
	//dpm($variables);

	/*
	if (preg_match('/^\/lilly/', $_SERVER['REQUEST_URI'])) {
		dpm('Lilly path matched');
	} elseif (preg_match('/^\/music/', $_SERVER['REQUEST_URI'])) {
		dpm('Music path matched');
	}
	*/
	//$path = drupal_strtolower(drupal_get_path_alias($_GET['q']));

	// Add Megameu JS and CSS files
	//drupal_add_css(libraries_get_path('megamenu') . '/css/megamenu.css',
		//array('group' => CSS_THEME, 'type' => 'file'));
	//drupal_add_js(libraries_get_path('megamenu') . '/js/megamenu_plugins.js',
		//array('group' => JS_THEME, 'type' => 'file'));
	//drupal_add_js(libraries_get_path('megamenu') . '/js/megamenu.js',
		//array('group' => JS_THEME, 'type' => 'file'));

	$current_path = current_path();

	# TODO put these in dul_system as global variables
	/*
	if (preg_match('/(\/research\/subject|search-results|\/services\/ask)$/', $current_path)) {
		watchdog('preprocess', 'added h3lp js to header');
		drupal_add_js('http://libraryh3lp.com/js/libraryh3lp.js?multi', 'external');
	}
	*/

  // Add copyright to theme.
  if ($copyright = theme_get_setting('copyright')) {
    $variables['copyright'] = check_markup($copyright['value'], $copyright['format']);
  }

}
