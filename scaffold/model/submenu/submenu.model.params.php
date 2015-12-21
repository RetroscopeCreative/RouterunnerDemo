<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.01.
 * Time: 15:45
 */

$from = "menu";
$orderBy = \Routerunner\Routerunner::BY_TREE;

$where = array();

if (isset($runner->context['direct'])) {
	$where = $runner->context;
} elseif (isset($runner->context['menu'])) {
	$where = array(
		'parent' => array('reference' => $runner->context['menu']),
	);
}
$primary_key = 'id';
$force_list = true;
