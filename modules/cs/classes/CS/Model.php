<?php defined('SYSPATH') OR die('No direct script access.');

abstract class CS_Model extends Kohana_Model
{
	protected $_created_column = array(
			'column' => 'date_add',
			'format' => TRUE,
	);

	protected $_updated_column = array(
			'column' => 'date_upd',
			'format' => TRUE,
	);
}
