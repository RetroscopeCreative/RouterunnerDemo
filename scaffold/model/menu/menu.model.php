<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.01.
 * Time: 15:45
 */

namespace model;

class menu extends \Routerunner\BaseModel {
	public $id;
	public $label;
	public $date;
	public $description;
	public $addon_class;
	public $option;
}