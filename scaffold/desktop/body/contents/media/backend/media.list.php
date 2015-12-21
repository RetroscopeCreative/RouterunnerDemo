<?php
$size_l = \model::property("size_l");
if (!$size_l) {
	$size_l = (\runner::config("mode") == "backend" ? "Routerunner/placeholder/800x550" : false);
}
?>
<li class="gl-item gl-loading media-model" data-category="<?php echo \model::property("category"); ?>">
	<div class="rr-post-size_l rr-post-data_l" style="width: 100%;">
		<img src="<?php echo $size_l; ?>" alt="<?php echo \model::property("label"); ?>">
	</div>
</li>
