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
	'wrapper_class' => 'rr-portfolio',
	'child_selector' => '.rr-portfolio-model',
	//'wrapper_attr' => array('style' => 'border: 1px solid #900;'),
	'fields' => array(
		'label' => array_merge(\runner::config("property.label"), array(
			'selector' => '.rr-portfolio-label',
		)),
		'date' => array_merge(\runner::config("property.date"), array(
			'selector' => '.rr-portfolio-date',
			'default' => time(),
		)),
		'content' => array_merge(\runner::config("property.type.text"), array(
			'selector' => '.rr-portfolio-content',
		)),
		'tag' => array_merge(\runner::config("property.tag"), array(
			'selector' => '.rr-portfolio-tag select',
		)),
		'author' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-portfolio-author',
		)),
		'contentimage' => array_merge(\runner::config("property.contentimage"), array(
			'selector' => '.rr-portfolio-contentimage',
			'mediasize' => 'contentimage',
		)),
	),
);