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
      <p  class="sidebar-logo">
      <div class="cycle-slideshow">
      <img src="<?php print base_path(); ?>sites/default/files/dul/support/sqfoto5.jpg" alt="Support the Libraries!"> <img src="<?php print base_path(); ?>sites/default/files/dul/support/sqfoto1.jpg" alt="Support the Libraries!"> <img src="<?php print base_path(); ?>sites/default/files/dul/support/sqfoto6.jpg" alt="Support the Libraries!"> <img src="<?php print base_path(); ?>sites/default/files/dul/support/sqfoto4.jpg" alt="Support the Libraries!"> <img src="<?php print base_path(); ?>sites/default/files/dul/support/sqfoto7.jpg" alt="Support the Libraries!"> <img src="<?php print base_path(); ?>sites/default/files/dul/support/sqfoto2.jpg" alt="Support the Libraries!"> <img src="<?php print base_path(); ?>sites/default/files/dul/support/sqfoto3.jpg" alt="Support the Libraries!"> <img src="<?php print base_path(); ?>sites/default/files/dul/support/sqfoto8.jpg" alt="Support the Libraries!">
      </div>
      </p>

      <ul class="nav nav-list"><li class="nav-header nav-header-gray"><a href="/support">Support the Libraries</a></li></ul>

      <!-- / content above menu -->


      <?php print $content ?>


      <div class="sidebar-extras">
        <div style="text-align:center;">
        <a href="https://www.gifts.duke.edu/library" target="_blank"><button style="width:100%;" class="btn btn-primary">Give Now</button></a>
        </div>
      </div>

    </div>
  </div>
</<?php print $tag; ?>>
