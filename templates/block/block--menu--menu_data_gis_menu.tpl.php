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
            <p class="sidebar-logo"><a href="/data"><img src="<?php print base_path(); ?>sites/default/files/datagis/images/CDVS-logo_sm_Spring2020.png" class="img-thumbnail" alt="image" width="155" alt="logo"></a></p>
        <!-- / content above menu -->


      <?php print $content ?>

      <div class="sidebar-extras">
        <strong>Contact Us</strong>
        <p class="small">
          <a href="mailto:askdata@duke.edu">askdata@duke.edu</a><br/>
          <a href="https://mailchi.mp/a9a3951c4e1b/cdvs-newsletter-signup">Mailing list signup</a><br/>
          <a href="https://twitter.com/duke_data"><img src="<?php print base_path(); ?>sites/all/themes/madlib/images/icons/twitter24.png" alt="Twitter"> @duke_data</a>
        </p>
      </div>

    </div>
  </div>
</<?php print $tag; ?>>
