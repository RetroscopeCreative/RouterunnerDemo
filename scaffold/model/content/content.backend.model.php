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
	'wrapper_class' => 'rr-content',
	'child_selector' => '.rr-content-model',
	//'wrapper_attr' => array('style' => 'border: 1px solid #900;'),
	'fields' => array(
		'label' => array_merge(\runner::config("property.label"), array(
			'selector' => '.rr-content-label',
		)),
		'content' => array_merge(\runner::config("property.type.text"), array(
			'selector' => '.rr-content-content',
		)),
		'tag' => array_merge(\runner::config("property.tag"), array(
			'selector' => '.rr-content-tag select',
		)),
		'author' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-content-author',
		)),
		'contentimage' => array_merge(\runner::config("property.contentimage"), array(
			'selector' => '.rr-content-contentimage',
			'mediasize' => 'contentimage',
		)),
		/*'data_contentimage' => array_merge(\runner::config("property.data_contentimage"), array(
			'selector' => '.rr-content-data_contentimage',
		)),
		*/
	),
);