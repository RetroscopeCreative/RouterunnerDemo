<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.01.
 * Time: 15:45
 */

namespace model;

class product extends \Routerunner\BaseModel {
	public $id;
	public $label;
	public $date;
	public $lead;
	public $content;
	public $category;
	//public $tag;
	public $leadimage;
	//public $data_leadimage;
	public $contentimage;
	//public $data_contentimage;
	public $price;
}