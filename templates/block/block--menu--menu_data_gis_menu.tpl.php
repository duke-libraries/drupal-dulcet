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
            <p class="sidebar-logo"><a href="/data"><img src="<?php print base_path(); ?>sites/default/files/datagis/images/data_gis_logo.png" class="img-thumbnail" alt="image" width="155" alt="logo"></a></p><ul class="nav nav-list"><!--<li class="nav-header nav-header-gray"><a href="/data">Data and GIS Services</a></li>--></ul>
        <!-- / content above menu -->


      <?php print $content ?>

      <div class="sidebar-extras">
        <strong>Contact Us</strong>
        <p class="small">
          <a href="mailto:askdata@duke.edu">askdata@duke.edu</a><br/>
          <a href="https://duke.qualtrics.com/jfe/form/SV_8GEQBCQOfUAb1s1">Contact Form</a><br/>
          <a href="https://lists.duke.edu/sympa/subscribe/dvs-announce">Mailing List</a><br/>
          <a href="https://twitter.com/duke_data"><img src="<?php print base_path(); ?>sites/all/themes/madlib/images/icons/twitter24.png" alt="Twitter"> @duke_data</a>
        </p>
      </div>

    </div>
  </div>
</<?php print $tag; ?>>
