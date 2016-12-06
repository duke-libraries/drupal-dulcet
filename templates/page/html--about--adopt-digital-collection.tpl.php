<?php // print $doctype; ?>
<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>

	<meta property="dc:publisher" content="Duke University Libraries" />

	<?php if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != "/"): ?>
	<!--base href="http://<?php echo $dul_hostname . $_SERVER['REQUEST_URI']; ?>"/-->
	<?php else: ?>
  <!--base href="http://<?php echo $dul_hostname ?>"-->
	<?php endif; ?>

  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<style>
    .type,
    .sub-type,
    .access,
    .size,
    .adopt {
      text-align: center;
    }

    .hidden-numbers {
      display: none;
    }

    .money::before {
      content: "$";
    }

    .managing-center {
      font-style: italic;
    }

		.dataTable .description p {
			font-size: 14px;
		}

		#example th,
		.fixedHeader-floating th {
			background: rgba(221, 221, 221, .75) !important;
		}

		/* fix footer spacing */

		@media (min-device-width: 740px) and (min-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation: landscape) {
			#zone-footer {
			    max-width: 720px;
			}
		}

		@media (min-device-width: 980px) and (min-width: 980px), (max-device-width: 1024px) and (min-width: 1024px) and (orientation: landscape) {
			#zone-footer {
	    	max-width: 960px;
			}
		}

		@media (min-width: 1220px) {
			#zone-footer {
			    max-width: 1200px;
			}
		}



  </style>

</head>
<body<?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <div class="print-logo">
  	<img src="/sites/all/themes/madlib/images/library_logo_print.png" alt="">
  </div>

  <div class="print-path">
  	<?php print 'http://library.duke.edu/'.drupal_get_path_alias(current_path()); ?>
  </div>

  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

	<script type="text/javascript">

	  (function ($) {

	    $('#example').DataTable( {
				  "fixedHeader": true,
					"paging":   false,
	        "iDisplayLength": 5,
	        "lengthMenu": [ 5, 10, 20, 50, 100 ],
	        "info":     false,
	        "responsive": true,
	        columnDefs: [
	          { type: 'num-html', targets: 3 },
	          { "targets": [ 1, 4 ], "visible": false, "searchable": true},
	        ]
	    } );

	    var oTable;
	    oTable = $('#example').dataTable();

	    $('#select1').change( function() {
	        oTable.fnFilter( $(this).val());
	    });

	}) (jQuery);

	</script>


</body>
</html>
