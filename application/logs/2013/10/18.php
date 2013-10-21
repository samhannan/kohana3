<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-18 06:12:06 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-18 06:12:06 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#2 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-18 06:13:01 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-18 06:13:01 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#2 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-18 06:16:03 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/users was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-18 06:16:03 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#4 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-18 07:34:50 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-18 07:34:50 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#2 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-18 08:46:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: arrUser ~ APPPATH\classes\Controller\Admin\Admin.php [ 96 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:96
2013-10-18 08:46:52 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 96, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(21): Controller_Admin_Admin->getAdditionalVars()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#8 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:96
2013-10-18 09:00:21 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\views\admin\pages\grid.php [ 4 ] in file:line
2013-10-18 09:00:21 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-18 09:41:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: submit ~ APPPATH\classes\FormBuilder.php [ 66 ] in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:66
2013-10-18 09:41:31 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 66, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(30): FormBuilder->close()
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(44): FormBuilder->build()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:66
2013-10-18 09:41:39 --- EMERGENCY: ErrorException [ 2 ]: sprintf(): Too few arguments ~ APPPATH\classes\FormBuilder.php [ 67 ] in file:line
2013-10-18 09:41:39 --- NOTICE: #0 [internal function]: Kohana_Core::error_handler(2, 'sprintf(): Too ...', 'C:\sites\KOHANA...', 67, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(67): sprintf('<div class='inp...', '<input type="su...')
#2 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(30): FormBuilder->close()
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(44): FormBuilder->build()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-18 09:58:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: grid ~ APPPATH\views\admin\pages\grid.php [ 3 ] in C:\sites\KOHANA-3.3.1\application\views\admin\pages\grid.php:3
2013-10-18 09:58:50 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\pages\grid.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 3, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Index.php(9): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#10 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\pages\grid.php:3
2013-10-18 09:59:46 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Admin\Admin.php [ 94 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:94
2013-10-18 09:59:46 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(94): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\sites\KOHANA...', 94, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(21): Controller_Admin_Admin->setAdditionalVars()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#8 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:94
2013-10-18 10:15:35 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function str_len() ~ APPPATH\classes\Controller\Admin\User.php [ 75 ] in file:line
2013-10-18 10:15:35 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-18 10:28:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function array_find() ~ APPPATH\classes\Controller\Admin\User.php [ 73 ] in file:line
2013-10-18 10:28:44 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-18 11:00:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: cols ~ APPPATH\classes\Controller\Admin\User.php [ 73 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php:73
2013-10-18 11:00:01 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(73): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 73, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php:73
2013-10-18 11:10:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: tooltip ~ APPPATH\classes\FormBuilder.php [ 107 ] in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:107
2013-10-18 11:10:41 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(107): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\sites\KOHANA...', 107, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(29): FormBuilder->getFields()
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(45): FormBuilder->build()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:107
2013-10-18 11:11:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: tooltip ~ APPPATH\classes\FormBuilder.php [ 107 ] in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:107
2013-10-18 11:11:53 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(107): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\sites\KOHANA...', 107, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(29): FormBuilder->getFields()
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(45): FormBuilder->build()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:107
2013-10-18 11:11:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: tooltip ~ APPPATH\classes\FormBuilder.php [ 107 ] in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:107
2013-10-18 11:11:54 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(107): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\sites\KOHANA...', 107, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(29): FormBuilder->getFields()
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(45): FormBuilder->build()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:107
2013-10-18 11:12:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: tooltip ~ APPPATH\classes\FormBuilder.php [ 109 ] in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:109
2013-10-18 11:12:46 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(109): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\sites\KOHANA...', 109, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(29): FormBuilder->getFields()
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(45): FormBuilder->build()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:109
2013-10-18 11:15:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: field ~ APPPATH\classes\FormBuilder.php [ 88 ] in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:88
2013-10-18 11:15:46 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(88): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\sites\KOHANA...', 88, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(29): FormBuilder->getFields()
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(45): FormBuilder->build()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:88
2013-10-18 11:16:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: field ~ APPPATH\classes\FormBuilder.php [ 88 ] in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:88
2013-10-18 11:16:13 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(88): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\sites\KOHANA...', 88, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(29): FormBuilder->getFields()
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(45): FormBuilder->build()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:88
2013-10-18 11:16:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: tooltip ~ APPPATH\classes\FormBuilder.php [ 114 ] in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:114
2013-10-18 11:16:46 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(114): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\sites\KOHANA...', 114, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(29): FormBuilder->getFields()
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(45): FormBuilder->build()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:114
2013-10-18 11:17:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: tooltip ~ APPPATH\classes\FormBuilder.php [ 114 ] in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:114
2013-10-18 11:17:10 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(114): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\sites\KOHANA...', 114, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(29): FormBuilder->getFields()
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(45): FormBuilder->build()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:114
2013-10-18 11:17:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: tooltip ~ APPPATH\classes\FormBuilder.php [ 114 ] in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:114
2013-10-18 11:17:46 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(114): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\sites\KOHANA...', 114, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(29): FormBuilder->getFields()
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(45): FormBuilder->build()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:114
2013-10-18 11:18:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\FormBuilder.php [ 84 ] in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:84
2013-10-18 11:18:37 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(84): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\sites\KOHANA...', 84, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(29): FormBuilder->getFields()
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(45): FormBuilder->build()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:84
2013-10-18 11:18:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\FormBuilder.php [ 85 ] in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:85
2013-10-18 11:18:51 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(85): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\sites\KOHANA...', 85, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(29): FormBuilder->getFields()
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(45): FormBuilder->build()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:85
2013-10-18 11:19:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\FormBuilder.php [ 84 ] in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:84
2013-10-18 11:19:16 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(84): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\sites\KOHANA...', 84, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(29): FormBuilder->getFields()
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(45): FormBuilder->build()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:84
2013-10-18 11:19:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\FormBuilder.php [ 85 ] in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:85
2013-10-18 11:19:23 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(85): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\sites\KOHANA...', 85, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(29): FormBuilder->getFields()
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(45): FormBuilder->build()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:85
2013-10-18 11:21:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: attr ~ APPPATH\classes\FormBuilder.php [ 84 ] in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:84
2013-10-18 11:21:01 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(84): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\sites\KOHANA...', 84, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(29): FormBuilder->getFields()
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(45): FormBuilder->build()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:84
2013-10-18 11:21:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: tooltip ~ APPPATH\classes\FormBuilder.php [ 107 ] in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:107
2013-10-18 11:21:22 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(107): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\sites\KOHANA...', 107, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(29): FormBuilder->getFields()
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(45): FormBuilder->build()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:107
2013-10-18 11:21:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: tooltip ~ APPPATH\classes\FormBuilder.php [ 109 ] in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:109
2013-10-18 11:21:35 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(109): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\sites\KOHANA...', 109, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php(29): FormBuilder->getFields()
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(45): FormBuilder->build()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\application\classes\FormBuilder.php:109
2013-10-18 12:00:03 --- EMERGENCY: HTTP_Exception_404 [ 404 ]:  ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:37
2013-10-18 12:00:03 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(37): Kohana_HTTP_Exception::factory(404)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(19): Controller_Admin_Admin->checkParam('1')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#8 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:37
2013-10-18 12:01:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Admin_User::$css ~ APPPATH\classes\Controller\Frontend.php [ 111 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php:111
2013-10-18 12:01:01 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(111): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 111, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(34): Controller_Frontend->get_assets()
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(20): Controller_Frontend->getHeader()
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(23): Controller_Frontend->after()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#10 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php:111
2013-10-18 12:01:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Admin_User::$css ~ APPPATH\classes\Controller\Frontend.php [ 111 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php:111
2013-10-18 12:01:26 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(111): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 111, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(34): Controller_Frontend->get_assets()
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(20): Controller_Frontend->getHeader()
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(23): Controller_Frontend->after()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#10 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php:111