<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.07.
 * Time: 16:33
 */
$debug = 1;
return array(
	//'wrapper_element' => 'wrap',
	'wrapper_class' => 'rr-testimonial',
	'child_selector' => '.rr-testimonial-model',
	//'wrapper_attr' => array('style' => 'border: 1px solid #900;'),
	'fields' => array(
		'name' => array_merge(\runner::config("property.label"), array(
			'selector' => '.rr-testimonial-name',
		)),
		'company' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-testimonial-company',
		)),
		'position' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-testimonial-position',
		)),
		'lead' => array_merge(\runner::config("property.lead"), array(
			'selector' => '.rr-testimonial-lead',
		)),
		'photo' => array_merge(\runner::config("property.leadimage"), array(
			'selector' => '.rr-testimonial-photo',
			'default' => 'Routerunner/placeholder/200x200',
		)),
		'data_photo' => array_merge(\runner::config("property.data_leadimage"), array(
			'selector' => '.rr-testimonial-data_photo',
			'default' => '{"src": "Routerunner/placeholder/200x200", "x": 0, "y": 0, "width": 200, "height": 200, "rotate": 0, "canvasData": {}}',
			'width' => '200px',
			'height' => '200px',
		)),
		'logo' => array_merge(\runner::config("property.contentimage"), array(
			'selector' => '.rr-testimonial-logo',
			'default' => 'Routerunner/placeholder/200x200',
		)),
		'data_logo' => array_merge(\runner::config("property.data_contentimage"), array(
			'selector' => '.rr-testimonial-data_logo',
			'default' => '{"src": "Routerunner/placeholder/200x200", "x": 0, "y": 0, "width": 200, "height": 200, "rotate": 0, "canvasData": {}}',
			'width' => '200px',
			'height' => '200px',
		)),
		'link' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-testimonial-link',
		)),
		'contact' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-testimonial-contact',
		)),
	),
);