<?php defined('SYSPATH') OR die('No direct access allowed.');

class CS_Model_Page extends ORM
{
	protected $_table_name = 'admin_pages';

	protected $_has_one = array(
		'section' => array('model' => 'Section', 'foreign_key' => 'section_id'),
	);

	public function rules()
	{
		return array(
			'page' => array(
				array('not_empty'),
				array('max_length', 100)
			),
			'role_id' => array(
				array('not_empty'),
				array('numeric'),
			),
			'section_id' => array(
				array('not_empty'),
				array('numeric'),
			)
		);
	}

	/**
	 * Retrieves pages for user
	 * @param object $user
	 */
	public function get_pages($user=false)
	{
		if(!$user) return false;

		$arrRoles = array();
		foreach($user->roles->find_all() as $role) {
			$arrRoles[] = $role->id;
		}

		$pages = ORM::factory('Page')->where('role_id', 'IN', $arrRoles)->find_all();

		foreach($pages AS $page) {
			echo $page->page;
		}
	}

}
