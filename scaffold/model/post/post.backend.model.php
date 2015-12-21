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
	'wrapper_class' => 'rr-post',
	'child_selector' => '.rr-post-model',
	//'wrapper_attr' => array('style' => 'border: 1px solid #900;'),
	'fields' => array(
		'label' => array_merge(\runner::config("property.label"), array(
			'selector' => '.rr-post-label',
		)),
		'date' => array_merge(\runner::config("property.date"), array(
			'selector' => '.rr-post-date',
			'default' => time(),
		)),
		'lead' => array_merge(\runner::config("property.lead"), array(
			'selector' => '.rr-post-lead',
		)),
		'content' => array_merge(\runner::config("property.type.text"), array(
			'selector' => '.rr-post-content',
		)),
		'tag' => array_merge(\runner::config("property.tag"), array(
			'selector' => '.rr-post-tag select',
		)),
		'author' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-post-author',
		)),
		'leadimage' => array_merge(\runner::config("property.leadimage"), array(
			'selector' => '.rr-post-leadimage',
			'mediasize' => 'leadimage',
		)),
		/*
		'data_leadimage' => array_merge(\runner::config("property.data_leadimage"), array(
			'selector' => '.rr-post-data_leadimage',
		)),
		*/
		'contentimage' => array_merge(\runner::config("property.contentimage"), array(
			'selector' => '.rr-post-contentimage',
			'mediasize' => 'contentimage',
		)),
		/*
		'data_contentimage' => array_merge(\runner::config("property.data_contentimage"), array(
			'selector' => '.rr-post-data_contentimage',
		)),
		*/
	),
);