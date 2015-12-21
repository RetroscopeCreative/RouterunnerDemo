<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.06.11.
 * Time: 17:03
 */

$debug = 1;
$selected_class = ((\bootstrap::get("menu") == \model::property("id")) ? ' selected' : '');
$has_children_class = '';
if ($children = \Routerunner\Bootstrap::children(\model::property("reference"))) {
	foreach ($children as $child) {
		if ($child["model_class"] == "submenu") {
			$has_children_class = ' dropdown';
		}
	}

}