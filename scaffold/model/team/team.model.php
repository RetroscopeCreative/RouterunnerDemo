<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.01.
 * Time: 15:45
 */

namespace model;

class team extends \Routerunner\BaseModel {
	public $id;
	public $name;
	public $date;
	public $position;
	public $lead;
	public $content;
	public $tag;
	public $leadimage;
	public $data_leadimage;
	public $contentimage;
	public $data_contentimage;
	public $email;
	public $phone;
	public $mobile;
	public $contact;
	public $other_contact;
}