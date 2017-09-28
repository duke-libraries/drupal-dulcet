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
      <p class="sidebar-logo"><a href="/lilly"> <img src="<?php print base_path(); ?>sites/default/files/east/lilly-other/lilly035A.jpg" class="img-thumbnail" alt="logo"> </a></p><ul class="nav nav-list"><li class="nav-header nav-header-gray"><a href="/lilly"> Lilly Library </a></li></ul>
      <!-- / content above menu -->


      <?php print $content ?>

      <div class="sidebar-extras">
        <strong><a href="/lilly/about/contact">Contact Us</a></strong>
        <p class="small">
          (919) 660-5995<br />
          <a href="mailto:lilly-requests@duke.edu">lilly-requests@duke.edu</a>
        </p>
        <strong>Connect With Lilly</strong>
        <div>
          <a href="https://twitter.com/LillyLibDuke"> <img src="<?php print base_path(); ?>sites/all/themes/madlib/images/icons/twitter24.png" alt="Twitter"> </a>
          <a href="https://www.facebook.com/LillyLibraryDuke"> <img src="<?php print base_path(); ?>sites/all/themes/madlib/images/icons/facebook24.png" alt="Facebook"> </a>
          <a href="https://instagram.com/lillylibduke"> <img src="<?php print base_path(); ?>sites/all/themes/madlib/images/icons/instagram24.png" alt="Instagram"> </a>
        </div>
      </div>

  </div>
</<?php print $tag; ?>>
