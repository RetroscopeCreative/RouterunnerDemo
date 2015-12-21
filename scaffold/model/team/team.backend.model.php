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
	'wrapper_class' => 'rr-team',
	'child_selector' => '.rr-team-model',
	//'wrapper_attr' => array('style' => 'border: 1px solid #900;'),
	'fields' => array(
		'name' => array_merge(\runner::config("property.label"), array(
			'selector' => '.rr-team-name',
		)),
		'date' => array_merge(\runner::config("property.date"), array(
			'selector' => '.rr-team-date',
			'default' => time(),
		)),
		'position' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-team-position',
		)),
		'lead' => array_merge(\runner::config("property.lead"), array(
			'selector' => '.rr-team-lead',
		)),
		'content' => array_merge(\runner::config("property.type.text"), array(
			'selector' => '.rr-team-content',
		)),
		'tag' => array_merge(\runner::config("property.tag"), array(
			'selector' => '.rr-team-tag select',
		)),
		'leadimage' => array_merge(\runner::config("property.leadimage"), array(
			'selector' => '.rr-team-leadimage',
		)),
		'data_leadimage' => array_merge(\runner::config("property.data_leadimage"), array(
			'selector' => '.rr-team-data_leadimage',
		)),
		'contentimage' => array_merge(\runner::config("property.contentimage"), array(
			'selector' => '.rr-team-contentimage',
		)),
		'data_contentimage' => array_merge(\runner::config("property.data_contentimage"), array(
			'selector' => '.rr-team-data_contentimage',
		)),
		'email' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-team-email',
		)),
		'phone' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-team-phone',
		)),
		'mobile' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-team-mobile',
		)),
		'contact' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-team-contact',
		)),
		'other_contact' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-team-other_contact',
		)),
	),
);