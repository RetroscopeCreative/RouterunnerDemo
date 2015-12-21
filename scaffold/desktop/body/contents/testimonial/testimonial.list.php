<?php
$class = (\runner::stack("testimonial_index") === 0) ? " active" : "";
\runner::stack("testimonial_index", \runner::stack("testimonial_index") + 1);
?>
<div class="item testimonial-item<?php echo $class; ?>">
	<p class="citation"><?php echo \model::property("brief"); ?></p>
	<p class="author"><span class="name"><?php echo \model::property("label"); ?></span> / <span class="position"><?php echo \model::property("position"); ?></span> / <span class="company"><?php echo \model::property("company"); ?></span></p>
</div>
