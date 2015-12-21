<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2013.11.15.
 * Time: 11:35
 */

namespace model;

class message extends \Routerunner\BaseModel {
	public $id;
	public $name;
	public $email;
	public $date;
	public $avatar;
	public $data_avatar;
	public $subject;
	public $comment;
	public $model_reference;
	public $option;
	public $nonce;
	public $ip_address;
	public $user_agent;
}