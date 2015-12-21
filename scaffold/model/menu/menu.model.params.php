<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.01.
 * Time: 15:45
 */

$from = "menu";
$orderBy = \Routerunner\Routerunner::BY_TREE;

if (isset($runner->context) && $runner->context) {
	$where = $runner->context;
} else {
	$where = array(
		'parent' => array('reference' => \runner::config('language')),
	);
}
$primary_key = 'id';
$force_list = true;
