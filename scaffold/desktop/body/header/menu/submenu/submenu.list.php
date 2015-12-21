<?php
$debug = 1;
?>
<li class="rr-submenu-model<?=$runner->context["selected_class"]?>">
	<a href="<?php echo model::url(); ?>" class="rr-submenu-label"><?php echo model::property("label"); ?></a>
</li>
