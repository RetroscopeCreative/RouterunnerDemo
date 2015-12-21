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
	'wrapper_class' => 'rr-member',
	'child_selector' => '.rr-member-model',
	//'wrapper_attr' => array('style' => 'border: 1px solid #900;'),
	'fields' => array(
		'name' => array_merge(\runner::config("property.label"), array(
			'selector' => '.rr-member-name',
		)),
		'email' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-member-email',
		)),
		'pwd' => array_merge(\runner::config("property.type.char"), array(
			'type' => 'password',
			'selector' => '.rr-member-pwd',
		)),
		'pwd_confirm' => array_merge(\runner::config("property.type.char"), array(
			'type' => 'password',
			'selector' => '.rr-member-pwd_confirm',
		)),
		'reg_date' => array_merge(\runner::config("property.date"), array(
			'selector' => '.rr-member-reg_date',
			'default' => time(),
		)),
		'confirm_date' => array_merge(\runner::config("property.date"), array(
			'selector' => '.rr-member-reg_date',
			'default' => time(),
		)),
		'last_login' => array_merge(\runner::config("property.date"), array(
			'selector' => '.rr-member-last_login',
		)),
		'last_ip' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-member-last_ip',
		)),
		'last_user_agent' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-member-last_user_agent',
		)),
		'fbconnect' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-member-fbconnect',
		)),
		'gpconnect' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-member-fbconnect',
		)),
		'twconnect' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-member-fbconnect',
		)),
		'lnconnect' => array_merge(\runner::config("property.type.char"), array(
			'selector' => '.rr-member-fbconnect',
		)),
		'licence' => array_merge(\runner::config("property.date"), array(
			'selector' => '.rr-member-licence',
		)),
	),
);