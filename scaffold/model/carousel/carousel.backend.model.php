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
	'child_selector' => '.rr-carousel-model',
	//'wrapper_attr' => array('style' => 'border: 1px solid #900;'),
	'fields' => array(
		'label' => array_merge(\runner::config("property.label"), array(
			'selector' => '.rr-carousel-label',
		)),
		'lead' => array_merge(\runner::config("property.lead"), array(
			'selector' => '.rr-carousel-lead',
		)),
		'link' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-carousel-link',
		)),
		'button' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-carousel-button',
		)),
		'addon_class' => array_merge(\runner::config("property.type.select"), array(
			'selector' => '.rr-carousel-addon_class select',
			'options' => $class_options,
			'help' => array(
				'panel' =>'',
			),
		)),
		'leadimage' => array_merge(\runner::config("property.leadimage"), array(
			'selector' => '.rr-carousel-leadimage',
			'default' => 'Routerunner/placeholder/900x350',
		)),
		'data_leadimage' => array_merge(\runner::config("property.data_leadimage"), array(
			'selector' => '.rr-carousel-data_leadimage',
			'default' => '{"src": "Routerunner/placeholder/900x350", "x": 0, "y": 0, "width": 900, "height": 350, "rotate": 0, "canvasData": {}}',
			'width' => '900px',
			'height' => '350px',
		)),
		'image' => array_merge(\runner::config("property.contentimage"), array(
			'selector' => '.rr-carousel-image',
			'default' => 'Routerunner/placeholder/1920x600',
		)),
		'data_image' => array_merge(\runner::config("property.data_contentimage"), array(
			'selector' => '.rr-carousel-data_image',
			'default' => '{"src": "Routerunner/placeholder/1920x600", "x": 0, "y": 0, "width": 1920, "height": 600, "rotate": 0, "canvasData": {}}',
			'width' => '1920px',
			'height' => '600px',
		)),
	),
);