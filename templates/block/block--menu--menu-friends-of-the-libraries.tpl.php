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
      <img src="<?php print base_path(); ?>sites/default/files/dul/support/Friends_Duke_Libraries_Logo_Page_3.jpg">
      
      <br /><hr />
      
      
      <!-- / content above menu -->
      
      
      <?php print $content ?>
      
      <!-- content below menu -->
      
      
      <!-- / content below menu -->

    </div>
  </div>
</<?php print $tag; ?>>