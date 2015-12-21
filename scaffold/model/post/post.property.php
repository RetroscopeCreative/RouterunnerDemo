<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2013.11.15.
 * Time: 11:29
 */
$date = function($model) {
	return rr_property_date($model);
};
$date_str = function($model) {
	return rr_property_date_str($model);
};
$image = function($model, $value, $property) {
	return rr_property_image($model, $property);
};
$tag = function($model) {
	return rr_property_tag($model);
};
$related = function($model) {
	return rr_property_related($model);
};