<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_App {
	public $auth_required = 'login';

	public function action_index()
	{
		$this->template->content = 'hello, world!';
	}

} // End Welcome
