<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.11.11.
 * Time: 20:50
 */
 
 ?>
<div class="row">

	<div class="col-md-8">
		<?php echo \model::call("image", "contentimage", "img-responsive"); ?>
	</div>

	<div class="col-md-4">
		<h3 class="rr-portfolio-label"><?php echo \model::property("label"); ?></h3>
		<div class="rr-portfolio-content">
			<?php echo \model::property("content"); ?>
		</div>
	</div>

</div>
<!-- /.row -->
