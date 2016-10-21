<?php
	/**
	 * In addition to the existing template variables
	 * the following have been added:
	 *
	 * - $library_address
	 *   =================
	 *   contains HTML markup representing the address entered
	 *   through the following path:
	 *   /admin/config/library/address
	 *
	 *   Use the php 'print' function to include this value,
	 *   similar to the 'print' statement below that prints the $content_attributes
	 *
	 * see region.tpl.php
	 */
?>
<div<?php print $attributes; ?>>
	<h3><a onClick="ga('send', 'event', { eventCategory: 'Footer', eventAction: 'Contact Info', eventLabel: 'Contact Us'});" href="/about/contact">Contact Us</a></h3>
	<div class="perkinsAddress">
	<?php print $physical_address; ?>
	<!--
	411 Chapel Drive<br />Durham, NC 27708<br />
	<div style="margin-top:5px">(919) 660-5870<br /><span class="font-size:7px;">Perkins Library Service Desk</span></div-->
	</div>
  <div<?php print $content_attributes; ?>>
    <?php print $content; ?>
  </div>
  
</div>

