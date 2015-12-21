<div class="rr-feature-model col-md-3 col-sm-6">
	<div class="panel panel-default text-center">
		<div class="panel-heading">
			<span class="fa-stack fa-5x">
				<?php if (\model::property("icon_class") || \runner::config("mode") == "backend") { ?>
					<span class="fa <?php echo \model::property("icon_class"); ?>"></span>
				<?php } ?>
			</span>
		</div>
		<div class="panel-body">
			<h4 class="rr-feature-label"><?php echo \model::property("label"); ?></h4>
			<div class="rr-feature-lead">
				<?php echo \model::property("lead"); ?>
			</div>
			<?php if (trim(\model::property("link"), " #")) { ?>
				<a href="<?php echo \model::property("link"); ?>" class="btn btn-primary">Learn More</a>
			<?php } ?>
		</div>
	</div>
</div>
