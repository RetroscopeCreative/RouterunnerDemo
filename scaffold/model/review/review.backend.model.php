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
	'wrapper_class' => 'rr-review',
	'child_selector' => '.rr-review-model',
	//'wrapper_attr' => array('style' => 'border: 1px solid #900;'),
	'fields' => array(
		'name' => array_merge(\runner::config("property.label"), array(
			'selector' => '.rr-review-name',
		)),
		'email' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-review-email',
		)),
		'date' => array_merge(\runner::config("property.date"), array(
			'selector' => '.rr-review-date',
			'default' => time(),
		)),
		'avatar' => array_merge(\runner::config("property.leadimage"), array(
			'selector' => '.rr-review-avatar',
		)),
		'data_avatar' => array_merge(\runner::config("property.data_leadimage"), array(
			'selector' => '.rr-review-data_avatar',
		)),
		'subject' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-review-subject',
		)),
		'comment' => array_merge(\runner::config("property.type.textarea"), array(
			'selector' => '.rr-review-comment',
		)),
		'model_reference' => array_merge(\runner::config("property.type.int"), array(
			'selector' => '.rr-review-model_reference',
		)),
		'rate' => array_merge(\runner::config("property.type.int"), array(
			'selector' => '.rr-review-rate',
		)),
		'nonce' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-review-nonce',
		)),
		'ip_address' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-review-ip_address',
		)),
		'user_agent' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-review-user_agent',
		)),
	),
);