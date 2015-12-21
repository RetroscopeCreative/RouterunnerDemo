<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.01.
 * Time: 15:45
 */

$select = array(
	"id" => "oc_category.category_id",
	"cat_url" => "oc_url_alias.keyword",
	"language_id" => 2,
	"label" => "oc_category_description.name",
	"description" => "oc_category_description.description",
	"image" => "oc_category.image",
	"public" => 1,
);

$from = "oc_category";

$leftJoin = array(
	"oc_category_description ON oc_category_description.category_id = oc_category.category_id AND oc_category_description.language_id = " . \runner::config("oc_lang"),
	"oc_url_alias ON oc_url_alias.query = CONCAT('category_id=', CAST(oc_category.category_id AS char(5)))"
);
$orderBy = "oc_category.sort_order";

$where = array(
	"oc_category.parent_id = ?" => 0,
	"oc_category.status = ?" => 1,
);
$primary_key = 'id';

\runner::now("debug::model->load", false);

$force_list = true;
