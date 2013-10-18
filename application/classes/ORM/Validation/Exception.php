<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * ORM Validation exceptions.
 *
 * @package    Kohana/ORM
 * @author     Kohana Team
 * @copyright  (c) 2008-2009 Kohana Team
 * @license    http://kohanaphp.com/license
 */
class ORM_Validation_Exception extends Kohana_ORM_Validation_Exception
{
	public function errors($directory = NULL, $translate = TRUE)
	{
		/**
		 * If not dir passed to method, we want to display the default error messages
		 * in /messages/validation as oppose to the field names, which kohana defaults to.
		 */
		if(is_null($directory)) {
			$directory = 'validation';
		}
		return $this->generate_errors($this->_alias, $this->_objects, $directory, $translate);
	}
}
