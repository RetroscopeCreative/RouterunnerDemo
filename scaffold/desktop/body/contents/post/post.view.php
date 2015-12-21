<?php
$debug = 1;
?>

<div class="row">

	<!-- Blog Post Content Column -->
	<div class="col-md-8">

		<!-- Blog Post -->

		<!-- Title
		<h1 class="rr-post-label"><?php echo \model::property("label"); ?></h1>
		-->

		<!-- Author -->
		<p class="lead">
			by <a href="?search=<?php echo urlencode(\model::property("author")); ?>" class="rr-post-author"><?php echo \model::property("author"); ?></a>
		</p>

		<hr>

		<!-- Date/Time -->
		<p><span class="glyphicon glyphicon-time"></span> Posted on <span class="rr-post-date"><?php echo \model::call("date_str"); ?></span></p>

		<hr>

		<?php echo \model::call("image", "contentimage"); ?>


		<!-- Post Content -->
		<div class="rr-post-lead lead">
			<?php echo \model::property("lead"); ?>
		</div>
		<div class="rr-post-content">
			<?php echo \model::property("content"); ?>
		</div>
		<hr>

		<?php
		\runner::route("comments");
		?>

	</div>

	<!-- Blog Sidebar Widgets Column -->
	<div class="col-md-4">
		<?php
/*
		<!-- Blog Search Well -->
		<div class="well">
			<h4>Blog Search</h4>
			<div class="input-group">
				<input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
								<span class="glyphicon glyphicon-search"></span>
							</button>
                        </span>
			</div>
			<!-- /.input-group -->
		</div>

		<!-- related -->

		<!-- tags -->
		<div class="well">
			<h4>Blog Categories</h4>
			<div class="row">
				<div class="col-lg-6">
					<ul class="list-unstyled">
						<li><a href="#">Category Name</a>
						</li>
						<li><a href="#">Category Name</a>
						</li>
						<li><a href="#">Category Name</a>
						</li>
						<li><a href="#">Category Name</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-6">
					<ul class="list-unstyled">
						<li><a href="#">Category Name</a>
						</li>
						<li><a href="#">Category Name</a>
						</li>
						<li><a href="#">Category Name</a>
						</li>
						<li><a href="#">Category Name</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- /.row -->
		</div>

		<!-- media -->

		<!-- Side Widget Well -->
		<div class="well">
			<h4>Side Widget Well</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
		</div>
*/
?>
	</div>

</div>
<!-- /.row -->

<hr>
