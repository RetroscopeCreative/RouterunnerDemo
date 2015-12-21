<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.07.
 * Time: 16:32
 */

//$debug = 1;
return function($runner) {
	$debug = 1;

	$current = \bootstrap::get("current");
	$menu = \bootstrap::get("menu");
	$submenu = \bootstrap::get("submenu");
	$references = false;
	if (isset($runner->context["container_references"]) && is_array($runner->context["container_references"])
		&& count($runner->context["container_references"])) {
		$references = $runner->context["container_references"];
	} elseif (isset($runner->context["submenu"])) {
		$references = $runner->context["submenu"];
	} elseif ($current && is_array($current) && key($current) == "submenu") {
		$references = \bootstrap::get("reference");
	} elseif ($current && is_array($current) && key($current) == "menu") {
		$references = \bootstrap::get("reference");
	}

	if (!is_array($references)) {
		$references = array($references);
	}

	$route = array('');
	if ($submenu) {
		$route[] = 'menu';
		$route[] = 'submenu';
	} elseif ($menu) {
		$route[] = 'menu';
	}

	$scaffold = \Routerunner\Helper::$scaffold_root;
	$tree = (@include $scaffold . '/model/tree.php');

	foreach ($references as $reference) {
		$override = array();
		if (is_array($reference)) {
			$override = $reference;
			if (isset($reference["reference"])) {
				unset($override["reference"]);
				$reference = $reference["reference"];
			} else {
				$reference = \bootstrap::get("reference");
			}
		}

		$label = "new element";
		$context = array(
			"direct" => $reference,
			"silent" => true,
		);
		$model = \model::load($context);
		if (is_array($model)) {
			$model = array_shift($model);
		}
		if ($model) {
			$label = $model->label;
		}

		$branch = \Routerunner\Helper::tree_route($tree, $route, $model);

		$container = array(
			'traverse' => $route,
			'selector' => '.rr-content-container',
			'child_selector' => '.rr-model',

			'reference' => $reference,
			'parent' => $reference,
			'prev' => '0',

			'label' => $label,

			'accept' => array(),
		);
		if (isset($branch["children"])) {
			unset($branch["children"]["submenu"]);
			foreach ($branch["children"] as $type => $model_data) {
				if (isset($model_data["blank"])) {
					$container["accept"][$type] = $model_data["blank"];
				} else {
					$container["accept"][$type] = array("label" => "new " . $type);
				}
			}
		}

		if ($override) {
			$container = array_merge($container, $override);
		}

		$return[] = $container;
	}

	if ($return && is_array($return) && count($return) === 1) {
		$return = array_shift($return);
	}

	return $return;
};
