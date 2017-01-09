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
            <p class="sidebar-logo"><a href="/research/humanities"><img src="<?php print base_path(); ?>sites/default/files/dul/humanities/humanities_logo.jpg" class="img-thumbnail" alt="image" width="155"></a></p><ul class="nav nav-list"><li class="nav-header nav-header-gray"><a href="/research/humanities">Humanities Research</a></li></ul>
        <!-- / content above menu -->


      <?php print $content ?>

    </div>
  </div>
</<?php print $tag; ?>>
