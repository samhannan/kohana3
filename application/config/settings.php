<?php defined('SYSPATH') OR die('No direct access allowed.');

switch($_SERVER['HTTP_HOST']) {
	case 'kohana3.spotting.office.com':
		$conf = array(
			'mode' => 'local',
			'debug' => true
		);
	break;
	case 'site.dev.com':
		$conf = array(
			'mode' => 'test',
			'debug' => false
		);
	break;
	default:
		$conf = array(
			'mode' => 'live',
			'debug' => false
		);
	break;
}

$conf['site_name'] = 'Kohana Test';

return $conf;