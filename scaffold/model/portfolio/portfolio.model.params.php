<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.01.
 * Time: 15:45
 */

$from = "portfolio";

$orderBy = \Routerunner\Routerunner::BY_TREE;
if (isset($runner->context["force_list"]) && $runner->context["force_list"]) {
	$force_list = true;
	unset($runner->context["force_list"]);
}
$where = $runner->context;
$primary_key = 'id';
