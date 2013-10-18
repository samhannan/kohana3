<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Login extends Controller_Admin_Admin {

	protected $template = 'login';

	/**
	 * Login
	 */
	public function action_index()
	{
		$view = View::factory('admin/pages/login');
		$view->bind('errors', $errors);

		$form = new FormBuilder(Kohana::$config->load('forms/admin/user_login.conf'), 'forms/admin/default');
		$form = $form->build();
		$view->set('form', $form);

		// Login form submission
		if($post = $this->request->post()) {
			$validation = Validation::factory($post)
				->rule('email', 'not_empty')
				->rule('email', 'email')
				->rule('password', 'not_empty');

			if($validation->check()) {
				if(Auth::instance()->login($post['email'], $post['password'])) {
					HTTP::redirect('admin');
				} else {
					$validation->error('password', 'invalid_login');
				}
			}
			$errors = $validation->errors('model/user');
		}

		$this->content = $view->render();
	}

	/**
	 * Logout
	 */
	public function action_logout()
	{
		Auth::instance()->logout();
		HTTP::redirect('admin');
	}
}