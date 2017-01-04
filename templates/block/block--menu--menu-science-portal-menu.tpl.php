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
            <p class="sidebar-logo"><a href="/research/science"><img src="<?php print base_path(); ?>sites/default/files/dul/science/science_logo.jpg" class="img-thumbnail menu-thumb" alt="image" width="155"></a></p><ul class="nav nav-list"><li class="nav-header nav-header-gray"><a href="/research/science">Science Research</a></li></ul>
        <!-- / content above menu -->


      <?php print $content ?>

      <div class="sidebar-extras">
        <strong>Contact Us</strong>
        <p class="small">
          <a href="mailto:askscience@duke.edu">askscience@duke.edu</a>
        </p>
      </div>

    </div>
  </div>
</<?php print $tag; ?>>
