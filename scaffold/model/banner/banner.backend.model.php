<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.07.
 * Time: 16:33
 */
$debug = 1;

$class_options = explode(";", "bg-default;bg-primary;bg-info;bg-success;bg-warning;bg-danger");
sort($class_options);
return array(
	//'treeroot' => -1 * \runner::config("language"),
	//'traverse' => array('home'),
	//'wrapper_element' => 'wrap',
	'wrapper_class' => 'rr-banner',
	'child_selector' => '.rr-banner-model',
	//'wrapper_attr' => array('style' => 'border: 1px solid #900;'),
	'fields' => array(
		'label' => array_merge(\runner::config("property.label"), array(
			'selector' => '.rr-banner-label',
		)),
		'description' => array_merge(\runner::config("property.lead"), array(
			'selector' => '.rr-banner-description',
		)),
		'link' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-banner-link',
		)),
		'addon_class' => array_merge(\runner::config("property.type.select"), array(
			'selector' => '.rr-banner-addon_class select',
			'options' => $class_options,
			'help' => array(
				'panel' =>'',
			),
		)),
		'image' => array_merge(\runner::config("property.contentimage"), array(
			'selector' => '.rr-banner-image',
			'default' => 'Routerunner/placeholder/768x90',
		)),
		'data_image' => array_merge(\runner::config("property.data_contentimage"), array(
			'selector' => '.rr-banner-data_image',
			'default' => '{"src": "Routerunner/placeholder/768x90", "x": 0, "y": 0, "width": 768, "height": 90, "rotate": 0, "canvasData": {}}',
			'width' => '768px',
			'height' => '90px',
		)),
		'html_code' => array_merge(\runner::config("property.type.text"), array(
			'selector' => '.rr-banner-html_code',
		)),
	),
);