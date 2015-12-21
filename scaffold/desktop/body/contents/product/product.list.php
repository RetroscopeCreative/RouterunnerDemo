
<div class="col-sm-6 col-lg-6 col-md-6">
	<div class="thumbnail">
		<?php echo ((\model::property("leadimage") != "image/") ? \model::call("image", "leadimage") : ""); ?>
		<div class="caption">
			<h4 class="pull-right rr-product-price"><?php echo \model::property("price"); ?> Ft</h4>
			<h4><a href="<?php echo \model::url(); ?>" class="rr-product-label"><?php echo \model::property("label"); ?></a>
			</h4>
			<div class="rr-product-lead">
				<?php echo substr(strip_tags(html_entity_decode(\model::property("lead"))), 0, 200); ?>
			</div>
		</div>
		<?php
		\runner::route("review");
		?>
	</div>
</div>
