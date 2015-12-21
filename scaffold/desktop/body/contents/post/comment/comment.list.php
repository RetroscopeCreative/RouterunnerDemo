<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.07.16.
 * Time: 17:34
 */
$debug = 1;
?>
<!-- Comment -->
<div class="media">
	<?php if (\model::property("avatar")) { ?>
	<a class="pull-left" href="#">
		<img class="media-object rr-comment-avatar" src="<?php echo \model::property("avatar"); ?>" alt="<?php echo \model::property("name"); ?>">
	</a>
	<?php } ?>
	<div class="media-body">
		<h4 class="media-heading"><span class="rr-comment-subject"><?php echo \model::property("subject"); ?></span>
			<small><?php echo \model::call("date_str"); ?></small>
		</h4>
		<div class="rr-comment-comment">
			<?php echo \model::property("comment"); ?>
		</div>
		<a href="#" class="reply-btn" data-reply-to="<?php echo \model::property("id"); ?>">Reply</a>
	</div>
	<?php
	\runner::route("/desktop/body/content/post/comment", array("model_reference" => \model::property("model_reference"), "reply" => \model::property("id")));
	?>
</div>
