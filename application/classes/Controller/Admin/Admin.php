<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Admin extends Controller_Frontend
{
	protected $template_dir = 'admin/template';
	protected $view_head = 'admin/component/header';
	protected $view_foot = 'admin/component/footer';
	protected $model = false;
	protected $section = false;
	protected $redir = 'admin';

	public function before()
	{
		$this->page_title = Kohana::$config->load('settings.site_name').' Admin';
		// Succesful form submission flag
		//$this->content->set('form_act', isset($_GET['act']) ? $_GET['act'] : null);
	}

	public function after()
	{
		if($id = $this->request->param('id', false)) {
			$this->checkParam($id);
		}
		$this->setAdditionalVars();
		$this->setAssets();
		// Form submission flag
		$this->content->set('form_act', isset($_GET['act']) ? $_GET['act'] : null);
		parent::after();
	}

	/**
	 * If ID set in URL, make sure record can be found in appropriate model
	 * @param numeric $id
	 */
	private function checkParam($id)
	{
		if(!$this->model) {
			throw HTTP_Exception::factory(404);
		}
		$obj = ORM::factory($this->model, $id);
		if(!$obj->loaded()) {
			throw HTTP_Exception::factory(404);
		}
	}

	/**
	 * Preloads post with record data
	 * Useful when editing existing records.
	 * @param int $id
	 */
	protected function setPost($id, $model=false)
	{
		$arrIgnore = array('date_add','date_upd','password');
		$model = $model ? $model : $this->model;
		$obj = ORM::factory($model, $id);
		if($obj->loaded()) {
			foreach($obj->table_columns() as $col) {
				if(!in_array($col['column_name'], $arrIgnore)) {
					Request::current()->post($col['column_name'], $obj->$col['column_name']);
				}
			}
		}
	}

	public function delete()
	{
		if($this->request->param('id', false) && $this->model) {
			$obj = ORM::factory($this->model, $this->request->param('id'));
			if($obj->loaded()) {
				$obj->delete();
				$url = explode('/', $_SERVER['PATH_INFO']);
				$url = $self[0].'/'.$self[1].'/'.$self[2];
				HTTP::redirect($url);
			}
		}
	}

	/**
	 * Used in admin routes to authenticate user
	 * @param array $params
	 */
	public static function check_user($params)
	{
		if(!Auth::instance()->get_user() &&
		!in_array($params['action'], array('login'))) {
			$params['controller'] = 'login';
			$params['action'] = 'index';
			return $params;
		}
		return true;
	}

	/**
	 * Sets additional vars for use in template
	 */
	private function setAdditionalVars()
	{
		$arrUser = false;
		if($user = Auth::instance()->get_user()) {
			$arrUser = array(
				'name' => $user->detail->firstname.' '.$user->detail->surname,
				'email' => $user->email
			);
		}
		$this->extra_vars = array(
			'section' => $this->section,
			'active_user' => $arrUser,
			'admin_pages' => $this->getAdminPages(),
		);
	}

	/**
	 * Set assets (js, css et)
	 */
	private function setAssets()
	{
		// Tipsy required for form
		if($this->request->action() == 'add') {
			$this->linked_js[] = '/assets/admin/js/plugin/jquery.tipsy.js';
			$this->linked_css[] = '/assets/admin/css/tipsy.css';
		}
	}

	/**
	 * Gets and sets admin pages
	 */
	private function getAdminPages()
	{
		if(Auth::instance()->logged_in()) {
			$objPages = ORM::factory('page')
				->get_pages(Auth::instance()->get_user());

			$arrPages = array();
			foreach($objPages as $page) {
				if(!array_key_exists($page->section->section, $arrPages)) {
					$arrPages[$page->section->section] = array();
				}
				$arrPages[$page->section->section][] = array(
					'page' => $page->page,
					'url' => $page->location
				);
			}
			return $arrPages;
		} else {
			return array();
		}
	}

	/**
	 * Get redir after successful form post
	 * @param boolean $id
	 */
	protected function getRedir($id)
	{
		$redir = 'admin/'.$this->request->controller().'/?act=';
		$redir .= $id ? 'upd' : 'add';
		return $redir;
	}

}









