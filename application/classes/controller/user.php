<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Userbootstrap_Controller_User {
	public $user_model_fields = array(
		'username', 
		'password', 
		'email',
		'name'
	);
}