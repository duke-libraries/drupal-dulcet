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
            <p class="sidebar-logo"><a href="/music"> <img src="<?php print base_path(); ?>sites/default/files/east/music/music-library-windows.jpg" class="img-thumbnail menu-thumb" alt="Music Library"> </a></p><ul class="nav nav-list"><li class="nav-header nav-header-gray"><a href="/music"> Music Library </a></li></ul>
        <!-- / content above menu -->
      
      
      <?php print $content ?>
      
      <!-- content below menu -->
          <div class="sideContact"><ul class="nav nav-list list-unstyled"><li class="divider"></li><li class="nav-header nav-header-gray"><a href="/music/about/contact"> Contact Us </a></li><li style="font-size: 9pt; font-weight: normal; padding: 3px;">(919) 660-5950</li><li style="font-size: 9pt; font-weight: normal;"><a href="mailto:music-requests@duke.edu"> music-requests@duke.edu </a></li></ul></div><ul class="nav nav-list list-unstyled"><li class="nav-header">Connect With Music</li></ul><div><a href="http://twitter.com/DukeMusicLib"> <img src="<?php print base_path(); ?>sites/all/themes/madlib/images/icons/twitter24.png" alt=""> </a> <a href="https://www.facebook.com/DukeMusicLibrary"> <img src="<?php print base_path(); ?>sites/all/themes/madlib/images/icons/facebook24.png" alt=""> </a></div>
      <!-- / content below menu -->
    
    </div>
  </div>
</<?php print $tag; ?>>