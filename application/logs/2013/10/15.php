<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-15 03:06:33 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-15 03:06:33 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#2 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-15 03:06:45 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Admin\User.php [ 28 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php:28
2013-10-15 03:06:45 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(28): Kohana_Core::error_handler(8, 'Array to string...', 'C:\sites\KOHANA...', 28, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php:28
2013-10-15 03:06:59 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Admin\User.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php:29
2013-10-15 03:06:59 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(29): Kohana_Core::error_handler(8, 'Array to string...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php:29
2013-10-15 03:21:02 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Validation::rules() must be an array, string given, called in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php on line 30 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 238 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Validation.php:238
2013-10-15 03:21:02 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Validation.php(238): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\sites\KOHANA...', 238, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(30): Kohana_Validation->rules('email', '')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#8 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Validation.php:238
2013-10-15 03:21:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: surname ~ APPPATH\classes\Controller\Admin\User.php [ 32 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php:32
2013-10-15 03:21:09 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(32): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\sites\KOHANA...', 32, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php:32
2013-10-15 06:55:14 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 06:55:14 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#6 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:14:26 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-15 10:14:26 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#2 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-15 10:14:35 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:14:35 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#6 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:15:09 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:15:09 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#6 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:15:21 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:15:21 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#6 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:25:14 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ APPPATH\classes\Controller\Admin\Admin.php [ 12 ] in file:line
2013-10-15 10:25:14 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 10:25:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/999 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:25:34 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#6 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:25:38 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/1 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:25:38 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#6 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:25:44 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/2 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:25:44 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#6 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:26:12 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/2 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:26:12 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#6 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:26:16 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/2 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:26:16 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#6 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:26:33 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/2 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:26:33 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#6 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:26:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/2 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:26:36 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#6 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:26:42 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/2 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:26:42 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#6 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:26:42 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/2 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:26:42 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#6 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:28:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/user/index/2 ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-15 10:28:36 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#2 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-15 10:28:37 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/user/index/2 ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-15 10:28:37 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#2 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-15 10:28:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/2 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:28:39 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#4 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:28:50 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/2 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:28:50 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#4 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:28:51 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/2 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:28:51 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#4 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:28:57 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:28:57 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#4 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:29:43 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:29:43 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#4 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:29:44 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:29:44 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#4 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:29:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:29:48 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#4 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:29:52 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/add was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:29:52 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#4 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:30:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/9999999 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:30:39 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#6 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:30:50 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/9999999 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:30:50 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#6 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:30:55 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/9999999 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:30:55 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#6 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:80
2013-10-15 10:31:06 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/9999999 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:31:06 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#4 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:31:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/9999999 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:31:36 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#4 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:31:36 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/9999999 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:31:36 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#4 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:31:43 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/9999999 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:31:43 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#4 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:31:44 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/9999999 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:31:44 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#4 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:31:47 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: The requested URL admin/user/9999999 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:31:47 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#4 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-15 10:31:52 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/user/add/9999999 ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-15 10:31:52 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#2 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-15 10:32:05 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/user/add/9999999 ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-15 10:32:05 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#2 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-15 10:32:05 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/user/add/9999999 ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-15 10:32:05 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#2 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-15 10:33:31 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-15 10:33:31 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#2 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-15 10:33:31 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-15 10:33:31 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#2 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-15 10:34:19 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ APPPATH\classes\Controller\Admin\Admin.php [ 13 ] in file:line
2013-10-15 10:34:19 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 10:34:20 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ APPPATH\classes\Controller\Admin\Admin.php [ 13 ] in file:line
2013-10-15 10:34:20 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 10:34:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\Admin\Admin.php [ 12 ] in file:line
2013-10-15 10:34:40 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 10:34:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\Controller\Admin\Admin.php [ 12 ] in file:line
2013-10-15 10:34:52 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 10:35:40 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ APPPATH\classes\Controller\Admin\Admin.php [ 14 ] in file:line
2013-10-15 10:35:40 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 10:36:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH\classes\Controller\Admin\Admin.php [ 19 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:19
2013-10-15 10:36:04 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 19, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(13): Controller_Admin_Admin->checkParam('99')
#2 [internal function]: Controller_Admin_Admin->__construct(Object(Request), Object(Response))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:19
2013-10-15 10:36:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH\classes\Controller\Admin\Admin.php [ 19 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:19
2013-10-15 10:36:06 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 19, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(13): Controller_Admin_Admin->checkParam('1')
#2 [internal function]: Controller_Admin_Admin->__construct(Object(Request), Object(Response))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:19
2013-10-15 10:36:14 --- EMERGENCY: HTTP_Exception_404 [ 404 ]:  ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:20
2013-10-15 10:36:14 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(20): Kohana_HTTP_Exception::factory(404)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(13): Controller_Admin_Admin->checkParam('1')
#2 [internal function]: Controller_Admin_Admin->__construct(Object(Request), Object(Response))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:20
2013-10-15 10:36:26 --- EMERGENCY: HTTP_Exception_404 [ 404 ]:  ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:21
2013-10-15 10:36:26 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(21): Kohana_HTTP_Exception::factory(404)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(13): Controller_Admin_Admin->checkParam('1')
#2 [internal function]: Controller_Admin_Admin->__construct(Object(Request), Object(Response))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:21
2013-10-15 10:36:55 --- EMERGENCY: HTTP_Exception_404 [ 404 ]:  ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:20
2013-10-15 10:36:55 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(20): Kohana_HTTP_Exception::factory(404)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(13): Controller_Admin_Admin->checkParam('1')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(69): Controller_Admin_Admin->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#8 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:20
2013-10-15 10:37:05 --- EMERGENCY: HTTP_Exception_404 [ 404 ]:  ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:21
2013-10-15 10:37:05 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(21): Kohana_HTTP_Exception::factory(404)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(13): Controller_Admin_Admin->checkParam('1')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(69): Controller_Admin_Admin->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#8 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:21
2013-10-15 10:38:01 --- EMERGENCY: HTTP_Exception_404 [ 404 ]:  ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:26
2013-10-15 10:38:01 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(26): Kohana_HTTP_Exception::factory(404)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(15): Controller_Admin_Admin->checkParam('999')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#8 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:26
2013-10-15 10:39:20 --- EMERGENCY: HTTP_Exception_404 [ 404 ]:  ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:30
2013-10-15 10:39:20 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(30): Kohana_HTTP_Exception::factory(404)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(15): Controller_Admin_Admin->checkParam('999')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#8 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:30
2013-10-15 10:49:55 --- EMERGENCY: Kohana_Exception [ 0 ]: The col property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-15 10:49:55 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('col')
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(48): Kohana_ORM->__get('col')
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(38): Controller_Admin_Admin->setPost(Object(Model_User))
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(21): Controller_Admin_Admin->checkParam('1')
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#10 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-15 10:50:07 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Admin\Admin.php [ 48 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:48
2013-10-15 10:50:07 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(48): Kohana_Core::error_handler(8, 'Array to string...', 'C:\sites\KOHANA...', 48, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(38): Controller_Admin_Admin->setPost(Object(Model_User))
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(21): Controller_Admin_Admin->checkParam('1')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:48
2013-10-15 10:50:15 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Admin\Admin.php [ 49 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:49
2013-10-15 10:50:15 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(49): Kohana_Core::error_handler(8, 'Array to string...', 'C:\sites\KOHANA...', 49, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(38): Controller_Admin_Admin->setPost(Object(Model_User))
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(21): Controller_Admin_Admin->checkParam('1')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:49
2013-10-15 10:50:58 --- EMERGENCY: HTTP_Exception_404 [ 404 ]:  ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:32
2013-10-15 10:50:58 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(32): Kohana_HTTP_Exception::factory(404)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(21): Controller_Admin_Admin->checkParam('1')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(69): Controller_Admin_Admin->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#8 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:32
2013-10-15 10:53:13 --- EMERGENCY: HTTP_Exception_404 [ 404 ]:  ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:32
2013-10-15 10:53:13 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(32): Kohana_HTTP_Exception::factory(404)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(21): Controller_Admin_Admin->checkParam('1')
#2 [internal function]: Controller_Admin_Admin->__construct(Object(Request), Object(Response))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:32
2013-10-15 10:54:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-15 10:54:34 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 10:55:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-15 10:55:13 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 10:55:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-15 10:55:35 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 10:55:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-10-15 10:55:36 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 10:59:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_LNUMBER ~ APPPATH\classes\Controller\Admin\Admin.php [ 56 ] in file:line
2013-10-15 10:59:08 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 11:01:28 --- EMERGENCY: ErrorException [ 1 ]: Call to private method Controller_Admin_Admin::setPost() from context 'Controller_Admin_User' ~ APPPATH\classes\Controller\Admin\User.php [ 28 ] in file:line
2013-10-15 11:01:28 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 11:30:38 --- EMERGENCY: ReflectionException [ 0 ]: Trying to invoke non static method Kohana_ORM::unique() without an object ~ SYSPATH\classes\Kohana\Validation.php [ 410 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Validation.php:410
2013-10-15 11:30:38 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(51): Kohana_Validation->check()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#8 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Validation.php:410
2013-10-15 11:43:27 --- EMERGENCY: Kohana_Exception [ 0 ]: The id property does not exist in the Model_User_Detail class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-15 11:43:27 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('id')
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(27): Kohana_ORM->__get('id')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#8 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:603
2013-10-15 11:56:55 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1357 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Model\Auth\User.php:201
2013-10-15 11:56:55 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Model\Auth\User.php(201): Kohana_ORM->update(Object(Validation))
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(62): Model_Auth_User->update_user(Array, Array)
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#8 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Model\Auth\User.php:201
2013-10-15 11:57:55 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '1-2' for key 1 [ INSERT INTO `tblroles_users` (`user_id`, `role_id`) VALUES ('1', '2'), ('1', 2) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-15 11:57:55 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(70): Kohana_ORM->add('roles', Array)
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-15 11:59:18 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '1-2' for key 1 [ INSERT INTO `tblroles_users` (`user_id`, `role_id`) VALUES ('1', '2'), ('1', 2) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-15 11:59:18 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(71): Kohana_ORM->add('roles', Array)
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-15 11:59:24 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '1-2' for key 1 [ INSERT INTO `tblroles_users` (`user_id`, `role_id`) VALUES ('1', '2'), ('1', 2) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-15 11:59:24 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(71): Kohana_ORM->add('roles', Array)
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-15 12:01:00 --- EMERGENCY: HTTP_Exception_404 [ 404 ]:  ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:30
2013-10-15 12:01:00 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(30): Kohana_HTTP_Exception::factory(404)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(15): Controller_Admin_Admin->checkParam('1')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#8 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:30
2013-10-15 12:02:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Admin\User.php [ 38 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php:38
2013-10-15 12:02:36 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 38, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php:38
2013-10-15 12:03:22 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'date_upd' in 'field list' [ UPDATE `tbluser_detail` SET `surname` = 'Han', `date_upd` = 1381856602 WHERE `id` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-15 12:03:22 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `tbluser...', false, Array)
#1 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\User.php(79): Kohana_ORM->save()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Admin_User->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#10 {main} in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251