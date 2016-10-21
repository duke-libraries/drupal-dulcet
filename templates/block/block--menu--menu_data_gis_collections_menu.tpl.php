<?php

$searchString = "";

if (isset($_GET['search'])) {
	$searchString = $_GET['search'];
}

?>

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
	
	<style>
	
	div.exhibit-text-facet {margin-bottom: 20px; background-color: #f2f0eb;	padding: 3px; border: 1px solid #dbd8d0;}
	div.exhibit-facet-header, div.exhibit-flowingFacet-header { color: white; background: url(http://library.duke.edu/imgs/blue-note/tabularheaderback.jpg) repeat-x #2e3b81; padding: 5px 2px 5px 3px; border-top: 1px solid white; border-bottom: 1px solid white; -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5); -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);}
	
	</style>
	
	<div class="exhibit-facet-header ">
		<span class="bold">Search the Collections:</span>
	</div>	
	
	<div facetclass="TextSearch" role="facet" id="search-facet" ex:query="<?php echo str_replace("+"," ",$searchString); ?>">
	
	<div class="exhibit-text-facet"> 
		
		<form action="/data/collections" id="search-datagis">
			
			<input align="bottom" type="text" name="search" id="search" style="width:70% !important;" value="<?php echo str_replace("+"," ",$searchString); ?>">
			
			<input style="width:20% !important;" type="submit" class="" id="search-submit" value="GO" />
		
		</form>
	
	</div>
	
	</div>
            
	<!-- / content above menu -->
      
      
      <?php print $content ?>
      
	<!-- content below menu -->
    
    
	<!-- / content below menu -->
    
    </div>
  </div>
</<?php print $tag; ?>>