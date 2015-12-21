<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2013.11.15.
 * Time: 11:35
 */

namespace model;

class media extends \Routerunner\BaseModel {
	public $id;
	public $label;
	public $date;
	public $description;
	public $category;
	public $tag;
	public $thumbnail;
	public $data_thumbnail;
	public $image;
	public $data_image;
	public $videourl;
	public $downloadurl;
}