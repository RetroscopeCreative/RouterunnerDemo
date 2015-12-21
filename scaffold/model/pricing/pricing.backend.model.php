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
$currency_options = explode(";", "Ft;€;$");
sort($currency_options);
return array(
	//'wrapper_element' => 'wrap',
	'wrapper_class' => 'rr-pricing',
	'child_selector' => '.rr-pricing-model',
	//'wrapper_attr' => array('style' => 'border: 1px solid #900;'),
	'fields' => array(
		'label' => array_merge(\runner::config("property.label"), array(
			'selector' => '.rr-pricing-label',
		)),
		'description' => array_merge(\runner::config("property.lead"), array(
			'selector' => '.rr-pricing-description',
		)),
		'addon_class' => array_merge(\runner::config("property.type.select"), array(
			'selector' => '.rr-pricing-addon_class select',
			'options' => $class_options,
			'help' => array(
				'panel' =>'',
			),
		)),
		'content' => array_merge(\runner::config("property.type.text"), array(
			'selector' => '.rr-pricing-content',
		)),
		'price' => array_merge(\runner::config("property.type.int"), array(
			'selector' => '.rr-pricing-price',
		)),
		'currency' => array_merge(\runner::config("property.type.select"), array(
			'selector' => '.rr-pricing-currency select',
			'options' => $currency_options,
			'help' => array(
				'panel' =>'',
			),
		)),
		'link' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-pricing-link',
		)),
		'button' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-pricing-button',
		)),
	),
);