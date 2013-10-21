<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Index extends Controller_Admin_Admin {

	public function action_index()
	{
		$this->section = 'Admin home';
		$view = View::factory('admin/pages/home');
		$this->content = $view->render();
	}

} // End Welcome
