<?php
?>

<aside class="feature-box pull-right col-sm-3">
<?php if(isset($title)): ?>
<div class="feature-box-title">
	<?php print $title ?>
</div>
<?php endif; ?>

<div class="feature-box-content">	
	<?php echo $body; ?>
</div>

</aside>
