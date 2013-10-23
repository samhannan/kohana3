<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-22 03:54:50 --- EMERGENCY: Kohana_Exception [ 0 ]: The detail property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 03:54:50 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('detail')
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(96): Kohana_ORM->__get('detail')
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(21): Controller_Admin_Admin->setAdditionalVars()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 03:56:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: active_user ~ APPPATH\views\admin\template\master.php [ 9 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:9
2013-10-22 03:56:44 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 9, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\modules\cs\classes\CS\Controller\Frontend.php(25): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(23): CS_Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:9
2013-10-22 04:00:21 --- EMERGENCY: Kohana_Exception [ 0 ]: The detail property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 04:00:21 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('detail')
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(96): Kohana_ORM->__get('detail')
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(21): Controller_Admin_Admin->setAdditionalVars()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 04:00:45 --- EMERGENCY: Kohana_Exception [ 0 ]: The detail property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 04:00:45 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('detail')
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(96): Kohana_ORM->__get('detail')
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(21): Controller_Admin_Admin->setAdditionalVars()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 04:00:56 --- EMERGENCY: Kohana_Exception [ 0 ]: The detail property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 04:00:56 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('detail')
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(96): Kohana_ORM->__get('detail')
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(21): Controller_Admin_Admin->setAdditionalVars()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 04:01:23 --- EMERGENCY: Kohana_Exception [ 0 ]: The detail property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 04:01:23 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('detail')
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(96): Kohana_ORM->__get('detail')
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(21): Controller_Admin_Admin->setAdditionalVars()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 04:02:00 --- EMERGENCY: Kohana_Exception [ 0 ]: The detail property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 04:02:00 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('detail')
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(96): Kohana_ORM->__get('detail')
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(21): Controller_Admin_Admin->setAdditionalVars()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 04:02:33 --- EMERGENCY: Kohana_Exception [ 0 ]: The detail property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 04:02:33 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('detail')
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(96): Kohana_ORM->__get('detail')
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(21): Controller_Admin_Admin->setAdditionalVars()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 04:02:33 --- EMERGENCY: Kohana_Exception [ 0 ]: The detail property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 04:02:33 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('detail')
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(96): Kohana_ORM->__get('detail')
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(21): Controller_Admin_Admin->setAdditionalVars()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 04:02:39 --- EMERGENCY: Kohana_Exception [ 0 ]: The detail property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 04:02:39 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('detail')
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(96): Kohana_ORM->__get('detail')
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(21): Controller_Admin_Admin->setAdditionalVars()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 04:02:42 --- EMERGENCY: Kohana_Exception [ 0 ]: The detail property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 04:02:42 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('detail')
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(96): Kohana_ORM->__get('detail')
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(21): Controller_Admin_Admin->setAdditionalVars()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 04:04:41 --- EMERGENCY: Kohana_Exception [ 0 ]: The detail property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 04:04:41 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('detail')
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(96): Kohana_ORM->__get('detail')
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(21): Controller_Admin_Admin->setAdditionalVars()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 04:11:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_User_Detail' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-22 04:11:13 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 09:59:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'CS_ORM_Validation_Exception' not found ~ MODPATH\cs\classes\ORM\Validation\Exception.php [ 3 ] in file:line
2013-10-22 09:59:44 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 09:59:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'CS_ORM_Validation_Exception' not found ~ MODPATH\cs\classes\ORM\Validation\Exception.php [ 3 ] in file:line
2013-10-22 09:59:46 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 10:00:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'CS_ORM_Validation_Exception' not found ~ MODPATH\cs\classes\ORM\Validation\Exception.php [ 3 ] in file:line
2013-10-22 10:00:34 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 10:47:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Pages::$_object_name ~ MODPATH\orm\classes\Kohana\ORM.php [ 668 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:668
2013-10-22 10:47:54 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(668): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 668, Array)
#1 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('pages')
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Index.php(8): Kohana_ORM->__get('pages')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:668
2013-10-22 10:47:58 --- EMERGENCY: Kohana_Exception [ 0 ]: The page property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 10:47:58 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('page')
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Index.php(8): Kohana_ORM->__get('page')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#8 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 10:48:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Pages::$_object_name ~ MODPATH\orm\classes\Kohana\ORM.php [ 668 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:668
2013-10-22 10:48:02 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(668): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 668, Array)
#1 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('pages')
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Index.php(8): Kohana_ORM->__get('pages')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:668
2013-10-22 10:48:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Pages::$_object_name ~ MODPATH\orm\classes\Kohana\ORM.php [ 668 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:668
2013-10-22 10:48:23 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(668): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 668, Array)
#1 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('pages')
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Index.php(8): Kohana_ORM->__get('pages')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:668
2013-10-22 11:03:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'CS_Model_User' not found ~ MODPATH\cs\classes\Model\Auth\User.php [ 3 ] in file:line
2013-10-22 11:03:58 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:06:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Pages::$_object_name ~ MODPATH\orm\classes\Kohana\ORM.php [ 679 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:679
2013-10-22 11:06:24 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(679): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 679, Array)
#1 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('pages')
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Index.php(8): Kohana_ORM->__get('pages')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:679
2013-10-22 11:07:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Pages::$_object_name ~ MODPATH\orm\classes\Kohana\ORM.php [ 679 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:679
2013-10-22 11:07:58 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(679): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 679, Array)
#1 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('pages')
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Index.php(8): Kohana_ORM->__get('pages')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:679
2013-10-22 11:07:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Pages::$_object_name ~ MODPATH\orm\classes\Kohana\ORM.php [ 679 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:679
2013-10-22 11:07:58 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(679): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 679, Array)
#1 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('pages')
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Index.php(8): Kohana_ORM->__get('pages')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:679
2013-10-22 11:08:55 --- EMERGENCY: Kohana_Exception [ 0 ]: The roles property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 11:08:55 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('roles')
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Index.php(8): Kohana_ORM->__get('roles')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#8 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 11:09:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Page' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-22 11:09:09 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:09:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Page' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-22 11:09:10 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:09:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Page' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-22 11:09:23 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:09:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Role class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 11:09:44 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('users')
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Index.php(8): Kohana_ORM->__get('users')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#8 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 11:09:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Page' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-22 11:09:48 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:10:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Page' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-22 11:10:03 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:10:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Page' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-22 11:10:04 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:10:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Page' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-22 11:10:15 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:10:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Page' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-22 11:10:18 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:10:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Page::$_object_name ~ MODPATH\orm\classes\Kohana\ORM.php [ 679 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:679
2013-10-22 11:10:33 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(679): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 679, Array)
#1 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('pages')
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Index.php(8): Kohana_ORM->__get('pages')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:679
2013-10-22 11:17:38 --- EMERGENCY: Kohana_Exception [ 0 ]: The pages property does not exist in the Model_Role class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 11:17:38 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('pages')
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Index.php(8): Kohana_ORM->__get('pages')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#8 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 11:22:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting T_VARIABLE or '$' ~ MODPATH\cs\classes\CS\Model\Page.php [ 36 ] in file:line
2013-10-22 11:22:31 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:22:54 --- EMERGENCY: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 11:22:54 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('role')
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(124): Kohana_ORM->__get('role')
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(23): Controller_Admin_Admin->getAdminPages()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-22 11:31:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Page::where() ~ MODPATH\cs\classes\CS\Model\Page.php [ 43 ] in file:line
2013-10-22 11:31:25 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:32:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Page::where() ~ MODPATH\cs\classes\CS\Model\Page.php [ 43 ] in file:line
2013-10-22 11:32:45 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:33:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Page::where() ~ MODPATH\cs\classes\CS\Model\Page.php [ 43 ] in file:line
2013-10-22 11:33:02 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:33:28 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Page::where() ~ MODPATH\cs\classes\CS\Model\Page.php [ 43 ] in file:line
2013-10-22 11:33:28 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:34:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Page::where() ~ MODPATH\cs\classes\CS\Model\Page.php [ 43 ] in file:line
2013-10-22 11:34:18 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:34:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Page::where() ~ MODPATH\cs\classes\CS\Model\Page.php [ 43 ] in file:line
2013-10-22 11:34:27 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:35:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Page::where() ~ MODPATH\cs\classes\CS\Model\Page.php [ 43 ] in file:line
2013-10-22 11:35:51 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:36:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Model_Page' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-22 11:36:30 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:36:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'CS_Model_Page' not found ~ MODPATH\cs\classes\Model\Page.php [ 3 ] in file:line
2013-10-22 11:36:48 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:37:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'CS_Model_Page' not found ~ MODPATH\cs\classes\Model\Page.php [ 3 ] in file:line
2013-10-22 11:37:01 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:37:06 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Page::where() ~ MODPATH\cs\classes\CS\Model\Page.php [ 43 ] in file:line
2013-10-22 11:37:06 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:37:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Page::where() ~ APPPATH\classes\Controller\Admin\Admin.php [ 124 ] in file:line
2013-10-22 11:37:39 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 11:38:46 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''12'' at line 1 [ SELECT `tblpage`.`id` AS `id`, `tblpage`.`role_id` AS `role_id`, `tblpage`.`page` AS `page`, `tblpage`.`section_id` AS `section_id`, `tblpage`.`date_add` AS `date_add`, `tblpage`.`date_upd` AS `date_upd` FROM `tbladmin_pages` AS `tblpage` WHERE `role_id` IN '12' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-22 11:38:46 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `tblpage...', 'Model_Page', Array)
#1 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(124): Kohana_ORM->find_all()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(23): Controller_Admin_Admin->getAdminPages()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-22 11:39:02 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(12)'' at line 1 [ SELECT `tblpage`.`id` AS `id`, `tblpage`.`role_id` AS `role_id`, `tblpage`.`page` AS `page`, `tblpage`.`section_id` AS `section_id`, `tblpage`.`date_add` AS `date_add`, `tblpage`.`date_upd` AS `date_upd` FROM `tbladmin_pages` AS `tblpage` WHERE `role_id` IN '(12)' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-22 11:39:02 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `tblpage...', 'Model_Page', Array)
#1 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(124): Kohana_ORM->find_all()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(23): Controller_Admin_Admin->getAdminPages()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-22 11:39:08 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '12' at line 1 [ SELECT `tblpage`.`id` AS `id`, `tblpage`.`role_id` AS `role_id`, `tblpage`.`page` AS `page`, `tblpage`.`section_id` AS `section_id`, `tblpage`.`date_add` AS `date_add`, `tblpage`.`date_upd` AS `date_upd` FROM `tbladmin_pages` AS `tblpage` WHERE `role_id` IN 12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-22 11:39:08 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `tblpage...', 'Model_Page', Array)
#1 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(124): Kohana_ORM->find_all()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(23): Controller_Admin_Admin->getAdminPages()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-22 11:39:43 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(1,2)'' at line 1 [ SELECT `tblpage`.`id` AS `id`, `tblpage`.`role_id` AS `role_id`, `tblpage`.`page` AS `page`, `tblpage`.`section_id` AS `section_id`, `tblpage`.`date_add` AS `date_add`, `tblpage`.`date_upd` AS `date_upd` FROM `tbladmin_pages` AS `tblpage` WHERE `role_id` IN '(1,2)' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-22 11:39:43 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `tblpage...', 'Model_Page', Array)
#1 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\sites\KOHANA-3.3.1\modules\cs\classes\CS\Model\Page.php(43): Kohana_ORM->find_all()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(125): CS_Model_Page->get_pages(Object(Model_User))
#5 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(23): Controller_Admin_Admin->getAdminPages()
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#12 {main} in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-22 11:40:36 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(1,2)'' at line 1 [ SELECT `tblpage`.`id` AS `id`, `tblpage`.`role_id` AS `role_id`, `tblpage`.`page` AS `page`, `tblpage`.`section_id` AS `section_id`, `tblpage`.`date_add` AS `date_add`, `tblpage`.`date_upd` AS `date_upd` FROM `tbladmin_pages` AS `tblpage` WHERE `role_id` IN '(1,2)' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-22 11:40:36 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `tblpage...', 'Model_Page', Array)
#1 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\sites\KOHANA-3.3.1\modules\cs\classes\CS\Model\Page.php(43): Kohana_ORM->find_all()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(125): CS_Model_Page->get_pages(Object(Model_User))
#5 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(23): Controller_Admin_Admin->getAdminPages()
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#12 {main} in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-22 11:41:35 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\Kohana\Database.php [ 461 ] in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database.php:461
2013-10-22 11:41:35 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database.php(461): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\sites\KOHANA...', 461, Array)
#1 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote(Object(Database_MySQL_Result))
#2 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query\Builder\Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#3 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#5 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#6 C:\sites\KOHANA-3.3.1\modules\cs\classes\CS\Model\Page.php(37): Kohana_ORM->find_all()
#7 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(125): CS_Model_Page->get_pages(Object(Model_User))
#8 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(23): Controller_Admin_Admin->getAdminPages()
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#12 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#15 {main} in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database.php:461
2013-10-22 11:42:56 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\cs\classes\CS\Model\Page.php [ 45 ] in C:\sites\KOHANA-3.3.1\modules\cs\classes\CS\Model\Page.php:45
2013-10-22 11:42:56 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\cs\classes\CS\Model\Page.php(45): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\sites\KOHANA...', 45, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(125): CS_Model_Page->get_pages(Object(Model_User))
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(23): Controller_Admin_Admin->getAdminPages()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\cs\classes\CS\Model\Page.php:45
2013-10-22 11:43:01 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\cs\classes\CS\Model\Page.php [ 45 ] in C:\sites\KOHANA-3.3.1\modules\cs\classes\CS\Model\Page.php:45
2013-10-22 11:43:01 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\cs\classes\CS\Model\Page.php(45): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\sites\KOHANA...', 45, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(125): CS_Model_Page->get_pages(Object(Model_User))
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(23): Controller_Admin_Admin->getAdminPages()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\cs\classes\CS\Model\Page.php:45