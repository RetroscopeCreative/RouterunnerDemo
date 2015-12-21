<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.07.
 * Time: 16:32
 */

return function($runner) {
	$label = 'submenu';
	if ($runner->model && $runner->model->label) {
		$label = $runner->model->label;
	}
	$return = array(
		array(
			'traverse' => array('', 'menu'),
			'selector' => 'ul.dropdown-menu',
			'child_selector' => 'li.rr-submenu-model',

			'parent' => ($runner->model && $runner->model->reference ? $runner->model->reference : 0),
			'prev' => '0',

			'label' => $label,

			'accept' => array(
				'submenu' => array(
					"label" => "new submenu",
				),
			),
		),
	);
	return $return;
};