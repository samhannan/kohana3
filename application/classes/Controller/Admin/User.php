<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_User extends Controller_Admin_Admin {

	protected $model = 'User';

	public function action_index()
	{
		$this->section = 'View Users';

		$view = View::factory('admin/pages/grid')
		->bind('errors', $errors);

		$grid = new DataGrid(Kohana::$config->load('datagrid/users'));
		$grid = $grid->build();

		$view->set('grid', $grid);
		$this->content = $view;
	}

	/*
	 * Add user
	 */
	public function action_add()
	{
		$this->section = 'Add User';
		$view = View::factory('admin/pages/form')
		->bind('errors', $errors);

		// Prepopulate post data if editing record
		$id = $this->request->param('id', false);
		$user = ORM::factory($this->model, $id);
		if($id) {
			$this->section = 'Edit User';
			if($this->request->method() !== 'POST') {
				// User
				parent::setPost($id);
				// User Detail
				parent::setPost($user->detail->id, 'user_detail');
			}
		}

		// Build form
		$formConf = Kohana::$config->load('forms/admin/user_create.conf');
		$formConf['submit']['attributes']['value'] = $this->section;
		$form = new FormBuilder($formConf, 'forms/admin/default');
		$form = $form->build();
		$view->set('form', $form);

		$user_detail = ORM::factory('User_Detail')->rules();

		if($this->request->method() == 'POST' && $post = $this->request->post()) {
			$user_rules = $user->rules();
			$user_detail_rules = ORM::factory('User_Detail')->rules();

			$external_validation = Validation::factory($post)
				->rule('role', 'is_not', array(array('0'), ':value'))
				->rules('email', $user_rules['email'])
				->rules('firstname', $user_detail_rules['firstname'])
				->rules('surname', $user_detail_rules['surname']);

			if(!$id) {
				$external_validation->rule('email', 'unique', array('User', 'email', ':value'));
				$external_validation->rule('password', 'not_empty');
			}

			if($external_validation->check()) {
				try {
					// Main user record
					// Username should match email
					$cols = array('email','username','password');
					$post['username'] = $post['email'];
					if(!$id) {
						$user->create_user($post, $cols);
					} else {
						$user->update_user($post, $cols);
						$user->remove('roles');
					}

					// Add roles
					$arrRoles = array($post['role']);
					if($post['role'] == 2) {
						$arrRoles[] = 1;
					}
					$user->add('roles', $arrRoles);

					// User detail record
					$user_detail = ORM::factory('User_Detail', $user->detail->id)
						->values($this->request->post(), array('user_id','firstname','surname'));
					$user_detail->user_id = $user->id;
					$user_detail->save();

				} catch (ORM_Validation_Exception $e) {
					$errors = $e->errors();
				}
			} else {
				$errors = $external_validation->errors('validation');
			}
		}
		$this->content = $view->render();
	}

	public function action_delete()
	{
		parent::delete();
	}
}
