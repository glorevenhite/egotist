<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$view = View::factory('welcome');		
		$view->site_name = 'Egotist';
		$view->random = rand(1,10);
		$this->response->body($view);		
	}

} // End Welcome
