<?php

function dulcet_preprocess_page(&$variables) {

  # Footer pre-process (formerly in madlib/preprocess/preprocess-region.inc)

	// establish the default address (Perkins & Bostock)
	$variables['physical_address'] = '411 Chapel Drive<br />Durham, NC 27708<br />'
		. '(919) 660-5870<br />Perkins Library Service Desk';

	// change the address when the REQUEST_URI contains either 'lilly' or 'music'
	if (preg_match('/^\/lilly/', $_SERVER['REQUEST_URI'])) {

		$variables['physical_address'] = '1348 Campus Drive<br />Durham, NC 27708<br />'
			. '(919) 660-5995<br />Lilly Library Service Desk';

	} elseif (preg_match('/^\/music/', $_SERVER['REQUEST_URI'])) {

		$variables['physical_address'] = '113 Biddle Music Building<br />9 Brodie Gym Drive<br />Durham, NC 27708<br />'
			. '(919) 660-5950<br />Music Library Service Desk';


	} elseif (preg_match('/^\/rubenstein/', $_SERVER['REQUEST_URI'])) {

		$variables['physical_address'] = '411 Chapel Drive<br />Durham, NC 27708<br />'
			. '(919) 660-5822 <br />Rubenstein Library Research Services';

	}

	# http://www.digett.com/blog/01/11/2012/overriding-page-templates-content-type-drupal-7
	if (isset($variables['node']->type)) {
		$variables['theme_hook_suggestions'][] = 'page__' . $variables['node']->type;
	}
	if (isset($_GET['response_type']) && $_GET['response_type'] == 'embed') {
		$variables['theme_hook_suggestions'][] = 'page__embed';
	}

	$current_path = current_path();

  // Add copyright to theme.
  if ($copyright = theme_get_setting('copyright')) {
    $variables['copyright'] = check_markup($copyright['value'], $copyright['format']);
  }

}
