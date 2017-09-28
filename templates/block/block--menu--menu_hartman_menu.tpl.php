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
      <p class="sidebar-logo"><a href="/rubenstein/"> <img class="rl-logo img-thumbnail" src="<?php print base_path(); ?>sites/default/files/rubenstein/rl-logo-white-border-normal-padded-transp.png" class="rl-logo img-thumbnail menu-thumb" title="David M. Rubenstein Rare Book &amp; Manuscript Library" alt="logo"> </a></p><ul class="nav nav-list"><li class="nav-header nav-header-gray"><a href="/rubenstein/hartman" class="small">John W. Hartman Center for Sales, Advertising &amp; Marketing History</a></li></ul>
      <!-- / content above menu -->


      <?php print $content ?>


      <div class="sidebar-extras">
        <strong>Connect With Us</strong>
        <div>
          <a href="https://www.facebook.com/hartmancenter/"> <img src="<?php print base_path(); ?>sites/all/themes/madlib/images/icons/facebook24.png" alt="Facebook"> </a>
          <a href="https://twitter.com/hartmancenter"> <img src="<?php print base_path(); ?>sites/all/themes/madlib/images/icons/twitter24.png" alt="Twitter"> </a>
        </div>

        <ul class="nav nav-list list-unstyled"><li class="divider"></li></ul>
        <div style="text-align:center;">
          <a href="https://www.gifts.duke.edu/fund?additional_designations=John%20W%20Hartman%20Center%203942975" target="_blank"><button style="width:100%;" class="btn btn-primary">Give Now</button></a>
        </div>
      </div>

    </div>
  </div>
</<?php print $tag; ?>>
