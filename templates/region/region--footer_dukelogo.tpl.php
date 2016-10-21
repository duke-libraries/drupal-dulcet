<?php
/**
 * CSS notes:
 * ================
 * .region-footer-first is the root CSS selector (and wrapper) for elements that appear
 * in this region
 *
 * .region-footer-first-inner is the "inner" element
 */
?>
<div<?php print $attributes; ?>>
	<a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Branding', eventLabel: 'Duke Logo'});" href="http://www.duke.edu"><img src="<?php echo base_path() . drupal_get_path('theme','madlib') . '/images/dukelogo_vert_60pct_140.png'; ?>" class="dukeLogo" /></a>
  <div<?php print $content_attributes; ?>>
    <?php print $content; ?>
  </div>
</div>

<?php
	# retrieve the server (host) name from the environment
	# and use it as the href to the "Drupal Sign In" button (using the HTTPS protocol)
	$signin = 'https://' . $_SERVER['SERVER_NAME'];
	if (preg_match('/^\/east/', base_path()) == 1) {
		# determine 'lilly' or 'music'
		$uri_match = array();

		if (preg_match('/^\/(lilly|music)(\/.*)?$/', $_SERVER['REQUEST_URI'], $uri_match) == 1) {
			$signin .= '/' . $uri_match[1];
		}
	} else {
		$signin .= preg_replace('/(\/)$/', '', base_path());
	}	
?>
<!--div class="footer-signin">
	<p><a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Utility', eventLabel: 'Drupal Sign In'});" href="<?php print $signin; ?>" rel="noindex, nofollow">Drupal Sign In</a></p>
</div-->
