<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Frontend {

	public function action_index()
	{
		$view = View::factory('pages/home', array('var'=>'testing'));

		try {
			$user = ORM::factory('User')
				->values($this->request->post());
			$user->email = 'test@cs.com';
			$user->save();
		} catch (ORM_Validation_Exception $e) {
			$view->errors = $e->errors('model');
		}

		$this->content = $view->render();
	}

} // End Welcome
