<?php $tag = $block->subject ? 'section' : 'div'; ?>
<<?php print $tag; ?><?php print $attributes; ?>>
  <div class="block-inner clearfix">
    <?php print render($title_prefix); ?>
    <?php if ($block->subject): ?>
      <h2<?php print $title_attributes; ?>><?php print $block->subject; ?></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <div class="shaded-column-left" <?php print $content_attributes; ?>>

      <!-- content above menu -->

      <p class="sidebar-logo"><img src="<?php print base_path(); ?>sites/default/files/dul/marine/fish.jpg" width="155" alt="Pearse Memorial Library" style="border:5px solid #ccc;"></p>

      <ul class="nav nav-list"><li class="nav-header nav-header-gray"><a href="/marine">Pearse Memorial Library, Duke University Marine Laboratory</a></li></ul>

      <!-- / content above menu -->


      <?php print $content ?>

      <!-- content below menu -->

      <ul class="nav nav-list unstyled">

      <li class="divider"></li>

      <li class="nav-header">Contact Us</li>

      <li class="smalltext">
		135 Duke Marine Lab Rd.<br />
		Beaufort, NC 28516-9721</li>
      <li class="smalltext"><strong>Phone:</strong> 252-504-7510<br />
		<strong>Fax:</strong> 252-504-7648<br />
		<strong>Email:</strong>&nbsp;<a href="mailto:marlib@duke.edu">marlib@duke.edu</a></li>
      <li class="nav-header">Hours Staffed</li>
      <li class="smalltext">Mon–Thur: 8:30am&ndash;4pm</li>
      </ul>

      <!-- / content below menu -->

    </div>
  </div>
</<?php print $tag; ?>>
