<?php defined('SYSPATH') OR die('No direct script access.');

class Valid extends Kohana_Valid
{
	/**
	 * Returns false if specific value found
	 */
	public static function is_not($check=array(), $value)
	{
		if(in_array($value, $check)) {
			return false;
		}
	}

	/**
	 * Checks if record is unique
	 * Does the same job as ORM::unique()
	 */
	public static function unique($model, $col, $value)
	{
		$obj = ORM::factory($model)
			->where($col, '=', $value)
			->find();

		if($obj->loaded()) {
			return false;
		}
	}
}
