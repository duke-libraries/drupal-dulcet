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
      <p class="sidebar-logo"><a href="/rubenstein/"> <img class="rl-logo img-thumbnail" src="<?php print base_path(); ?>sites/default/files/rubenstein/rl-logo-white-border-normal-padded-transp.png" class="rl-logo img-thumbnail menu-thumb" title="David M. Rubenstein Rare Book &amp; Manuscript Library" alt="logo"> </a></p><ul class="nav nav-list"><li class="nav-header nav-header-gray"><a href="/rubenstein/uarchives">University Archives</a></li></ul>
      <!-- / content above menu -->


      <?php print $content ?>

      <div class="sidebar-extras">
        <strong>Connect With Us</strong>
        <div>
          <a href="https://www.facebook.com/dukeuniversityarchives"> <img src="<?php print base_path(); ?>sites/all/themes/madlib/images/icons/facebook24.png" alt="Facebook"> </a><a href="https://www.flickr.com/photos/dukeyearlook/"> <img src="<?php print base_path(); ?>sites/all/themes/madlib/images/icons/flickr24.png" alt="Flickr"> </a> <a href="https://twitter.com/dukeuarchives/"> <img src="<?php print base_path(); ?>sites/all/themes/madlib/images/icons/twitter24.png" alt="Twitter"> </a>
        </div>
      </div>

      <div class="sidebar-extras rl-hours-today">
        <strong>Today's Hours</strong>

        <?php $hours_block = module_invoke('dul_hours', 'block_view', 'upcoming_days-rubenstein') ?>
        <?php print $hours_block['content']?>
      </div>

    </div>
  </div>
</<?php print $tag; ?>>
