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
      <p class="sidebar-logo"><a href="/research/commons"> <img class="rl-logo img-thumbnail" src="<?php print base_path(); ?>sites/default/files/dul/rc_icon.jpg" class="rl-logo img-thumbnail menu-thumb" title="Research Commons" width="155" style="border:5px solid #ccc;"> </a></p><ul class="nav nav-list"><li class="nav-header nav-header-gray"><a href="/research/commons">Research Commons</a></li></ul>
      <!-- / content above menu -->
      
      
      <?php print $content ?>

      <div class="sidebar-extras">
        <strong><a href="/research/commons">Contact Us</a></strong>
        <p class="small">
          <a href="mailto:research-commons@duke.edu"> research-commons@duke.edu </a>
        </p>
      </div>
    
    </div>
  </div>
</<?php print $tag; ?>>