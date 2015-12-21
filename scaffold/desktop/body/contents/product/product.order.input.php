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
	'name' => 'order',
	'error_format' => '<p class="err">%s</p>'.PHP_EOL,
	'from' => 'order',
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
	'product' => array(
		'type' => 'hidden',
		'field' => 'product',
		'input-id' => 'input_product',
		'value' => \model::property("id")
	),
	'item' => array(
		'selector' => '#input_item',
		'type' => 'text',
		'field' => 'item',
		'label' => 'item *',

		'input-id' => 'input_item',
		'class' => '',

		'mandatory' => array(
			'value' => true,
			'msg' => 'Required field: item!',
		),

		'value' => (isset($_POST["item"]) ? $_POST["item"] : "")
	),
	'submit' => array(
		'type' => 'submit',
		'field' => 'submit',
		'input-id' => 'input_submit',
		'value' => 'Submit'
	),
);

$unset = array(
	"nonce",
	"submit",
);