<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<meta property="dc:publisher" content="Duke University Libraries" />

<?php if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != "/"): ?>
<!--base href="http://<?php echo $dul_hostname . $_SERVER['REQUEST_URI']; ?>"/-->
<?php else: ?>
<!--base href="http://<?php echo $dul_hostname ?>"-->
<?php endif; ?>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]>
   <script>
      document.createElement('header');
      document.createElement('nav');
      document.createElement('section');
      document.createElement('article');
      document.createElement('aside');
      document.createElement('footer');
   </script>
  <![endif]-->


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
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
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
