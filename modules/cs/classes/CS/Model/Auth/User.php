<?php defined('SYSPATH') OR die('No direct access allowed.');

class CS_Model_Auth_User extends ORM
{
	protected $_has_many = array(
		'user_tokens' => array('model' => 'User_Token'),
		'roles'       => array('model' => 'Role', 'through' => 'roles_users'),
	);

	protected $_has_one = array(
		'detail'	  => array('model' => 'User_Detail', 'foreign_key' => 'user_id'),
	);

	public function rules()
	{
		return array(
			'username' => array(),
			'password' => array(
				array('not_empty'),
			),
			'email' => array(
				array('not_empty'),
				array('email'),
			),
		);
	}

}
