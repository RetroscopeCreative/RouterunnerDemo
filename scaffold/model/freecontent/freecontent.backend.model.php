<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.07.
 * Time: 16:33
 */


$class_options = explode(";", "bg-default;bg-primary;bg-info;bg-success;bg-warning;bg-danger");
sort($class_options);
return array(
	//'treeroot' => -1 * \runner::config("language"),
	//'traverse' => array('home'),
	//'wrapper_element' => 'wrap',
	'wrapper_class' => 'rr-freecontent',
	'child_selector' => '.rr-freecontent-model',
	//'wrapper_attr' => array('style' => 'border: 1px solid #900;'),
	'fields' => array(
		'label' => array_merge(\runner::config("property.label"), array(
			'selector' => '.rr-freecontent-label',
		)),
		'description' => array_merge(\runner::config("property.lead"), array(
			'selector' => '.rr-freecontent-description',
		)),
		'link' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-freecontent-link',
		)),
		'addon_class' => array_merge(\runner::config("property.type.select"), array(
			'selector' => '.rr-freecontent-addon_class select',
			'options' => $class_options,
			'help' => array(
				'panel' =>'',
			),
		)),
		'image' => array_merge(\runner::config("property.contentimage"), array(
			'selector' => '.rr-freecontent-image',
			'default' => 'Routerunner/placeholder/600x600',
		)),
		'data_image' => array_merge(\runner::config("property.data_contentimage"), array(
			'selector' => '.rr-freecontent-data_image',
			'default' => '{"src": "Routerunner/placeholder/600x600", "x": 0, "y": 0, "width": 600, "height": 600, "rotate": 0, "canvasData": {}}',
			'width' => '600px',
			'height' => '600px',
		)),
		'html_code' => array_merge(\runner::config("property.type.text"), array(
			'selector' => '.rr-freecontent-html_code',
		)),
	),
);
