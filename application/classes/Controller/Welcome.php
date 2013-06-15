<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {

	public function action_index()
	{
		$content = View::factory('welcome')		
			->bind('random', $random);			
		$random = rand(1,10);
		$content->site_name = 'Egotic Beta';			
		$this->template->content = $content;		
	}

} // End Welcome
