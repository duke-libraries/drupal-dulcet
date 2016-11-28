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
      <p class="sidebar-logo"><a href="/edge"> <img class="rl-logo" src="<?php print base_path(); ?>sites/default/files/dul/the_edge_icon.png" class="rl-logo menu-thumb" title="The Edge" width="155" style="border:5px solid #ccc;"> </a></p>
      <!-- / content above menu -->


      <?php print $content ?>

      <!-- content below menu -->
          <div class="sideContact">
          	<ul class="nav nav-list list-unstyled">
          		<li class="divider"></li>
          		<li class="nav-header nav-header-gray">Contact Us</li>
          		<li style="font-size: 9pt; font-weight: normal;"><a href="mailto:edge@duke.edu"> edge@duke.edu </a></li>
                <li style="font-size: 9pt; font-weight: normal; padding: 6px 0 6px 0;"><a href="https://twitter.com/EdgeDuke"> <img src="/data/sites/all/themes/madlib/images/icons/twitter24.png" alt=""> @EdgeDuke </a></li>
          	</ul>
          </div>
      <!-- / content below menu -->

    </div>
  </div>
</<?php print $tag; ?>>
