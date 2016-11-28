<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>

<?php /* SCA: removed the default Radix header
  <header id="header" class="header" role="header">...</header>
*/
?>
<div id="main-wrapper">
  
  <div id="main" class="main">
    <div class="container">
      <?php require "js_masthead.tpl.php" ?> <!-- SCA: Added -->
      <?php drupal_add_js('//library.duke.edu/masthead/load-masthead.js.php?fixed=false&width=1280', 'external'); ?>


      <?php if ($page['breadcrumb']): ?> <!-- SCA: ADDED this to render breadcrumb if present -->
        <?php print render($page['breadcrumb']); ?>
      <?php endif; ?>

      <?php if ($messages): ?>
        <div id="messages">
          <?php print $messages; ?>
        </div>
      <?php endif; ?>
      <div id="page-header">
        <?php if ($title): ?>
          <div class="page-header">
            <h1 class="title" id="page-title"><?php print $title; ?></h1>
          </div>
        <?php endif; ?>
        <?php if ($tabs): ?>
          <div class="tabs">
            <?php print render($tabs); ?>
          </div>
        <?php endif; ?>
        <?php if ($action_links): ?>
          <ul class="action-links">
            <?php print render($action_links); ?>
          </ul>
        <?php endif; ?>
      </div>

    </div>
    <div id="content" class="container"> 
      <?php if ($page['sidebar_first']): ?> <!-- SCA: ADDED this to render sidebar template if present -->
        <div class="row">
          <div class="col-md-10 pull-right"> <!-- Put main content first for mobile & screen readers -->
            <?php print render($page['content']); ?>
          </div>
          <div id="sidebar-first" class="column sidebar col-md-2 pull-left">
            <div class="section">
                <?php print render($page['sidebar_first']); ?>
            </div>
          </div>
        </div>
      <?php else: ?>
          <?php print render($page['content']); ?>
      <?php endif; ?>
    </div>

    <?php require "footer.tpl.php" ?>
    
  </div> <!-- /#main -->
</div> <!-- /#main-wrapper -->
