<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-09 07:56:47 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Arr.php on line 433 and defined ~ SYSPATH\classes\Kohana\Arr.php [ 30 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Arr.php:30
2013-10-09 07:56:47 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\sites\KOHANA...', 30, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Arr.php(433): Kohana_Arr::is_assoc(1)
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Core.php(960): Kohana_Arr::merge(Array, 1)
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Validation.php(564): Kohana_Core::message('model/user', 'id.not_empty')
#4 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM\Validation\Exception.php(172): Kohana_Validation->errors('model/user', true)
#5 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM\Validation\Exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('user', Array, 'model', true)
#6 C:\sites\KOHANA-3.3.1\application\classes\Controller\Welcome.php(12): Kohana_ORM_Validation_Exception->errors('model')
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#13 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Arr.php:30
2013-10-09 08:48:24 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::where(), called in C:\sites\KOHANA-3.3.1\application\classes\Valid.php on line 10 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 1849 ] in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:1849
2013-10-09 08:48:24 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1849): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\sites\KOHANA...', 1849, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\Valid.php(10): Kohana_ORM->where(Array)
#2 [internal function]: Valid::email_unique('test@cs.com')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#4 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#5 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#6 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#7 C:\sites\KOHANA-3.3.1\application\classes\Controller\Welcome.php(11): Kohana_ORM->save()
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#14 {main} in C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php:1849
2013-10-09 09:06:50 --- EMERGENCY: View_Exception [ 0 ]: The requested view home could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 09:06:50 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('home')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('home', Array)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Welcome.php(7): Kohana_View::factory('home', Array)
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 09:25:56 --- EMERGENCY: View_Exception [ 0 ]: The requested view errors/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 09:25:56 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('errors/404')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('errors/404', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\HTTP\Exception\404.php(9): Kohana_View::factory('errors/404')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(114): HTTP_Exception_404->get_response()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 09:26:03 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/errors/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 09:26:03 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/errors/40...')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/errors/40...', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\HTTP\Exception\404.php(9): Kohana_View::factory('pages/errors/40...')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(114): HTTP_Exception_404->get_response()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 09:28:16 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ SYSPATH\classes\Kohana\Request\Client.php [ 119 ] in file:line
2013-10-09 09:28:16 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 09:38:19 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in C:\sites\KOHANA-3.3.1\application\classes\HTTP\Exception\404.php on line 9 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:43
2013-10-09 09:38:19 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\sites\KOHANA...', 43, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\HTTP\Exception\404.php(9): Kohana_Controller->__construct()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(114): HTTP_Exception_404->get_response()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#6 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:43
2013-10-09 09:42:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: HTTP_Exception_404::$response ~ APPPATH\classes\HTTP\Exception\404.php [ 23 ] in C:\sites\KOHANA-3.3.1\application\classes\HTTP\Exception\404.php:23
2013-10-09 09:42:02 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\HTTP\Exception\404.php(23): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 23, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(114): HTTP_Exception_404->get_response()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#4 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#5 {main} in C:\sites\KOHANA-3.3.1\application\classes\HTTP\Exception\404.php:23
2013-10-09 09:42:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Response::$response ~ APPPATH\classes\HTTP\Exception\404.php [ 23 ] in C:\sites\KOHANA-3.3.1\application\classes\HTTP\Exception\404.php:23
2013-10-09 09:42:23 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\HTTP\Exception\404.php(23): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 23, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(114): HTTP_Exception_404->get_response()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#4 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#5 {main} in C:\sites\KOHANA-3.3.1\application\classes\HTTP\Exception\404.php:23
2013-10-09 09:42:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template\master.php [ 3 ] in C:\sites\KOHANA-3.3.1\application\views\template\master.php:3
2013-10-09 09:42:37 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\template\master.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 3, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\HTTP\Exception\404.php(23): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(114): HTTP_Exception_404->get_response()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#8 {main} in C:\sites\KOHANA-3.3.1\application\views\template\master.php:3
2013-10-09 09:44:19 --- EMERGENCY: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\HTTP\Exception\404.php [ 19 ] in C:\sites\KOHANA-3.3.1\application\classes\HTTP\Exception\404.php:19
2013-10-09 09:44:19 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\HTTP\Exception\404.php(19): Kohana_Core::error_handler(8, 'Object of class...', 'C:\sites\KOHANA...', 19, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(114): HTTP_Exception_404->get_response()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#4 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#5 {main} in C:\sites\KOHANA-3.3.1\application\classes\HTTP\Exception\404.php:19
2013-10-09 09:50:14 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::factdory() ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in file:line
2013-10-09 09:50:14 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 09:54:32 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::factdory() ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in file:line
2013-10-09 09:54:32 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 09:54:33 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::factdory() ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in file:line
2013-10-09 09:54:33 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 09:55:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::factdory() ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in file:line
2013-10-09 09:55:00 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:05:33 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::factdory() ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in file:line
2013-10-09 10:05:33 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:05:34 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::factdory() ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in file:line
2013-10-09 10:05:34 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:05:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::factdory() ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in file:line
2013-10-09 10:05:39 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:05:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::factdory() ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in file:line
2013-10-09 10:05:51 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:06:04 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::factdory() ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in file:line
2013-10-09 10:06:04 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:06:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::factdory() ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in file:line
2013-10-09 10:06:41 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:06:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::factdory() ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in file:line
2013-10-09 10:06:42 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:06:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:06:53 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:07:16 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:07:16 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:08:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:08:02 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:08:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:08:03 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:08:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:08:18 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:08:23 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:08:23 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:10:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:10:24 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:10:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:10:53 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:11:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:11:02 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:12:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:12:52 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:12:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:12:53 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:20:35 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:20:35 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:20:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:20:38 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:20:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:20:45 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:21:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:21:13 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:26:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in C:\sites\KOHANA-3.3.1\application\classes\Kohana.php:7
2013-10-09 10:26:03 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Kohana.php(7): Kohana_Core::shutdown_handler()
#1 [internal function]: Kohana::shutdown_handler()
#2 {main} in C:\sites\KOHANA-3.3.1\application\classes\Kohana.php:7
2013-10-09 10:26:23 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in C:\sites\KOHANA-3.3.1\application\classes\Kohana.php:7
2013-10-09 10:26:23 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Kohana.php(7): Kohana_Core::shutdown_handler()
#1 [internal function]: Kohana::shutdown_handler()
#2 {main} in C:\sites\KOHANA-3.3.1\application\classes\Kohana.php:7
2013-10-09 10:33:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in C:\sites\KOHANA-3.3.1\application\classes\Kohana.php:8
2013-10-09 10:33:15 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Kohana.php(8): Kohana_Core::shutdown_handler()
#1 [internal function]: Kohana::shutdown_handler()
#2 {main} in C:\sites\KOHANA-3.3.1\application\classes\Kohana.php:8
2013-10-09 10:34:34 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in C:\sites\KOHANA-3.3.1\application\classes\Kohana.php:9
2013-10-09 10:34:34 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Kohana.php(9): Kohana_Core::shutdown_handler()
#1 [internal function]: Kohana::shutdown_handler()
#2 {main} in C:\sites\KOHANA-3.3.1\application\classes\Kohana.php:9
2013-10-09 10:35:56 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:35:56 --- NOTICE: #0 [internal function]: Kohana::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:36:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:36:01 --- NOTICE: #0 [internal function]: Kohana::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:36:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:36:18 --- NOTICE: #0 [internal function]: Kohana::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:36:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:36:39 --- NOTICE: #0 [internal function]: Kohana::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:36:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:36:54 --- NOTICE: #0 [internal function]: Kohana::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:37:27 --- EMERGENCY: ErrorException [ 500 ]: Error ~ /views/pages/error/default [ 0 ] in file:line
2013-10-09 10:37:27 --- NOTICE: #0 [internal function]: Kohana::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:37:46 --- EMERGENCY: ErrorException [ 500 ]: Error ~ /views/pages/errors/default [ 0 ] in file:line
2013-10-09 10:37:46 --- NOTICE: #0 [internal function]: Kohana::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:37:47 --- EMERGENCY: ErrorException [ 500 ]: Error ~ /views/pages/errors/default [ 0 ] in file:line
2013-10-09 10:37:47 --- NOTICE: #0 [internal function]: Kohana::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:37:55 --- EMERGENCY: ErrorException [ 500 ]: Error ~ views/pages/errors/default [ 0 ] in file:line
2013-10-09 10:37:55 --- NOTICE: #0 [internal function]: Kohana::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:37:55 --- EMERGENCY: ErrorException [ 500 ]: Error ~ views/pages/errors/default [ 0 ] in file:line
2013-10-09 10:37:55 --- NOTICE: #0 [internal function]: Kohana::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:38:02 --- EMERGENCY: ErrorException [ 500 ]: Error ~ default [ 0 ] in file:line
2013-10-09 10:38:02 --- NOTICE: #0 [internal function]: Kohana::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:38:05 --- EMERGENCY: ErrorException [ 500 ]: Error ~ views/pages/errors/default [ 0 ] in file:line
2013-10-09 10:38:05 --- NOTICE: #0 [internal function]: Kohana::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:38:48 --- EMERGENCY: ErrorException [ 500 ]: Error ~ views/pages/errors/default [ 0 ] in file:line
2013-10-09 10:38:48 --- NOTICE: #0 [internal function]: Kohana::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:39:18 --- EMERGENCY: ErrorException [ 500 ]: Error ~ default [ 0 ] in file:line
2013-10-09 10:39:18 --- NOTICE: #0 [internal function]: Kohana::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:40:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:40:44 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:41:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:41:49 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:44:28 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:44:28 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:44:32 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:44:32 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:44:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:44:36 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:44:58 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::savee() ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in file:line
2013-10-09 10:44:58 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 11:18:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Request::$uri ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Welcome.php:7
2013-10-09 11:18:35 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Welcome.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 7, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Welcome.php:7
2013-10-09 11:18:41 --- EMERGENCY: ErrorException [ 1 ]: Cannot access protected property Request::$_uri ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in file:line
2013-10-09 11:18:41 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 11:19:12 --- EMERGENCY: ErrorException [ 2048 ]: Accessing static property Request::$current as non static ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Welcome.php:7
2013-10-09 11:19:12 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Welcome.php(7): Kohana_Core::error_handler(2048, 'Accessing stati...', 'C:\sites\KOHANA...', 7, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Welcome.php:7
2013-10-09 11:19:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM, expecting ',' or ';' ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in file:line
2013-10-09 11:19:19 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 11:20:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in file:line
2013-10-09 11:20:24 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 11:27:59 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::__construct(), called in C:\sites\KOHANA-3.3.1\application\classes\HTTP\Exception\404.php on line 14 and defined ~ SYSPATH\classes\Kohana\Request.php [ 650 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:650
2013-10-09 11:27:59 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(650): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\sites\KOHANA...', 650, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\HTTP\Exception\404.php(14): Kohana_Request->__construct()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(114): HTTP_Exception_404->get_response()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#6 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:650
2013-10-09 11:38:19 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\bootstrap.php [ 139 ] in C:\sites\KOHANA-3.3.1\application\bootstrap.php:139
2013-10-09 11:38:19 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\bootstrap.php(139): Kohana_Core::error_handler(8, 'Array to string...', 'C:\sites\KOHANA...', 139, Array)
#1 C:\sites\KOHANA-3.3.1\application\bootstrap.php(139): include()
#2 C:\sites\KOHANA-3.3.1\public\index.php(102): require('C:\sites\KOHANA...')
#3 {main} in C:\sites\KOHANA-3.3.1\application\bootstrap.php:139
2013-10-09 11:38:20 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\bootstrap.php [ 139 ] in C:\sites\KOHANA-3.3.1\application\bootstrap.php:139
2013-10-09 11:38:20 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\bootstrap.php(139): Kohana_Core::error_handler(8, 'Array to string...', 'C:\sites\KOHANA...', 139, Array)
#1 C:\sites\KOHANA-3.3.1\application\bootstrap.php(139): include()
#2 C:\sites\KOHANA-3.3.1\public\index.php(102): require('C:\sites\KOHANA...')
#3 {main} in C:\sites\KOHANA-3.3.1\application\bootstrap.php:139
2013-10-09 11:49:06 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\Controller\Static.php [ 7 ] in file:line
2013-10-09 11:49:06 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 11:49:55 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/about could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:49:55 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/about')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/about', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(8): Kohana_View::factory('pages/about')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:50:30 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/staticpage/test could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:50:30 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/staticpag...')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/staticpag...', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(8): Kohana_View::factory('pages/staticpag...')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:51:02 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/staticpage/test could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:51:02 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/staticpag...')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/staticpag...', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(8): Kohana_View::factory('pages/staticpag...')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:51:04 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/staticpage/test could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:51:04 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/staticpag...')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/staticpag...', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(8): Kohana_View::factory('pages/staticpag...')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:51:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/staticpage/test could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:51:05 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/staticpag...')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/staticpag...', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(8): Kohana_View::factory('pages/staticpag...')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:51:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:51:18 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(8): Kohana_View::factory('pages/')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:51:26 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:51:26 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(8): Kohana_View::factory('pages/')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:51:27 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:51:27 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(8): Kohana_View::factory('pages/')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:51:35 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:51:35 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(8): Kohana_View::factory('pages/')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:51:41 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:51:41 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(8): Kohana_View::factory('pages/')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:51:50 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:51:50 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(8): Kohana_View::factory('pages/')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:51:57 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:51:57 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(8): Kohana_View::factory('pages/')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:52:13 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:52:13 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(8): Kohana_View::factory('pages/')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:52:13 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:52:13 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(8): Kohana_View::factory('pages/')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:52:21 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:52:21 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(8): Kohana_View::factory('pages/')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:52:22 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:52:22 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(8): Kohana_View::factory('pages/')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:52:29 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/ could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:52:29 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(8): Kohana_View::factory('pages/')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:53:00 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages//pages/home could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:53:00 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages//pages/ho...')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages//pages/ho...', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(11): Kohana_View::factory('pages//pages/ho...')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:55:22 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/about/test could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:55:22 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/about/tes...')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/about/tes...', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(11): Kohana_View::factory('pages/about/tes...')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:56:26 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 26 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2013-10-09 11:56:26 --- NOTICE: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'C:\sites\KOHANA...', 423, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Route.php(423): preg_match('#^(?P<page>(abo...', 'about', NULL)
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2013-10-09 11:57:38 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/aboutte could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:57:38 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/aboutte')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/aboutte', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(11): Kohana_View::factory('pages/aboutte')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:58:12 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/abouttest could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 11:58:12 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/abouttest')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/abouttest', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(11): Kohana_View::factory('pages/abouttest')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 12:00:44 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/about/tesgdg could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 12:00:44 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/about/tes...')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/about/tes...', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(11): Kohana_View::factory('pages/about/tes...')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 12:00:49 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/aboutgfg could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 12:00:49 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/aboutgfg')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/aboutgfg', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(11): Kohana_View::factory('pages/aboutgfg')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 12:00:59 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/aboutgfg could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 12:00:59 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/aboutgfg')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/aboutgfg', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(11): Kohana_View::factory('pages/aboutgfg')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 12:00:59 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/aboutgfg could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 12:00:59 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/aboutgfg')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/aboutgfg', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(11): Kohana_View::factory('pages/aboutgfg')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 12:02:49 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/about/test could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 12:02:49 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/about/tes...')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/about/tes...', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(11): Kohana_View::factory('pages/about/tes...')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 12:02:54 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/aboutgh could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 12:02:54 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/aboutgh')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/aboutgh', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(11): Kohana_View::factory('pages/aboutgh')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 12:03:16 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/aboutgh could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 12:03:16 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/aboutgh')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/aboutgh', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(11): Kohana_View::factory('pages/aboutgh')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 12:04:01 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/about/test could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-09 12:04:01 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/about/tes...')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/about/tes...', NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Static.php(11): Kohana_View::factory('pages/about/tes...')
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137