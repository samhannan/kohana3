<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Frontend {

	public function action_index()
	{
		$view = View::factory('pages/home', array());
		$this->content = $view;
	}

} // End Welcome
