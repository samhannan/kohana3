<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Static pages (no controller)
 */
Route::set('static', '<page>',
	array('page' => '(about)(/?)(.*)'))
	->defaults(array(
		'controller' => 'static',
		'action' => 'index',
));


/**
 * Admin - logout
 */
Route::set('admin_logout', '<directory>/logout',
	array('directory' => '(admin)' ))
	->defaults(array(
		'controller' => 'login',
		'action' => 'logout'
));
/**
 * Admin - main admin route. maps /admin/<controller>/<action>/<id>
 */
Route::set('admin', '<directory>(/<controller>(/<action>(/<id>)))',
    array(
    	'directory' => '(admin)',
    	'id' => '\d*',
    ))
	->filter(function($route, $params, $request) {
		return Controller_Admin_Admin::check_user($params);
	})
	->defaults(array(
		'controller' => 'index',
		'action'     => 'index',
		'id'		 =>  NULL,
));


/**
 * Default route
 */
Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'welcome',
		'action'     => 'index',
));