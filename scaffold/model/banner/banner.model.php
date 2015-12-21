<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.01.
 * Time: 15:45
 */

namespace model;

class banner extends \Routerunner\BaseModel {
	public $id;
	public $label;
	public $description;
	public $link;
	public $addon_class;
	public $image;
	public $data_image;
	public $html_code;
}