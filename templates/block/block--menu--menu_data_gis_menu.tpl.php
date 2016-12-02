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
            <p class="sidebar-logo"><a href="/data"><img src="<?php print base_path(); ?>sites/default/files/datagis/images/data_gis_logo.png" class="img-thumbnail" alt="image" width="155"></a></p><ul class="nav nav-list"><!--<li class="nav-header nav-header-gray"><a href="/data">Data and GIS Services</a></li>--></ul>
        <!-- / content above menu -->
      
      
      <?php print $content ?>
      
      <!-- content below menu -->
            <div class="sideContact" style="margin-bottom:0 !important;">
            	<ul class="nav nav-list list-unstyled">
            		<li class="divider"></li>
            		<li class="nav-header nav-header-gray"><a href="#"> Contact Us </a></li>
            		<li style="font-size: 9pt; font-weight: normal; padding: 6px 0 6px 0;"><a href="mailto:askdata@duke.edu">askdata@duke.edu</a></li>
            		<li style="font-size: 9pt; font-weight: normal;"><a href="/data/about/lab">Data Visualization Lab</a> (in the Edge)</li>
            		<li style="font-size: 9pt; font-weight: normal; padding: 6px 0 6px 0;"><a href="https://twitter.com/duke_data"> <img src="<?php print base_path(); ?>sites/all/themes/madlib/images/icons/twitter24.png" alt=""> @duke_data </a></li>
            	
            	</ul>
            </div>
        <!-- / content below menu -->
    
    </div>
  </div>
</<?php print $tag; ?>>
