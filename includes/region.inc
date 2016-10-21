<?php

/**
 * Implements TEMPLATE_preprocess_region()
 */
function dulcet_preprocess_region(&$vars) {
	if ($vars['region'] == 'footer_contact') {

		// establish the default address (Perkins & Bostock)
		$vars['physical_address'] = '411 Chapel Drive<br />Durham, NC 27708<br />'
			. '<div style="margin-top:5px">(919) 660-5870<br /><span class="font-size:7px;">Perkins Library Service Desk</span></div>';

		// change the address when the REQUEST_URI contains either 'lilly' or 'music'
		if (preg_match('/^\/lilly/', $_SERVER['REQUEST_URI'])) {

			$vars['physical_address'] = '1348 Campus Drive<br />Durham, NC 27708<br />'
				. '<div style="margin-top:5px">(919) 660-5995<br /><span class="font-size:7px;">Lilly Library Service Desk</span></div>';

		} elseif (preg_match('/^\/music/', $_SERVER['REQUEST_URI'])) {

			$vars['physical_address'] = '113 Biddle Music Building<br />9 Brodie Gym Drive<br />Durham, NC 27708<br />'
				. '<div style="margin-top:5px">(919) 660-5950<br /><span class="font-size:7px;">Music Library Service Desk</span></div>';


		} elseif (preg_match('/^\/rubenstein/', $_SERVER['REQUEST_URI'])) {

			$vars['physical_address'] = '411 Chapel Drive<br />Durham, NC &nbsp;27708<br />'
				. '<div style="margin-top:5px">(919) 660-5822 <br /><span class="font-size:7px;">Rubenstein Library Research Services</span></div>';

		}

	}
}

/**
 * The "linked_logo_img" needs to be modified to ensure the image's parent
 * link points to 'library.duke.edu'
 */
function dulcet_alpha_process_region(&$variables) {
	#error_log('**** ' . $_SERVER['REQUEST_URI'] . ' ****');
	#error_log('base_path = ' . base_path());

	$variables['dul_hostname'] = isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : $_SERVER['SERVER_NAME'];

	if (in_array($variables['elements']['#region'], array('branding'))) {
	
		#$variables['linked_logo_img'] = $variables['logo'] ? l($variables['logo_img'], base_path(), 
			#array('attributes' => array('rel' => 'home', 'title' => check_plain($variables['site_name'])), 'html' => TRUE)) : '';

		$variables['linked_logo_img'] = $variables['logo'] ? l($variables['logo_img'], 'http://' . $variables['dul_hostname'],
			array('attributes' => array('rel' => 'home', 'title' => check_plain($variables['site_name'])), 'html' => TRUE)) : '';
	}
}
