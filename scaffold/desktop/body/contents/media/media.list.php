<?php
/*
$size_m = \model::property("size_m");
if (!$size_m) {
	$size_m = (\runner::config("mode") == "backend" ? "Routerunner/placeholder/700x471" : false);
}
*/
$size_l = \model::property("size_l");
if (!$size_l) {
	$size_l = (\runner::config("mode") == "backend" ? "Routerunner/placeholder/800x550" : false);
}
?>
<li class="gl-item gl-loading media-model" data-category="<?php echo \model::property("category"); ?>">
	<a href="#">
		<figure class="rr-post-size_l rr-post-data_l">
			<img src="<?php echo $size_l; ?>" alt="<?php echo \model::property("label"); ?>">
			<figcaption>
				<div class="middle"><div class="middle-inner">
						<p class="gl-item-title"><?php echo \model::property("label"); ?></p>
						<p class="gl-item-category"><?php echo \model::property("category"); ?></p>
					</div></div>
			</figcaption>
		</figure>
	</a>
	<div class="gl-preview" style="diplay:none;">
		<span class="glp-arrow"></span>
		<a href="#" class="glp-close"></a>
		<div class="row gl-preview-container">
			<div class="col-sm-8">
				<figure>
					<img src="<?php echo $size_l; ?>" alt="">
					<a href="<?php echo $size_l; ?>" class="glp-zoom"></a>
				</figure>
			</div>
			<div class="col-sm-4 lg-preview-descr">
				<h4><?php echo \model::property("label"); ?></h4>
				<div class="single-post">
					<span class="sp-tags-title">TAGS</span><span class="sp-tags"><?php echo \model::call("tag"); ?></span>
				</div>
				<button class="btn btn-primary glp-readmore" data-category="<?php echo \model::property("category"); ?>"><?php echo \model::property("category"); ?></button>
				<div class="mb-social glp-social">
					<p>Share</p>
					<a href="https://twitter.com/home?status=<?php echo \runner::config("BASE") . \model::url(); ?>"><i class="fa fa-twitter"></i></a>
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo \runner::config("BASE") . \model::url(); ?>"><i class="fa fa-facebook"></i></a>
					<a href="https://plus.google.com/share?url=<?php echo \runner::config("BASE") . \model::url(); ?>"><i class="fa fa-google-plus"></i></a>
					<a href="https://pinterest.com/pin/create/button/?url=<?php echo \runner::config("BASE") . \model::url(); ?>&media=<?php echo \runner::config("BASE") . $size_l; ?>&description=<?php echo \model::property("label"); ?>"><i class="fa fa-pinterest"></i></a>
				</div>
			</div>
		</div>
	</div> <!-- gl-preview -->

</li>
