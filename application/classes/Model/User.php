<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_User extends Model_Auth_User
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
				//array(array($this, 'unique'), array('email', ':value')),
			),
		);
	}

	protected $_created_column = array(
		'column' => 'date_add',
		'format' => TRUE,
	);

	protected $_updated_column = array(
		'column' => 'date_upd',
		'format' => TRUE,
	);


}
