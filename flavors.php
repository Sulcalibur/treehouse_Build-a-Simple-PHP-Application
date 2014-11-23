<?php	$flavors = array ("Chocolate","Vanilla","Strawberry","Cookie Dough"); ?>
<p>Welcome to Ye Olde Ice Cream Shoppe. <?php echo "We sell " . count($flavors); ?> flavors of ice cream.</p>

<ul>
	<?php foreach($flavors as $flavor) {?>
	<li><?php echo $flavor; ?></li>
	<?php } ?>
</ul>