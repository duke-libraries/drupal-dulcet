<?php
/**
 * @file panels-pane.tpl.php
 * Main panel pane template
 *
 * Variables available:
 * - $pane->type: the content type inside this pane
 * - $pane->subtype: The subtype, if applicable. If a view it will be the
 *   view name; if a node it will be the nid, etc.
 * - $title: The title of the content
 * - $content: The actual content
 * - $links: Any links associated with the content
 * - $more: An optional 'more' link (destination only)
 * - $admin_links: Administrative links associated with the content
 * - $feeds: Any feed icons or associated with the content
 * - $display: The complete panels display object containing all kinds of
 *   data including the contexts and all of the other panes being displayed.
 */
?>
<?php if ($pane_prefix): ?>
  <?php print $pane_prefix; ?>
<?php endif; ?>
<div class="<?php print $classes; ?>" <?php print $id; ?>>
  <?php if ($admin_links): ?>
    <?php print $admin_links; ?>
  <?php endif; ?>

  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($feeds): ?>
    <div class="feed">
      <?php print $feeds; ?>
    </div>
  <?php endif; ?>

  <div class="pane-content">

        <!-- content above menu -->
            <p><a href="#"> <img src="<?php print base_path(); ?>sites/default/files/east/music/music-library-windows.jpg" class="img-thumbnail"> </a></p><ul class="nav nav-list"><li class="nav-header nav-header-gray"><a href="#"> Music Library </a></li></ul>
        <!-- / content above menu -->
    
    <?php print render($content); ?>
    
        <!-- content below menu -->
            <div class="sideContact"><ul class="nav nav-list list-unstyled"><li class="divider"></li><li class="nav-header nav-header-gray"><a href="#"> Contact Us </a></li><li style="font-size: 9pt; font-weight: normal; padding: 3px;">(919) 660-5950</li><li style="font-size: 9pt; font-weight: normal;"><a href="#"> music-requests@duke.edu </a></li></ul></div><ul class="nav nav-list list-unstyled"><li class="nav-header">Connect With Music</li></ul><div><a href="http://twitter.com/DukeMusicLib"> <img src="<?php print base_path(); ?>sites/all/themes/madlib/images/icons/twitter24.png" alt=""> </a> <a href="https://www.facebook.com/DukeMusicLibrary"> <img src="<?php print base_path(); ?>sites/all/themes/madlib/images/icons/facebook24.png" alt=""> </a></div>
        <!-- / content below menu -->
        
  </div>

  <?php if ($links): ?>
    <div class="links">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

  <?php if ($more): ?>
    <div class="more-link">
      <?php print $more; ?>
    </div>
  <?php endif; ?>
</div>
<?php if ($pane_suffix): ?>
  <?php print $pane_suffix; ?>
<?php endif; ?>
