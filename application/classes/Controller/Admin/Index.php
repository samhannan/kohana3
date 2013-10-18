<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Index extends Controller_Admin_Admin {

	public function action_index()
	{
		$view = View::factory('pages/home', array('var'=>'testing'));
		$this->content = $view->render();
	}

} // End Welcome
