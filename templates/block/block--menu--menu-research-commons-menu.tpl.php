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
      <p class="sidebar-logo"><a href="/research/commons"> <img class="rl-logo" src="<?php print base_path(); ?>sites/default/files/dul/rc_icon.jpg" class="rl-logo menu-thumb" title="Research Commons" width="155" style="border:5px solid #ccc;"> </a></p><ul class="nav nav-list"><li class="nav-header nav-header-gray"><a href="/research/commons">Research Commons</a></li></ul>
      <!-- / content above menu -->
      
      
      <?php print $content ?>
      
      <!-- content below menu -->
          <div class="sideContact">
          	<ul class="nav nav-list list-unstyled">
          		<li class="divider"></li>
          		<li class="nav-header nav-header-gray"><a href="/research/commons"> Contact Us </a></li>
          		<li style="font-size: 9pt; font-weight: normal;"><a href="mailto:research-commons@duke.edu"> research-commons@duke.edu </a></li>
          	</ul>
          </div>
      <!-- / content below menu -->
    
    </div>
  </div>
</<?php print $tag; ?>>