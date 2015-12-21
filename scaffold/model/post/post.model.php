<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2013.11.15.
 * Time: 11:35
 */

namespace model;

class post extends \Routerunner\BaseModel {
	public $id;
	public $label;
	public $date;
	public $lead;
	public $content;
	public $tag;
	public $author;
	public $leadimage;
	//public $data_leadimage;
	public $contentimage;
	//public $data_contentimage;
}