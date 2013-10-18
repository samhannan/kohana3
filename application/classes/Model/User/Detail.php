<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_User_Detail extends ORM {

	protected $_table_name = 'user_detail';

	// Relationships
	protected $_belongs_to = array(
		'user' => array('model' => 'User'),
	);

	protected $_updated_column = array(
		'column' => 'date_upd',
		'format' => TRUE,
	);

	public function rules() {
		return array(
			'user_id' => array(
				array('not_empty'),
				array('numeric', array(':value')),
			),
			'firstname' => array(
				array('not_empty'),
				array('max_length', array(':value', 50)),
			),
			'surname' => array(
				array('not_empty'),
				array('max_length', array(':value', 50)),
			)
		);
	}
}
