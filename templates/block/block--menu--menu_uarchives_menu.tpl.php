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
      <p class="sidebar-logo"><a href="/rubenstein/"> <img class="rl-logo img-thumbnail" src="<?php print base_path(); ?>/sites/default/files/rubenstein/rl-logo-white-border-normal-padded-transp.png" class="rl-logo img-thumbnail menu-thumb" title="David M. Rubenstein Rare Book &amp; Manuscript Library"> </a></p><ul class="nav nav-list"><li class="nav-header nav-header-gray"><a href="/rubenstein/uarchives">University Archives</a></li></ul>
      <!-- / content above menu -->
      
      
      <?php print $content ?>

      <div class="sidebar-extras">
        <strong>Connect With Us</strong>
        <div>
          <a href="http://www.facebook.com/dukeuniversityarchives"> <img src="<?php print base_path(); ?>sites/all/themes/madlib/images/icons/facebook24.png" alt=""> </a><a href="http://www.flickr.com/photos/dukeyearlook/"> <img src="<?php print base_path(); ?>sites/all/themes/madlib/images/icons/flickr24.png"> </a> <a href="http://twitter.com/dukeuarchives/"> <img src="<?php print base_path(); ?>sites/all/themes/madlib/images/icons/twitter24.png"> </a>
        </div>
      </div>

    </div>
  </div>
</<?php print $tag; ?>>