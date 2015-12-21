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
	'wrapper_class' => 'rr-comment',
	'child_selector' => '.rr-comment-model',
	//'wrapper_attr' => array('style' => 'border: 1px solid #900;'),
	'fields' => array(
		'name' => array_merge(\runner::config("property.label"), array(
			'selector' => '.rr-comment-name',
		)),
		'email' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-comment-email',
		)),
		'date' => array_merge(\runner::config("property.date"), array(
			'selector' => '.rr-comment-date',
			'default' => time(),
		)),
		'avatar' => array_merge(\runner::config("property.leadimage"), array(
			'selector' => '.rr-comment-avatar',
		)),
		'data_avatar' => array_merge(\runner::config("property.data_leadimage"), array(
			'selector' => '.rr-comment-data_avatar',
		)),
		'subject' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-comment-subject',
		)),
		'comment' => array_merge(\runner::config("property.type.textarea"), array(
			'selector' => '.rr-comment-comment',
		)),
		'model_reference' => array_merge(\runner::config("property.type.int"), array(
			'selector' => '.rr-comment-model_reference',
		)),
		'reply' => array_merge(\runner::config("property.type.int"), array(
			'selector' => '.rr-comment-reply',
		)),
		'nonce' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-comment-nonce',
		)),
		'ip_address' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-comment-ip_address',
		)),
		'user_agent' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-comment-user_agent',
		)),
	),
);