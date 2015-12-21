<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.07.
 * Time: 16:33
 */

$class_options = explode(";", "bg-default;bg-primary;bg-info;bg-success;bg-warning;bg-danger");
//sort($class_options);
$option_options = explode(";", "public;home;membersarea");
//sort($option_options);

return array(
	'treeroot' => \runner::config("language"),
	'traverse' => array(''),
	//'wrapper_element' => 'wrap',
	'wrapper_class' => 'rr-menu',
	'child_selector' => '.rr-menu-model',
	//'wrapper_attr' => array('style' => 'border: 1px solid #900;'),
	'fields' => array(
		'label' => array_merge(\runner::config("property.label"), array(
			'selector' => '.rr-menu-label',
		)),
		'date' => array_merge(\runner::config("property.date"), array(
			'selector' => '.rr-menu-date',
			'default' => time(),
		)),
		'description' => array_merge(\runner::config("property.lead"), array(
			'selector' => '.rr-menu-lead',
		)),
		'addon_class' => array_merge(\runner::config("property.type.select"), array(
			'selector' => '.rr-menu-addon_class select',
			'options' => $class_options,
			'help' => array(
				'panel' =>'',
			),
		)),
		'option' => array_merge(\runner::config("property.type.select"), array(
			'selector' => '.rr-menu-option select',
			'options' => $option_options,
			'help' => array(
				'panel' =>'',
			),
		)),
	),
);