<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.01.
 * Time: 15:45
 */

namespace model;

class contact extends \Routerunner\BaseModel {
	public $id;
	public $label;
	public $description;
	public $email;
	public $phone;
	public $mobile;
	public $contact;
	public $other_contact;
	public $link;
	public $addon_class;
	public $image;
	public $data_image;
	public $html_code;
}