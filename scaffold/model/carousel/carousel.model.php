<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.01.
 * Time: 15:45
 */

namespace model;

class carousel extends \Routerunner\BaseModel {
	public $id;
	public $label;
	public $lead;
	public $link;
	public $button;
	public $addon_class;
	public $leadimage;
	public $data_leadimage;
	public $image;
	public $data_image;
}