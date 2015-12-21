<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.07.
 * Time: 16:33
 */
$class_options = explode(";", "bg-default;bg-primary;bg-info;bg-success;bg-warning;bg-danger");
//sort($class_options);

return array(
	//'wrapper_element' => 'wrap',
	'wrapper_class' => 'rr-submenu',
	'child_selector' => '.rr-submenu-model',
	//'wrapper_attr' => array('style' => 'border: 1px solid #900;'),
	'fields' => array(
		'label' => array_merge(\runner::config("property.label"), array(
			'selector' => '.rr-submenu-label',
		)),
		'date' => array_merge(\runner::config("property.date"), array(
			'selector' => '.rr-submenu-date',
			'default' => time(),
		)),
		'description' => array_merge(\runner::config("property.lead"), array(
			'selector' => '.rr-submenu-lead',
		)),
		'addon_class' => array_merge(\runner::config("property.type.select"), array(
			'selector' => '.rr-submenu-addon_class select',
			'options' => $class_options,
			'help' => array(
				'panel' =>'',
			),
		)),
	),
);