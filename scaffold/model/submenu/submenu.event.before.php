<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.06.11.
 * Time: 17:03
 */

$debug = 1;
$selected_class = ((\bootstrap::get("submenu") == \model::property("id")) ? ' selected' : '');
$has_children_class = '';
if (\Routerunner\Bootstrap::children(\model::property("reference"))) {
	$has_children_class = ' menu-item-has-children';
}