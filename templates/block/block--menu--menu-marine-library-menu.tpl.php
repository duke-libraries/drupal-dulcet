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

      <div class="sidebar-extras">
        <strong>Contact Us</strong>
        <p class="small">
          135 Duke Marine Lab Rd.<br />
          Beaufort, NC 28516-9721
        </p>
        <p class="small">
          <strong>Phone:</strong> 252-504-7510<br />
          <strong>Fax:</strong> 252-504-7648<br />
          <strong>Email:</strong> <a href="mailto:marlib@duke.edu">marlib@duke.edu</a>
        </p>
        <p class="small">
          <strong>Hours Staffed</strong><br/>
          Mon–Thur: 8:30am&ndash;4pm
        </p>
      </div>


      <!-- / content below menu -->

    </div>
  </div>
</<?php print $tag; ?>>
