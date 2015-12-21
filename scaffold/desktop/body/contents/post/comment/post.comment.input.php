<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.07.17.
 * Time: 8:49
 */


$form = array(
	'method' => 'post',
	'xmethod' => 'post',
	'name' => 'comment',
	'error_format' => '<p class="err">%s</p>'.PHP_EOL,
	'from' => 'comment',
);

$nonce = uniqid(rand(0, 1000000));
if (!isset($_POST["nonce"])) {
	$_SESSION["nonce"] = \Routerunner\Crypt::crypter($nonce);
}

$input = array(
	'nonce' => array(
		'type' => 'hidden',
		'field' => 'nonce',
		'input-id' => 'input_nonce',
		'value' => $nonce
	),
	'date' => array(
		'type' => 'hidden',
		'field' => 'date',
		'input-id' => 'input_date',
		'value' => time()
	),
	'post' => array(
		'type' => 'hidden',
		'field' => 'post',
		'input-id' => 'input_post',
		'value' => \model::property("table_id")
	),
	'reply' => array(
		'type' => 'hidden',
		'field' => 'reply',
		'input-id' => 'input_reply',
		'value' => 0
	),
	'name' => array(
		'selector' => '#input_name',
		'type' => 'text',
		'field' => 'name',
		'label' => 'Name *',

		'input-id' => 'input_name',
		'class' => '',

		'mandatory' => array(
			'value' => true,
			'msg' => 'Required field: name!',
		),

		'value' => (isset($_POST["name"]) ? $_POST["name"] : "")
	),
	'email' => array(
		'selector' => '#input_email',
		'type' => 'text',
		'field' => 'email',
		'label' => 'Email *',

		'input-id' => 'input_email',
		'class' => '',

		'mandatory' => array(
			'value' => true,
			'msg' => 'Required field: e-mail address!',
		),
		'regexp' => array(
			array(
				'value' => '^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$',
				'options' => 'i',
				'msg' => 'Please give your proper e-mail address!',
			),
		),

		'value' => (isset($_POST["email"]) ? $_POST["email"] : "")
	),
	'avatar' => array(
		'selector' => '#input_avatar',
		'type' => 'text',
		'field' => 'avatar',
		'label' => 'Avatar',

		'input-id' => 'input_avatar',
		'class' => '',

		'value' => (isset($_POST["avatar"]) ? $_POST["avatar"] : "")
	),
	'subject' => array(
		'selector' => '#input_subject',
		'type' => 'text',
		'field' => 'subject',
		'label' => 'Subject',

		'input-id' => 'input_subject',
		'class' => '',

		'value' => (isset($_POST["subject"]) ? $_POST["subject"] : "")
	),
	'comment' => array(
		'selector' => '#input_comment',
		'type' => 'textarea',
		'field' => 'comment',
		'label' => 'Comment',

		'input-id' => 'input_comment',
		'class' => '',

		'mandatory' => array(
			'value' => true,
			'msg' => 'Required field: comment!',
		),
		'regexp' => array(
			array(
				'value' => '^.{6,}$',
				'options' => 'im',
				'msg' => 'Please leave a longer comment!',
			),
		),

		'value' => (isset($_POST["content"]) ? $_POST["content"] : "")
	),
	'submit' => array(
		'type' => 'submit',
		'field' => 'submit',
		'input-id' => 'input_submit',
		'value' => 'Submit'
	),
);

$unset = array(
	"submit"
);