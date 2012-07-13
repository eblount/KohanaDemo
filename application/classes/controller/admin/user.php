<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_User extends Useradmin_Controller_Admin_User {
	public $user_model_fields = array(
		'username', 
		'password', 
		'email',
		'name'
	);
}