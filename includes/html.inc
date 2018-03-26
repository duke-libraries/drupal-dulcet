<?php
/**
 * @file
 * Theme and preprocess functions for html. SCA CUSTOM
 */

function dulcet_preprocess_html(&$vars) {
	// suggest the use of the 'embed' template that removes
	// all of the decorations (megamenus, footer, etc)
	if (isset($_GET['response_type']) && $_GET['response_type'] == 'embed') {
		$vars['theme_hook_suggestions'][] = 'html__embed';
	}


	// Load external JS Navigation
    drupal_add_js('//library.duke.edu/masthead/load-masthead.js.php?fixed=false&width=1280', array('group' => -201, 'weight' => -1000, 'preprocess' => FALSE));


	drupal_add_css(path_to_theme() . '/css/ie-lte-8.css', array('group' => CSS_THEME, 'weight' => 115, 'browsers' => array('IE' => 'lte IE 8', '!IE' => FALSE), 'preprocess' => FALSE));
	$alias = drupal_get_path_alias();

	# fetch the pages that require Simile
	$simile_pages = preg_split("/\s+/", theme_get_setting('simile_pages', 'dulcet'));

	// Detect IE
	$findie11 = strpos($_SERVER["HTTP_USER_AGENT"], 'Trident');
	if ($findie11 !== false) {
    	$mybrowser = "IE";
	}
	elseif (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) {
    	$mybrowser = "IE";
	}
	else {
    	$mybrowser = "NOT-IE";
	}

	// places to study
	//if ($alias == "using/places-to-study") {
	if ($alias == "using/room-reservations") {
		$GLOBALS['conf']['cache'] = FALSE;
		if ($mybrowser == "IE") {
    		drupal_add_js('https://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		// echo "<!--" . $mybrowser . "-->";
		}
		if ($mybrowser == "NOT-IE") {
    		drupal_add_js('//api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
			// echo "<!--" . $mybrowser . "-->";
		}
		drupal_add_html_head_link(array('ex:converter' => 'googleSpreadsheets', 'type' => 'application/jsonp', 'rel' => 'exhibit/data', 'href' => 'https://spreadsheets.google.com/feeds/list/0Ai1EAVMshswCdGx3OE1ySXMtZThseVRFR1JXaF9JeXc/od6/public/basic?alt=json-in-script'));

	}

	// IAS Japan Images
	if ($alias == "about/depts/ias/eastasian/images") {
		$GLOBALS['conf']['cache'] = FALSE;
		if ($mybrowser == "IE") {
    		drupal_add_js('https://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		// echo "<!--" . $mybrowser . "-->";
		}
		if ($mybrowser == "NOT-IE") {
    		drupal_add_js('//api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		//drupal_add_js('http://api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
			// echo "<!--" . $mybrowser . "-->";
		}
		drupal_add_html_head_link(array('ex:converter' => 'googleSpreadsheets', 'type' => 'application/jsonp', 'rel' => 'exhibit/data', 'href' => 'https://spreadsheets.google.com/feeds/list/1ViDuOsdyvKyGPviGjzSVgu2IFurfkI3zzIFzEr2eNUc/od6/public/basic?alt=json-in-script'));
		//https://spreadsheets.google.com/feeds/list/o10691579607600944814.3750460617597962526/od6/public/basic?alt=json-in-script
	}

	// webx projects
	if ($alias == "about/depts/ux/webx-projects") {
		$GLOBALS['conf']['cache'] = FALSE;
		if ($mybrowser == "IE") {
    		drupal_add_js('https://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		// echo "<!--" . $mybrowser . "-->";
		}
		if ($mybrowser == "NOT-IE") {
    		drupal_add_js('//api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
			// echo "<!--" . $mybrowser . "-->";
		}
		drupal_add_html_head_link(array('ex:converter' => 'googleSpreadsheets', 'type' => 'application/jsonp', 'rel' => 'exhibit/data', 'href' => 'https://spreadsheets.google.com/feeds/list/0Apy3MwfBCSfXdE0tZ1dfYTBnckdtM212N3B2bU5TVXc/od6/public/basic?alt=json-in-script'));
	}

	// chinese-filmscript-and-advertisement-collection
	if ($alias == "research/subject/guides/chinese-studies/research-guide/film-studies/chinese-filmscript-and-advertisement-collection") {
		$GLOBALS['conf']['cache'] = FALSE;
		if ($mybrowser == "IE") {
    		drupal_add_js('https://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		// echo "<!--" . $mybrowser . "-->";
		}
		if ($mybrowser == "NOT-IE") {
    		drupal_add_js('//api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		//drupal_add_js('http://api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
			// echo "<!--" . $mybrowser . "-->";
		}
		drupal_add_html_head_link(array('ex:converter' => 'googleSpreadsheets', 'type' => 'application/jsonp', 'rel' => 'exhibit/data', 'href' => 'https://spreadsheets.google.com/feeds/list/0Ajg49nLm71UPdDdxaDNPSE5MWU5ackxjcDktZDJkVlE/od6/public/basic?alt=json-in-script'));
	}

	// ngo-research-guide
	if ($alias == "research/subject/guides/ngo_guide/ngo_database") {
		$GLOBALS['conf']['cache'] = FALSE;
		if ($mybrowser == "IE") {
    		drupal_add_js('https://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		// echo "<!--" . $mybrowser . "-->";
		}
		if ($mybrowser == "NOT-IE") {
    		drupal_add_js('//api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
			// echo "<!--" . $mybrowser . "-->";
		}

		drupal_add_html_head_link(array('ex:converter' => 'googleSpreadsheets', 'type' => 'application/jsonp', 'rel' => 'exhibit/data', 'href' => 'https://spreadsheets.google.com/feeds/cells/1Lw9FvfRffACIC2mbIyC-pMuabvE3EJZebqnX0obJuNM/1/public/basic?alt=json-in-script'));

	}

	// lilly-video-reserves

	if ($alias == "lilly/reserves/film-video") {
		$GLOBALS['conf']['cache'] = FALSE;
		if ($mybrowser == "IE") {
    		drupal_add_js('https://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		// echo "<!--" . $mybrowser . "-->";
		}
		if ($mybrowser == "NOT-IE") {
    		drupal_add_js('//api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
			// echo "<!--" . $mybrowser . "-->";
		}
		drupal_add_html_head_link(array('ex:converter' => 'googleSpreadsheets', 'type' => 'application/jsonp', 'rel' => 'exhibit/data', 'href' => 'https://spreadsheets.google.com/feeds/list/0AlnornlpYwpUdExFcHJTdmNzSzdZdTlQQzZJa1pfSVE/od6/public/basic?alt=json-in-script'));
	}

	// lilly-book-reserves
	if ($alias == "lilly/reserves/books") {
		$GLOBALS['conf']['cache'] = FALSE;
		if ($mybrowser == "IE") {
    		drupal_add_js('https://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		// echo "<!--" . $mybrowser . "-->";
		}
		if ($mybrowser == "NOT-IE") {
    		drupal_add_js('//api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		//drupal_add_js('http://api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
			// echo "<!--" . $mybrowser . "-->";
		}
		drupal_add_html_head_link(array('ex:converter' => 'googleSpreadsheets', 'type' => 'application/jsonp', 'rel' => 'exhibit/data', 'href' => 'https://spreadsheets.google.com/feeds/list/0AlnornlpYwpUdFEwYlhEOXBsQURDTVlMUi1qS282bGc/od6/public/basic?alt=json-in-script'));
	}

	// music-reserves
	if ($alias == "music/reserves") {
		//drupal_add_js('http://api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
		$GLOBALS['conf']['cache'] = FALSE;
		if ($mybrowser == "IE") {
    		drupal_add_js('https://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		// echo "<!--" . $mybrowser . "-->";
		}
		if ($mybrowser == "NOT-IE") {
    		drupal_add_js('//api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		//drupal_add_js('http://api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
			// echo "<!--" . $mybrowser . "-->";
		}
		drupal_add_html_head_link(array('ex:converter' => 'googleSpreadsheets', 'type' => 'application/jsonp', 'rel' => 'exhibit/data', 'href' => 'https://spreadsheets.google.com/feeds/list/0Ai2xmU8Ueb8kdHpJR19tWkFQX3VxdHhuTVlDVFU3aUE/od6/public/basic?alt=json-in-script'));
	}

	// afghanistan-filmography
	if ($alias == "lilly/film-video/filmographies/afghanistan-filmography") {
		$GLOBALS['conf']['cache'] = FALSE;
		if ($mybrowser == "IE") {
    		drupal_add_js('https://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		// echo "<!--" . $mybrowser . "-->";
		}
		if ($mybrowser == "NOT-IE") {
    		drupal_add_js('//api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		//drupal_add_js('http://api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
			// echo "<!--" . $mybrowser . "-->";
		}

		drupal_add_html_head_link(array('ex:converter' => 'googleSpreadsheets', 'type' => 'application/jsonp', 'rel' => 'exhibit/data', 'href' => 'https://spreadsheets.google.com/feeds/list/ts9nzsj_q9rgUNxiDkrNADg/od6/public/basic?alt=json-in-script'));
	}


	// african-american-history-documentaries
	if ($alias == "lilly/film-video/filmographies/african-american-history-filmography") {
		$GLOBALS['conf']['cache'] = FALSE;
		if ($mybrowser == "IE") {
    		drupal_add_js('https://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		// echo "<!--" . $mybrowser . "-->";
		}

		if ($mybrowser == "NOT-IE") {
    		drupal_add_js('//api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
			// echo "<!--" . $mybrowser . "-->";
		}

		drupal_add_html_head_link(array('ex:converter' => 'googleSpreadsheets', 'type' => 'application/jsonp', 'rel' => 'exhibit/data', 'href' => 'https://spreadsheets.google.com/feeds/list/0AlnornlpYwpUdGJIc3B3M281VnlDRzdMdm1yRElzN2c/od6/public/basic?alt=json-in-script'));
	}

	// bollywood-filmography
	if ($alias == "lilly/film-video/filmographies/bollywood-filmography") {
		$GLOBALS['conf']['cache'] = FALSE;

		if ($mybrowser == "IE") {
    		drupal_add_js('//api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		// echo "<!--" . $mybrowser . "-->";
		}

		if ($mybrowser == "NOT-IE") {

			drupal_add_js('//api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));

			//drupal_add_js('/sites/all/themes/dulcet/js/simile/v2-2/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
			// error when loading locally?

			//drupal_add_js('http://api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		//drupal_add_js('http://api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
			// echo "<!--" . $mybrowser . "-->";
		}

		drupal_add_html_head_link(array('ex:converter' => 'googleSpreadsheets', 'type' => 'application/jsonp', 'rel' => 'exhibit/data', 'href' => 'https://spreadsheets.google.com/feeds/list/tvJy9SxdtsVslY2tzVlP4QA/od6/public/basic?alt=json-in-script'));
	}

	// early-african-american-filmography
	if ($alias == "lilly/film-video/filmographies/early-african-american-filmography") {
		$GLOBALS['conf']['cache'] = FALSE;
		if ($mybrowser == "IE") {
    		drupal_add_js('https://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		// echo "<!--" . $mybrowser . "-->";
		}

		if ($mybrowser == "NOT-IE") {
    		drupal_add_js('//api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
			// echo "<!--" . $mybrowser . "-->";
		}

		drupal_add_html_head_link(array('ex:converter' => 'googleSpreadsheets', 'type' => 'application/jsonp', 'rel' => 'exhibit/data', 'href' => 'https://spreadsheets.google.com/feeds/list/t99QiV0ZUj8Sieadgztl_kQ/od6/public/basic?alt=json-in-script'));
	}


	// lgbt-filmography
	if ($alias == "lilly/film-video/filmographies/lgbt-filmography") {
		$GLOBALS['conf']['cache'] = FALSE;
		if ($mybrowser == "IE") {
    		drupal_add_js('https://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		// echo "<!--" . $mybrowser . "-->";
		}
		if ($mybrowser == "NOT-IE") {
    		drupal_add_js('//api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		//drupal_add_js('http://api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
			// echo "<!--" . $mybrowser . "-->";
		}
		drupal_add_html_head_link(array('ex:converter' => 'googleSpreadsheets', 'type' => 'application/jsonp', 'rel' => 'exhibit/data', 'href' => 'https://spreadsheets.google.com/feeds/list/0AlnornlpYwpUdDQxeFExamlnRTVya3lfcXlGWml4ZEE/od6/public/basic?alt=json-in-script'));
	}

	// rubenstein-library-processing
	if ($alias == "collections/processing") {
		$GLOBALS['conf']['cache'] = FALSE;
		if ($mybrowser == "IE") {
    		drupal_add_js('https://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
			drupal_add_js('http://api.simile-widgets.org/exhibit/2.2.0/extensions/time/time-extension.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		// echo "<!--" . $mybrowser . "-->";
		}
		if ($mybrowser == "NOT-IE") {
    		drupal_add_js('//api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		//drupal_add_js('http://api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		drupal_add_js('//api.simile-widgets.org/exhibit/2.2.0/extensions/time/time-extension.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
			// echo "<!--" . $mybrowser . "-->";
		}

		drupal_add_html_head_link(array('ex:converter' => 'googleSpreadsheets', 'type' => 'application/jsonp', 'rel' => 'exhibit/data', 'href' => 'https://spreadsheets.google.com/feeds/list/0AjiSV3Fr8fZ1dDM3UDlCWjh4allVY19EaWRzaXh3Snc/od6/public/basic?alt=json-in-script'));
	}

	// data collections, now named Data Sources
	if ($alias == "sources") {
		$GLOBALS['conf']['cache'] = FALSE;
		if ($mybrowser == "IE") {
    		drupal_add_js('https://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		// echo "<!--" . $mybrowser . "-->";
		}

		if ($mybrowser == "NOT-IE") {
    		drupal_add_js('//api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
			// echo "<!--" . $mybrowser . "-->";
		}
		drupal_add_html_head_link(array('ex:converter' => 'googleSpreadsheets', 'type' => 'application/jsonp', 'rel' => 'exhibit/data', 'href' => 'https://spreadsheets.google.com/feeds/list/0AmPARjiW2O9udFY1UjVTb1BLcnFsXzQ3cW00bkpqamc/od6/public/basic?alt=json-in-script'));
	}

	// subject experts aka subject specialists
	if ($alias == "research/specialists") {
		$GLOBALS['conf']['cache'] = FALSE;
		if ($mybrowser == "IE") {
    		drupal_add_js('https://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		// echo "<!--" . $mybrowser . "-->";
		}

		if ($mybrowser == "NOT-IE") {
    		drupal_add_js('//api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
			// echo "<!--" . $mybrowser . "-->";
		}

		drupal_add_html_head_link(array('ex:converter' => 'googleSpreadsheets', 'type' => 'application/jsonp', 'rel' => 'exhibit/data', 'href' => 'https://spreadsheets.google.com/feeds/list/0Ai1EAVMshswCdEVrdkRGT1RnQUVIRHo0VlN5bzlMMUE/od6/public/basic?alt=json-in-script'));
	}


	// humanities subject experts aka subject specialists
	if ($alias == "research/humanities/specialists") {
		$GLOBALS['conf']['cache'] = FALSE;
		if ($mybrowser == "IE") {
    		drupal_add_js('https://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		// echo "<!--" . $mybrowser . "-->";
		}

		if ($mybrowser == "NOT-IE") {
    		drupal_add_js('//api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
			// echo "<!--" . $mybrowser . "-->";
		}

		drupal_add_html_head_link(array('ex:converter' => 'googleSpreadsheets', 'type' => 'application/jsonp', 'rel' => 'exhibit/data', 'href' => 'https://spreadsheets.google.com/feeds/list/0Ai1EAVMshswCdEVrdkRGT1RnQUVIRHo0VlN5bzlMMUE/od6/public/basic?alt=json-in-script'));
	}


	// database list (temp)
	if ($alias == "find/databaseslist") {
		$GLOBALS['conf']['cache'] = FALSE;
		if ($mybrowser == "IE") {
    		drupal_add_js('https://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		// echo "<!--" . $mybrowser . "-->";
		}

		if ($mybrowser == "NOT-IE") {
    		drupal_add_js('//api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
			// echo "<!--" . $mybrowser . "-->";
		}

		drupal_add_html_head_link(array('ex:converter' => 'googleSpreadsheets', 'type' => 'application/jsonp', 'rel' => 'exhibit/data', 'href' => 'https://spreadsheets.google.com/feeds/cells/13dwY3So9S1AHY0WCCpqqubE4haRp8J73Mkr1xjuv78M/1/public/basic?alt=json-in-script'));
	}


	// edge kiosk people (uses same datasource as subject specialists)
	if ($alias == "kiosks/edge/staff") {
		$GLOBALS['conf']['cache'] = FALSE;
		if ($mybrowser == "IE") {
    		drupal_add_js('https://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		// echo "<!--" . $mybrowser . "-->";
		}

		if ($mybrowser == "NOT-IE") {
    		drupal_add_js('//api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
			// echo "<!--" . $mybrowser . "-->";
		}

		drupal_add_html_head_link(array('ex:converter' => 'googleSpreadsheets', 'type' => 'application/jsonp', 'rel' => 'exhibit/data', 'href' => 'https://spreadsheets.google.com/feeds/list/0Ai1EAVMshswCdEVrdkRGT1RnQUVIRHo0VlN5bzlMMUE/od6/public/basic?alt=json-in-script'));
	}

	// science research people (uses same datasource as subject specialists)
	if ($alias == "research/science/specialists") {
		$GLOBALS['conf']['cache'] = FALSE;
		if ($mybrowser == "IE") {
    		drupal_add_js('https://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		// echo "<!--" . $mybrowser . "-->";
		}

		if ($mybrowser == "NOT-IE") {
    		drupal_add_js('//api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
			// echo "<!--" . $mybrowser . "-->";
		}

		drupal_add_html_head_link(array('ex:converter' => 'googleSpreadsheets', 'type' => 'application/jsonp', 'rel' => 'exhibit/data', 'href' => 'https://spreadsheets.google.com/feeds/list/0Ai1EAVMshswCdEVrdkRGT1RnQUVIRHo0VlN5bzlMMUE/od6/public/basic?alt=json-in-script'));
	}

	// perkins course reserves
	if ($alias == "course-support/course-reserves/perkins") {
		$GLOBALS['conf']['cache'] = FALSE;
		if ($mybrowser == "IE") {
    		drupal_add_js('https://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
    		// echo "<!--" . $mybrowser . "-->";
		}

		if ($mybrowser == "NOT-IE") {
    		drupal_add_js('//api.simile-widgets.org/exhibit/current/exhibit-api.js', array('group' => -101, 'weight' => -1000, 'preprocess' => TRUE));
			// echo "<!--" . $mybrowser . "-->";
		}

		drupal_add_html_head_link(array('ex:converter' => 'googleSpreadsheets', 'type' => 'application/jsonp', 'rel' => 'exhibit/data', 'href' => 'https://spreadsheets.google.com/feeds/list/1jkAfQCn8ruJFVsHSy8SOWKRDH9lbgQPyRHUErt_feIk/od6/public/basic?alt=json-in-script'));
	}


}

/**
 * The "linked_logo_img" needs to be modified to ensure the image's parent
 * link points to 'library.duke.edu'
 */
function dulcet_process_html(&$variables) {
	# create a variable for the hostname, making it available to html.tpl.php variation(s)
	$variables['dul_hostname'] = isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : $_SERVER['SERVER_NAME'];
}
