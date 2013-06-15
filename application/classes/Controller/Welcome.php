<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$view = View::factory('welcome')
			->set('site_name','Egotist')
			->set('random',rand(1,10));
		$this->response->body($view);		
	}

} // End Welcome
