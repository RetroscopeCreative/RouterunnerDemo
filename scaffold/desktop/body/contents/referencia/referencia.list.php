<div class="shot">
	<h5><?php echo \model::property("label"); ?></h5>
	<a href="<?php echo \model::property("size_l"); ?>" class="prop-size-m" data-lightbox-gallery="screenshots-gallery">
		<img src="<?php echo \model::property("size_m"); ?>" alt="Screenshot">
	</a>
	<div class="prop-description">
		<?php echo \model::property("description"); ?>
	</div>
	<?php
	if (\model::property("icon")) {
	?>
	<p><a href="<?php echo \model::property("link"); ?>" target="_blank"><?php echo \model::property("link"); ?></a></p>
	<?php
	}
	?>
</div>
