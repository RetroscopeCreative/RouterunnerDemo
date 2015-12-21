<?php
$debug = 1;
?>
<!-- Intro Content -->
<div class="row">
	<!-- Title -->

	<div class="col-md-6">
		<?php echo \model::call("image", "contentimage"); ?>
	</div>
	<div class="col-md-6">
		<!--
		<h2 class="rr-content-label"><?php echo \model::property("label"); ?></h2>
		-->

		<div class="rr-content-content">
			<?php echo \model::property("content"); ?>
		</div>
	</div>
</div>
<!-- /.row -->
