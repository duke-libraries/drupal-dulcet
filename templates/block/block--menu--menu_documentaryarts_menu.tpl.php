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
      <p class="sidebar-logo"><a href="/rubenstein/"> <img class="rl-logo img-thumbnail" src="<?php print base_path(); ?>sites/default/files/rubenstein/rl-logo-white-border-normal-padded-transp.png" class="rl-logo img-thumbnail menu-thumb" title="David M. Rubenstein Rare Book &amp; Manuscript Library"> </a></p><ul class="nav nav-list"><li class="nav-header nav-header-gray"><a href="/rubenstein/documentaryarts">Archive of Documentary Arts</a></li></ul>
      <!-- / content above menu -->
      
      
      <?php print $content ?>
      

      <div class="sidebar-extras">
        <div style="text-align:center;">
        <a href="https://www.gifts.duke.edu/fund?additional_designations=Archive+of+Documentary+Arts+3942953" target="_blank"><button style="width:100%;" class="btn btn-lg btn-primary">Give Now</button></a>
        </div>
      </div>

    </div>
  </div>
</<?php print $tag; ?>>