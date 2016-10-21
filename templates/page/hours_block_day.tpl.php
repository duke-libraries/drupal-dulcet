<?php
?>
<div class="hours-row<?php echo $item->isCurrentDay ? ' hours-today' : ''; ?>">
	<span class="day"><?php echo $item->libraryDate['dayAndDate']; ?></span>
	<span class="hours"><?php echo $item->hours_encoded; ?></span>
	<?php if(!empty($public_item)): ?>
		<?php if(variable_get('dul_hours.publichours_cardaccess_url', '') != ''): ?>
		<div class="genpublic"><a href="<?php print variable_get('dul_hours.publichours_cardaccess_url'); ?>">Public</a>: <?php echo $public_item->hours; ?></div>
		<?php else: ?>
		<div class="genpublic">Public: <?php echo $public_item->hours_encoded; ?></div>
		<?php endif; ?>
	<?php endif; ?>
</div>
