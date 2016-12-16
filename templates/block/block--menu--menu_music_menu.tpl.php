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


      <div class="sidebar-extras">
        <strong><a href="/music/about/contact">Contact Us</a></strong>
        <p class="small">
          (919) 660-5950<br />
          <a href="mailto:music-requests@duke.edu">music-requests@duke.edu</a>
        </p>
        <strong>Connect With Music</strong>
        <div>
          <a href="http://twitter.com/DukeMusicLib">
            <img src="<?php print base_path(); ?>sites/all/themes/madlib/images/icons/twitter24.png" alt="">
          </a>
          <a href="https://www.facebook.com/DukeMusicLibrary">
            <img src="<?php print base_path(); ?>sites/all/themes/madlib/images/icons/facebook24.png" alt="">
          </a>
        </div> 
      </div>


    </div>
  </div>
</<?php print $tag; ?>>