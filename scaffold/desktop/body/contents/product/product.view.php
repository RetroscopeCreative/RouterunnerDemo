<?php
$debug = 1;
?>

<div class="row">

	<!-- Blog Post Content Column -->
	<div class="col-md-9">

		<!-- Blog Post -->

		<!-- Title -->
		<h1 class="rr-product-label"><?php echo \model::property("label"); ?></h1>

		<!-- Author
		<p class="lead">
			by <a href="?search=<?php echo urlencode(\model::property("author")); ?>" class="rr-product-author"><?php echo \model::property("author"); ?></a>
		</p>
		-->

		<hr>

		<!-- Date/Time -->
		<p><span class="glyphicon glyphicon-time"></span> Posted on <span class="rr-product-date"><?php echo \model::property("date"); ?></span></p>

		<hr>

		<?php echo \model::call("image", "contentimage"); ?>


		<!-- Post Content -->
		<div class="rr-product-lead lead">
			<?php echo html_entity_decode(\model::property("lead")); ?>
		</div>
		<div class="rr-product-content">
			<?php echo html_entity_decode(\model::property("content")); ?>
		</div>

		<?php
		echo \Routerunner\Routerunner::form("order", $runner, false);
		?>

		<hr>

		<?php
		\runner::route("comments");
		?>

	</div>

	<!-- Blog Sidebar Widgets Column -->
	<div class="col-md-3">

		<!-- Blog Search Well -->
		<div class="well">
			<form method="get">
				<h4>Blog Search</h4>
				<div class="input-group">
					<input type="text" name="search" class="form-control">
					<span class="input-group-btn">
						<button class="submit btn btn-default" type="button">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</span>
				</div>
				<!-- /.input-group -->
			</form>
		</div>

		<!-- related -->

		<?php
		\runner::route("/desktop/body/contents/category");
		?>

		<!-- Side Widget Well -->
		<div class="well">
			<h4>Side Widget Well</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
		</div>

	</div>

</div>
<!-- /.row -->

<hr>
