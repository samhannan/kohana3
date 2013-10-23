<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-21 11:38:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Frontend' not found ~ APPPATH\classes\Controller\Welcome.php [ 3 ] in file:line
2013-10-21 11:38:50 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 11:40:33 --- EMERGENCY: ErrorException [ 1 ]: Class 'CS_Controller_Frontend' not found ~ MODPATH\cs\classes\Controller\Frontend.php [ 3 ] in file:line
2013-10-21 11:40:33 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 11:40:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'CS_Controller_Frontend' not found ~ MODPATH\cs\classes\Controller\Frontend.php [ 3 ] in file:line
2013-10-21 11:40:46 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 11:43:23 --- EMERGENCY: Kohana_Exception [ 0 ]: The detail property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-21 11:43:23 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('detail')
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(96): Kohana_ORM->__get('detail')
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(21): Controller_Admin_Admin->setAdditionalVars()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603