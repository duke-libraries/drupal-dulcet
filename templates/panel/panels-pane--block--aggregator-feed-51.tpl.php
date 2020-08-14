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

<?php

  // Manually inserting a 'sticky' slide as the first item.
  // Also see "Toggle this to turn on sticky slide" below.

  $stickyContent = '<ul id="rotate1"><!-- manually inserting fall 2020 slide --><li class="cycle-slide cycle-slide-active" style="position: static; top: 0px; left: 0px; z-index: 100; opacity: 1; display: block; visibility: hidden; width: 250px;"><a onclick="ga(\'send\', \'event\', { eventCategory: \'dulHome\', eventAction: \'Feature Blog Posts\', eventLabel: \'Item\'});" href="https://library.duke.edu/about/fall2020"><div class="blog-content"><img alt="" class="img-thumbnail" src="https://blogs.library.duke.edu/wp-content/uploads/2020/08/Fall2020_WebsiteGraphic-260x180.jpg"><p>Fall 2020: Everything You Need to Know</p></div></a></li>';

  $updatedContent = str_replace('<li class="first">', '<li>', $content);

  $updatedContent = str_replace('<ul id="rotate1">', $stickyContent, $updatedContent);

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

        <!-- content above block -->

    	<h3><a href="https://blogs.library.duke.edu/">News, Events &amp; Exhibits</a></h3>

    	<a class="left carousel-control" href="#" id="prev">&lsaquo;</a>
    	<!-- / content above block -->

        <div class="cycle-slideshow"
        data-cycle-pause-on-hover="true"
        data-cycle-fx="carousel"
        data-cycle-carousel-visible="2"
        data-cycle-carousel-fluid="true"
        data-cycle-timeout="0"
        data-cycle-speed="1000"
        data-cycle-prev="#prev"
        data-cycle-next="#next"
        data-cycle-carousel-glide="true"
        data-cycle-slides="> div > ul > li">

          <?php // Toggle this to turn on sticky slide ?>
          <?php print render($content); ?>
          <?php //print render($updatedContent);  ?>

        </div>

        <!-- content below block -->
        <a class="right carousel-control" href="#" id="next">&rsaquo;</a>
        <!-- / content below block -->

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
