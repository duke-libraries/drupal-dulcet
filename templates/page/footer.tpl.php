<?php
?>

<footer id="footer-dulcet" class="container" role="footer">
  <div class="row">
    <div class="col-md-1">
      <a onclick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Branding', eventLabel: 'Library Logo'});" href="http://library.duke.edu"><img alt="Duke University Libraries" src="<?php echo base_path() . drupal_get_path('theme','dulcet') . '/assets/images/devillogo-60pct-60.png'; ?>"></a>
    </div>
    <div class="col-md-2">
      <h4><a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Contact Info', eventLabel: 'Contact Us'});" href="/about/contact">Contact Us</a></h4>
    	<div>
    	  <small><?php print $physical_address; ?></small>
    	</div>
    </div>
    <div class="col-md-4">
      <h4><a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Services', eventLabel: 'Services Portal'});" href="/services">Services for...</a></h4>
        <div class="row">
          <div class="col-md-6">
          	<ul class="list-unstyled">
          		<li><a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Services', eventLabel: 'Faculty Instructors'});" href="/services/faculty">Faculty &amp; Instructors</a></li>
          		<li><a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Services', eventLabel: 'Graduate Students'});" href="/services/graduate">Graduate Students</a></li>
          		<li><a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Services', eventLabel: 'Undergraduate Students'});" href="/services/undergraduate">Undergraduate Students</a></li>
          		<li><a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Services', eventLabel: 'International Students'});" href="/services/international">International Students</a></li>
          	</ul>
          </div>
          <div class="col-md-6">
          	<ul class="list-unstyled">
          		<li><a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Services', eventLabel: 'Alumni'});" href="/services/alumni">Alumni</a></li>
          		<li><a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Services', eventLabel: 'Donors'});" href="/services/donors">Donors</a></li>
          		<li><a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Services', eventLabel: 'Visitors'});" href="/services/visitors">Visitors</a></li>
          		<li><a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Services', eventLabel: 'Patrons with Disabilities'});" href="/services/disabilities">Patrons with Disabilities</a></li>
          	</ul>
          </div>
        </div>
    </div>
    <div class="col-md-3">
      <div class="social-media-icons">

      	<a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Social', eventLabel: 'Twitter'});" href="https://twitter.com/DukeLibraries" title="Twitter"><div class="twitter"></div></a>

      	<a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Social', eventLabel: 'Facebook'});" href="https://www.facebook.com/dukelibraries" title="Facebook"><div class="facebook"></div></a>

      	<a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Social', eventLabel: 'Youtube'});" href="http://www.youtube.com/user/DukeUnivLibraries" title="Youtube"><div class="youtube"></div></a>

      	<a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Social', eventLabel: 'Flickr'});" href="http://www.flickr.com/photos/dukeunivlibraries/" title="Flickr"><div class="flickr"></div></a>

      	<a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Social', eventLabel: 'Instagram'});" href="https://instagram.com/dukelibraries" title="Instagram"><div class="instagram"></div></a>

      	<a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Social', eventLabel: 'RSS'});" href="http://blogs.library.duke.edu/" title="RSS"><div class="rss"></div></a>

      </div>

      <div class="newsletter-signup">
        <a href="/about/sign-our-newsletter" onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Social', eventLabel: 'Email List'});">Join Our Email List</a>
      </div>

      <ul class="list-unstyled">
      	<li><a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Links', eventLabel: 'Re-use and Attribution'});" href="/about/reuse-attribution">Re-use &amp; Attribution</a> / <a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Links', eventLabel: 'Privacy'});" href="/about/privacy">Privacy</a></li>
      	<li><a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Links', eventLabel: 'Support the Libraries'});" href="/support">Support the Libraries</a></li>
      </ul>
      <a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Links', eventLabel: 'Creative Commons'});" rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.en_US" ><img alt="Creative Commons License" style="border-width:0" src="https://licensebuttons.net/l/by-nc-sa/3.0/80x15.png" title="This work is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License" /></a>
    </div>
    <div class="col-md-2">
      <div id="duke-logo">
      	<a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Branding', eventLabel: 'Duke Logo'});" href="http://www.duke.edu"><img src="<?php echo base_path() . drupal_get_path('theme','dulcet') . '/assets/images/dukelogo_vert_60pct_140.png'; ?>" /></a>
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
      <div>
        <small><a class="drupal-shib-login" href="<?php print $signin; ?>">Drupal Sign In</a></small>
      </div>
    </div>
  </div>
</footer>
