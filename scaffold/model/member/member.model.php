<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2013.11.15.
 * Time: 11:35
 */

namespace model;

class member extends \Routerunner\BaseModel {
	public $id;
	public $name;
	public $email;
	public $pwd;
	public $reg_date;
	public $confirm_date;
	public $last_login;
	public $last_ip;
	public $last_user_agent;
	public $fbconnect;
	public $gpconnect;
	public $twconnect;
	public $lnconnect;
	public $licence;
}