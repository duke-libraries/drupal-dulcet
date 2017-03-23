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

<?php

drupal_add_js('https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js', array('group' => 101, 'type' => 'external'));
drupal_add_js('https://cdn.datatables.net/plug-ins/1.10.12/sorting/num-html.js', array('group' => 101, 'type' => 'external'));
drupal_add_js('https://cdn.datatables.net/fixedheader/3.1.2/js/dataTables.fixedHeader.min.js', array('group' => 101, 'type' => 'external'));
drupal_add_js('https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js', array('group' => 101, 'type' => 'external'));

drupal_add_css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', array('group' => -101, 'weight' => -1000, 'type' => 'external'));
drupal_add_css('https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css', array('group' => 101, 'type' => 'external'));
drupal_add_css('https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.dataTables.min.css', array('group' => 101, 'type' => 'external'));

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


      <!-- ADOPT CONTENT -->

      <div class="row">

        <div class="col-md-12">

          <hr class="dashed" />
          <br />

          <h2>Adoptable Collections</h2>

          <?php

          ini_set('display_errors', 1);
          ini_set('display_startup_errors', 1);
          error_reporting(E_ALL);

          $theURL = "https://spreadsheets.google.com/feeds/list/1FOIpgxkI5Sm_l8o1qbdnVUUy5m6BTDc7FDLBgFVhAuk/1/public/values?alt=json";
          $context = stream_context_create(array('http' => array('header'=>'Connection: close\r\n')));

          $theJSON = file_get_contents($theURL,false,$context);

          $theData = json_decode($theJSON, TRUE);

          ?>


          <?php

          // Build select list of Groups

          $groupArray = array();

          foreach ($theData['feed']['entry'] as $item) {

            $tempGroups = array_map('trim', explode(';', $item['gsx$group']['$t'])); // break apart by ;

            $tempGroupsCount = count($tempGroups);
            $i = 0;

            while ($tempGroupsCount > $i) {
              if (!in_array($tempGroups[$i], $groupArray)) {

                if ($tempGroups[$i] != "") {

                  $groupArray[] = $tempGroups[$i];

                }

              }
              $i++;
            }

          };

          sort($groupArray, SORT_NATURAL | SORT_FLAG_CASE);

          // Output Subjects select list

            echo '<div class="filters">';
            echo '<p>Filter by Collection Group</p>';
            echo '<form>';
            echo '<select id="select1" aria-label="Select Group">';
              echo '<option value="">-- select a group --</option>';
              foreach ($groupArray as $group) {
                echo '<option value="' . $group . '">' . $group . '</option>';
              }
            echo '</select>';
            echo '</form>';
            echo '</div>';

            echo '<br clear="all" />';

            // reset variables
            unset($tempGroups);

          ?>

          <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered" cellspacing="0">
          <thead>
            <tr>
              <th>Collection Information</th>
              <th>Content</th>
              <th style="white-space:nowrap";>Size (in GB)</th>
              <th>Adopt</th>
              <th>Group</th>
            </tr>
          </thead>
          <tbody>

          <?php

          foreach ($theData['feed']['entry'] as $item) {

          echo '<tr>';

            echo '<td class="description column">';

              echo'<p><a href="' . $item['gsx$url']['$t'] . '" target="_blank">' . $item['gsx$collectionname']['$t'] . '</a></p>'; // name + link
              echo '<p>' . $item['gsx$summary']['$t'] . '</p>'; // description

              if ($item['gsx$managingcenterifapplicable']['$t'] != "") {
                echo '<p class="managing-center">Managing Center: ' . $item['gsx$managingcenterifapplicable']['$t'] . '</p>'; // managing center
              }

            echo '</td>';

            echo '<td class="type column">' . $item['gsx$content']['$t'] . '</td>'; // type
            // echo '<td class="sub-type column">' . $item['gsx$collectionsub-type']['$t'] . '</td>'; // sub-type
            // echo '<td class="access column">' . $item['gsx$access']['$t'] . '</td>'; // access
            echo '<td class="size column">' . number_format((float)$item['gsx$sizegb']['$t']) . '</td>'; // size
            echo '<td class="adopt column">';

              if ($item['gsx$status']['$t'] == "Available") {

                $tempNumber = $item['gsx$roundednumbers']['$t'];

                $tempNumberRounded = ceil($tempNumber / 10) * 10;

                echo '<span class="hidden-numbers">' . $tempNumberRounded . '</span><a href="https://www.gifts.duke.edu/new?designation=6140023' . '&amount=' . number_format($tempNumberRounded) . '&collection=' . str_replace(' ', '', $item['gsx$collectionname']['$t']) . '" target="_blank" class="btn btn-default">Adopt for <span class="money">' . number_format($tempNumberRounded) . '</span></a>';

              } else {

                echo '<span class="hidden-numbers">0</span>Adopted by ' . $item['gsx$adopteenameinformation']['$t'] . '</a>';

              }

            echo '</td>'; // adpot

            echo '<td class="group column">';

              if ($item['gsx$group']['$t'] != "") {

                echo $item['gsx$group']['$t'];

              }

            echo '</td>'; // adpot

          echo '</tr>';

          }

          // reset variables
          unset($tempNumber);
          unset($tempNumberRounded);

          ?>

          </tbody>
          </table>
          </div>

        </div>

      </div>

      <!-- END ADOPT CONTENT -->





    </div>

    <?php require "footer.tpl.php" ?>

  </div> <!-- /#main -->
</div> <!-- /#main-wrapper -->
