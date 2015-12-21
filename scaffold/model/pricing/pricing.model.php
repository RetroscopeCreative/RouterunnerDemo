<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.01.
 * Time: 15:45
 */

namespace model;

class pricing extends \Routerunner\BaseModel {
	public $id;
	public $label;
	public $description;
	public $addon_class;
	public $content;
	public $price;
	public $currency;
	public $link;
	public $button;
}