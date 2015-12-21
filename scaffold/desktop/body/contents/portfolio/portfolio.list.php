<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.11.11.
 * Time: 20:50
 */
 
 ?>
<div class="col-md-6 img-portfolio">
	<a href="<?php echo \model::url(); ?>" title="<?php echo \model::property("label"); ?>">
		<?php echo \model::call("image", "contentimage", "img-responsive img-hover"); ?>
	</a>
	<h3>
		<a href="<?php echo \model::url(); ?>" class="rr-portfolio-label" title="<?php echo \model::property("label"); ?>"><?php echo \model::property("label"); ?></a>
	</h3>
</div>

