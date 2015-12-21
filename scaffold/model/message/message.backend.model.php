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
	'wrapper_class' => 'rr-message',
	'child_selector' => '.rr-message-model',
	//'wrapper_attr' => array('style' => 'border: 1px solid #900;'),
	'fields' => array(
		'name' => array_merge(\runner::config("property.label"), array(
			'selector' => '.rr-message-name',
		)),
		'email' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-message-email',
		)),
		'date' => array_merge(\runner::config("property.date"), array(
			'selector' => '.rr-message-date',
			'default' => time(),
		)),
		'avatar' => array_merge(\runner::config("property.leadimage"), array(
			'selector' => '.rr-message-avatar',
		)),
		'data_avatar' => array_merge(\runner::config("property.data_leadimage"), array(
			'selector' => '.rr-message-data_avatar',
		)),
		'subject' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-message-subject',
		)),
		'comment' => array_merge(\runner::config("property.type.textarea"), array(
			'selector' => '.rr-message-comment',
		)),
		'model_reference' => array_merge(\runner::config("property.type.int"), array(
			'selector' => '.rr-message-model_reference',
		)),
		'option' => array_merge(\runner::config("property.type.int"), array(
			'selector' => '.rr-message-option',
		)),
		'nonce' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-message-nonce',
		)),
		'ip_address' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-message-ip_address',
		)),
		'user_agent' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-message-user_agent',
		)),
	),
);