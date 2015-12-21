<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.01.
 * Time: 15:45
 */

namespace model;

class category extends \Routerunner\BaseModel {
	public $id;
	public $cat_url;
	public $language_id;
	public $label;
	public $description;
	public $image;
	public $public;
}