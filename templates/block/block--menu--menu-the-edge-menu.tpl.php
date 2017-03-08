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
      <p class="sidebar-logo"><a href="/edge"> <img class="img-thumbnail menu-thumb" src="<?php print base_path(); ?>sites/default/files/dul/the_edge_icon.png" title="The Edge" width="155" style="border:5px solid #ccc;" alt="logo"> </a></p>
      <!-- / content above menu -->


      <?php print $content ?>

      <div class="sidebar-extras">
        <strong>Contact Us</strong>
        <p class="small">
          <a href="mailto:edge@duke.edu">edge@duke.edu</a><br/>
          <a href="https://twitter.com/EdgeDuke"><img src="/data/sites/all/themes/madlib/images/icons/twitter24.png" alt="Twitter"> @EdgeDuke </a>
        </p>
      </div>

    </div>
  </div>
</<?php print $tag; ?>>
