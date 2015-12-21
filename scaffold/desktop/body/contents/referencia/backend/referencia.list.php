<div class="referencia-shot col-md-6">
	<h5><?php echo \model::property("label"); ?></h5>
	<a href="javascript:;" class="prop-size-m">
		<img src="<?php echo \model::property("size_m"); ?>" alt="<?php echo \model::property("label"); ?>" style="width: 370px; height: 255px;">
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
