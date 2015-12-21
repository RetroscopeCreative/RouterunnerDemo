<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2014.08.07.
 * Time: 10:27
 */

$debug = 1;


return array(
	//'wrapper_element' => 'wrap',
	'wrapper_class' => 'rr-media',
	'child_selector' => '.rr-media-model',
	//'wrapper_attr' => array('style' => 'border: 1px solid #900;'),
	'fields' => array(
		'label' => array_merge(\runner::config("property.label"), array(
			'selector' => '.rr-media-label',
		)),
		'date' => array_merge(\runner::config("property.date"), array(
			'selector' => '.rr-media-date',
			'default' => time(),
		)),
		'description' => array_merge(\runner::config("property.lead"), array(
			'selector' => '.rr-media-description',
		)),
		'category' => array_merge(\runner::config("property.category"), array(
			'selector' => '.rr-media-category select',
		)),
		'tag' => array_merge(\runner::config("property.tag"), array(
			'selector' => '.rr-media-tag select',
		)),
		'thumbnail' => array_merge(\runner::config("property.leadimage"), array(
			'selector' => '.rr-media-thumbnail',
		)),
		'data_thumbnail' => array_merge(\runner::config("property.data_leadimage"), array(
			'selector' => '.rr-media-data_thumbnail',
		)),
		'image' => array_merge(\runner::config("property.contentimage"), array(
			'selector' => '.rr-media-image',
		)),
		'data_image' => array_merge(\runner::config("property.data_contentimage"), array(
			'selector' => '.rr-media-data_image',
		)),
		'videourl' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-media-videourl',
		)),
		'downloadurl' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-media-downloadurl',
		)),
	),
);
