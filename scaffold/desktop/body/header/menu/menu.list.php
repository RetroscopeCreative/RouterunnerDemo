<?php
$debug = 1;
?>
<li class="rr-menu-model<?php echo $runner->context["has_children_class"];?><?php echo $runner->context["selected_class"];?>">
	<a href="<?php echo model::url(); ?>"<?php echo (($runner->context["has_children_class"]) ? ' class="dropdown-toggle" data-toggle="dropdown"' : ''); ?>><span class="rr-menu-label"><?php echo model::property("label"); ?></span><?php echo (($runner->context["has_children_class"]) ? '<b class="caret"></b>' : ''); ?></a>
	<?php
	\runner::route("submenu", array("menu" => \model::property("reference")));
	?>
</li>
