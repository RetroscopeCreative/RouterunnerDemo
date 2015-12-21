<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2013.11.15.
 * Time: 11:35
 */

$from = 'member';

$orderBy = \Routerunner\Routerunner::BY_TREE;
if (isset($runner->context["force_list"]) && $runner->context["force_list"]) {
	$force_list = true;
	unset($runner->context["force_list"]);
}
$where = $runner->context;
$primary_key = 'id';