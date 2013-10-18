<?php defined('SYSPATH') OR die('No direct script access.');

class HTTP_Exception_404 extends Kohana_HTTP_Exception_404
{
	protected $_code = 404;
	protected $page_title = 'Page not found';
}
