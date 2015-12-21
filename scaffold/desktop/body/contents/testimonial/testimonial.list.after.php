	</div>

	<!-- Indicators -->
	<ol class="carousel-indicators">
		<?php
		for ($i = 0; $i < \runner::stack("testimonial_index"); $i++) {
			$class = ($i == 0 ? ' class="active"' : '');
			echo '		<li data-target="#carousel-testimonials" data-slide-to="' . $i . '"' . $class . '></li>' . PHP_EOL;
		}
		?>
	</ol>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-testimonials" data-slide="prev">
		<span></span>
	</a>
	<a class="right carousel-control" href="#carousel-testimonials" data-slide="next">
		<span></span>
	</a>

</div> <!-- carousel -->
