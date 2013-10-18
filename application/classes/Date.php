<?php defined('SYSPATH') OR die('No direct script access.');

class Date extends Kohana_Date
{
	public static function DBDateTime($datetime='now') {
		return self::formatted_time($datetime, 'Y-m-d H:i:s');
	}
}
