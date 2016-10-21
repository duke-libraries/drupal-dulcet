<?php
/**
 * CSS notes:
 * ================
 * .region-footer-second is the root CSS selector (and wrapper) for elements that appear
 * in this region
 *
 * .region-footer-second-inner is the "inner" element
 */
?>
<div<?php print $attributes; ?>>
	<a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Branding', eventLabel: 'Library Logo'});" href="http://library.duke.edu"><img alt="Duke University Libraries" src="<?php echo base_path() . drupal_get_path('theme','madlib') . '/images/devillogo-60pct-60.png'; ?>" /></a>
  <div<?php print $content_attributes; ?>>
    <?php print $content; ?>
  </div>
</div>
