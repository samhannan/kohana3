<?php defined('SYSPATH') OR die('No direct access allowed.');

class CS_Model_Section extends Kohana_Model
{
	protected $_has_many = array(
		'pages'	 => array('model' => 'Pages')
	);

	public function rules()
	{
		return array(
			'section' => array(
				array('not_empty'),
				array('max_length', 100),
			),
		);
	}

}
