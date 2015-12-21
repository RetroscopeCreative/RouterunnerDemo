<!-- First Blog Post -->
<h2>
	<a href="<?php echo \model::url(); ?>" class="rr-post-label"><?php echo \model::property("label"); ?></a>
</h2>
<p class="lead">
	by <a href="?search=<?php echo urlencode(\model::property("author")); ?>" class="rr-post-author"><?php echo \model::property("author"); ?></a>
</p>
<p><span class="glyphicon glyphicon-time"></span> Posted on <span class="rr-post-date"><?php echo \model::call("date_str"); ?></span></p>
<hr>
<?php echo \model::call("image", "leadimage"); ?>
<div class="rr-post-lead lead">
	<?php echo \model::property("lead"); ?>
</div>
<a class="btn btn-primary" href="<?php echo \model::url(); ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

<hr>
