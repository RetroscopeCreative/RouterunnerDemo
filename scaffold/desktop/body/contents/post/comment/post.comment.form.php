<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.07.17.
 * Time: 8:49
 */

$url = \bootstrap::get("url");
?>
<div class="comment-form">
	<div class="row comment-header">
		<h4 class="margin-btm-md col-md-4">Leave a Comment</h4>
		<div class="col-md-8 reply-to"></div>
	</div>
	<form method="post" action="<?=$url?>" role="form" class="contact-form">
		<?php echo form::input("nonce"); ?>
		<?php echo form::input("date"); ?>
		<?php echo form::input("post"); ?>
		<?php echo form::input("reply"); ?>
		<div class="row">
			<div class="col-sm-4 form-group">
				<?php echo form::input("name"); ?>
			</div>
			<div class="col-sm-4 form-group">
				<?php echo form::input("email"); ?>
			</div>
			<div class="col-sm-4 form-group">
				<?php echo form::input("avatar"); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 form-group">
				<?php echo form::input("subject"); ?>
			</div>
		</div>
		<div class="form-group">
			<?php echo form::input("comment"); ?>
		</div>
		<?php echo form::input("submit"); ?>
	</form>
</div>