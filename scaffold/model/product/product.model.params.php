<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.01.
 * Time: 15:45
 */

$select = array(
	"id" => "oc_product.product_id",
	"language_id" => 2,
	"label" => "oc_product_description.name",
	"date" => "oc_product.date_added",
	"lead" => "oc_product_description.description",
	"content" => "oc_product_description.description",
	"category" => "NULL",
	"tag" => "NULL",
	"leadimage" => "CONCAT('image/', oc_product.image)",
	"contentimage" => "CONCAT('image/', oc_product.image)",
	"price" => "oc_product.price",
);

$from = "oc_product";
$leftJoin = array(
	"oc_product_description ON oc_product_description.product_id = oc_product.product_id AND oc_product_description.language_id = " . \runner::config("oc_lang"),
	"oc_url_alias ON oc_url_alias.query = CONCAT('product_id=', CAST(oc_product.product_id AS char(5)))",
	"oc_product_image ON oc_product_image.product_id = oc_product.product_id",
	//"oc_product_to_category ON oc_product_to_category.product_id = oc_product.product_id",
);
$orderBy = "oc_product.sort_order";

$where = array(
	"oc_product.status = ?" => 1,
);

if (isset($runner->context) && $runner->context)  {
	if (isset($runner->context["direct"]) && ($result =
			\db::query("SELECT table_id FROM {PREFIX}models WHERE table_from = 'oc_product' AND reference = ?",
				array($runner->context["direct"])))) {
		$where["oc_product.product_id = ?"] =  $result[0]["table_id"];
		$force_view = true;
	} else {
		foreach ($runner->context as $context => $value) {
			$where[$context] = $value;
		}
	}
}
$primary_key = 'id';

\runner::now("debug::model->load", false);


