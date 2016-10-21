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
      <p class="sidebar-logo"><a href="/rubenstein/"> <img class="rl-logo" src="<?php print base_path(); ?>/sites/default/files/rubenstein/rl-logo-white-border-normal-padded-transp.png" class="rl-logo menu-thumb" title="David M. Rubenstein Rare Book &amp; Manuscript Library"> </a></p><ul class="nav nav-list"><li class="nav-header nav-header-gray"><a href="/rubenstein/human-rights">Human Rights Archive</a></li></ul>
      <!-- / content above menu -->
      
      
      <?php print $content ?>
      
      <!-- content below menu -->
      <!-- <ul class="nav nav-list unstyled"><li class="divider"></li><li class="nav-header">Connect With Us</li></ul><div> <a href="http://www.flickr.com/photos/dukeunivlibraries/sets/72157626835680449/"> <img src="/sites/all/themes/madlib/images/icons/flickr24.png" alt=""> </a></div>-->
      
      <ul class="nav nav-list unstyled"><li class="divider"></li></ul>

      <div style="text-align:center; padding: 10px;">
      <a href="https://www.gifts.duke.edu/fund?additional_designations=Human+Rights+Archive+3940470" target="_blank"><button style="width:100%;" class="btn btn-large btn-primary">Give Now</button></a>
      </div>

      <!-- / content below menu -->
    
    </div>
  </div>
</<?php print $tag; ?>>