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
	'wrapper_class' => 'rr-product',
	'child_selector' => '.rr-product-model',
	//'wrapper_attr' => array('style' => 'border: 1px solid #900;'),
	'fields' => array(
		'label' => array_merge(\runner::config("property.label"), array(
			'selector' => '.rr-product-label',
		)),
		'date' => array_merge(\runner::config("property.date"), array(
			'selector' => '.rr-product-date',
			'default' => time(),
		)),
		'lead' => array_merge(\runner::config("property.lead"), array(
			'selector' => '.rr-product-lead',
		)),
		'content' => array_merge(\runner::config("property.type.text"), array(
			'selector' => '.rr-product-content',
		)),
		'category' => array_merge(\runner::config("property.category"), array(
			'selector' => '.rr-product-category select',
		)),
		/*
		'tag' => array_merge(\runner::config("property.tag"), array(
			'selector' => '.rr-product-tag select',
		)),
		*/
		'leadimage' => array_merge(\runner::config("property.leadimage"), array(
			'selector' => '.rr-product-leadimage',
			'mediasize' => 'leadimage',
		)),
		/*
		'data_leadimage' => array_merge(\runner::config("property.data_leadimage"), array(
			'selector' => '.rr-product-data_leadimage',
		)),
		*/
		'contentimage' => array_merge(\runner::config("property.contentimage"), array(
			'selector' => '.rr-product-contentimage',
			'mediasize' => 'contentimage',
		)),
		/*
		'data_contentimage' => array_merge(\runner::config("property.data_contentimage"), array(
			'selector' => '.rr-product-data_contentimage',
		)),
		*/
		'price' => array_merge(\runner::config("property.type.int"), array(
			'selector' => '.rr-product-price',
		)),
	),
);