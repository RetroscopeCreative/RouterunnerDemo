<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.07.17.
 * Time: 8:49
 */

$url = \bootstrap::get("url");
?>
<div class="order-form">
	<div class="row order-header">
		<h4 class="margin-btm-md col-md-4">Order</h4>
	</div>
	<form method="post" action="<?=$url?>" role="form" class="contact-form">
		<?php echo form::input("nonce"); ?>
		<?php echo form::input("date"); ?>
		<?php echo form::input("product"); ?>
		<div class="row">
			<div class="col-sm-4 form-group">
				<?php echo form::input("item"); ?>
			</div>
			<div class="col-sm-4 form-group">
				<?php echo form::input("submit"); ?>
			</div>
		</div>
	</form>
</div>