<?php defined('SYSPATH') OR die('No direct access allowed.');

$conf = array (
	'default' => array(
		'type'       => 'MySQL',
		'table_prefix' => 'tbl',
		'charset'      => 'utf8',
		'caching'      => FALSE,
	)
);

switch(Kohana::$config->load('settings.mode')) {
	case 'local':
		$connection = array(
			'hostname'   => 'localhost',
			'database'   => 'kohana_test',
			'username'   => 'sam',
			'password'   => 'GKwM5NmHFA',
			'persistent' => FALSE,
		);
	break;
	case 'dev':
		$connection = array(
			'hostname'   => 'devhost',
			'database'   => 'kohana',
			'username'   => FALSE,
			'password'   => FALSE,
			'persistent' => FALSE,
		);
	break;
	default:
		$connection = array(
			'hostname'   => 'livehost',
			'database'   => 'kohana',
			'username'   => FALSE,
			'password'   => FALSE,
			'persistent' => FALSE,
		);
	break;
}

$conf['default']['connection'] = $connection;

return $conf;