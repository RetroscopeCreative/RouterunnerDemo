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
	'wrapper_class' => 'rr-contact',
	'child_selector' => '.rr-contact-model',
	//'wrapper_attr' => array('style' => 'border: 1px solid #900;'),
	'fields' => array(
		'label' => array_merge(\runner::config("property.label"), array(
			'selector' => '.rr-contact-label',
		)),
		'description' => array_merge(\runner::config("property.lead"), array(
			'selector' => '.rr-contact-description',
		)),
		'email' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-contact-email',
		)),
		'phone' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-contact-phone',
		)),
		'mobile' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-contact-mobile',
		)),
		'contact' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-contact-contact',
		)),
		'other_contact' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-contact-other_contact',
		)),
		'link' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-contact-link',
		)),
		'addon_class' => array_merge(\runner::config("property.type.select"), array(
			'selector' => '.rr-contact-addon_class select',
			'options' => $class_options,
			'help' => array(
				'panel' =>'',
			),
		)),
		'image' => array_merge(\runner::config("property.contentimage"), array(
			'selector' => '.rr-contact-image',
			'default' => 'Routerunner/placeholder/600x600',
		)),
		'data_image' => array_merge(\runner::config("property.data_contentimage"), array(
			'selector' => '.rr-contact-data_image',
			'default' => '{"src": "Routerunner/placeholder/600x600", "x": 0, "y": 0, "width": 600, "height": 600, "rotate": 0, "canvasData": {}}',
			'width' => '600px',
			'height' => '600px',
		)),
		'html_code' => array_merge(\runner::config("property.type.text"), array(
			'selector' => '.rr-contact-html_code',
		)),
	),
);
