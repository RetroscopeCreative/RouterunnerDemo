<div class="col-md-4 pricing-model" data-animate="fadeInDown">
	<div class="price-table">
		<header class="price-header">
			<h3><span class="rr-price"><?php echo \model::property("price"); ?></span> <span class="rr-currency"><?php echo \model::property("currency"); ?></span></h3>
			<p><?php echo \model::property("label"); ?></p>
		</header>
		<div class="sub-heading">
			<?php echo \model::property("description"); ?>
		</div>
		<ul class="price-descr">
			<?php
			$list = explode("\n", \model::property("content"));
			array_walk($list, function($item, $key) {
				echo "<li>" . $item . "</li>";
			});
			?>
		</ul>
		<?php if (\model::property("link") && \model::property("button")) { ?>
		<footer class="price-footer">
			<a href="<?php echo \model::property("link"); ?>"
			   class="btn btn-default"><?php echo \model::property("button"); ?></a>
		</footer>
		<?php } ?>
	</div>
</div>

