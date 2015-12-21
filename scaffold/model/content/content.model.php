<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2013.11.15.
 * Time: 11:35
 */

namespace model;

class content extends \Routerunner\BaseModel {
	public $id;
	public $label;
	public $content;
	public $tag;
	public $author;
	public $contentimage;
	//public $data_contentimage;
}