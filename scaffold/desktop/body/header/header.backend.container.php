<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.07.
 * Time: 16:32
 */

$debug = 1;
return function($runner) {
	$model = false;
	if ($menu = \bootstrap::get("menu")) {
		$context = array(
			"id = ?" => $menu
		);
		$model = \model::load($context, "menu");
	}
	$label = 'menu';
	if ($model && $model->label) {
		$label = $model->label;
	}
	$return = array(
		array(
			'traverse' => array(''),
			'selector' => '.nav.navbar-nav',
			'child_selector' => '> li.rr-menu-model',

			'parent' => \runner::config("language"),
			'prev' => '0',

			'label' => 'menu',

			'accept' => array(
				'menu' => array(
					"label" => "new menu",
				),
			),
		),
	);
	return $return;
};