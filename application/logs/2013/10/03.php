<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-03 08:56:46 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Cookie.php:67
2013-10-03 08:56:46 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('km_ai', NULL)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('km_ai')
#2 C:\sites\KOHANA-3.3.1\public\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Cookie.php:67
2013-10-03 09:07:07 --- EMERGENCY: ErrorException [ 2048 ]: Accessing static property Response::$messages as non static ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Welcome.php:7
2013-10-03 09:07:07 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Welcome.php(7): Kohana_Core::error_handler(2048, 'Accessing stati...', 'C:\sites\KOHANA...', 7, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Welcome.php:7
2013-10-03 09:07:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in file:line
2013-10-03 09:07:18 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 09:13:49 --- EMERGENCY: Kohana_Exception [ 0 ]: Controller failed to return a Response ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 102 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php:114
2013-10-03 09:13:49 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#2 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#3 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php:114
2013-10-03 09:14:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Welcome::response() ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in file:line
2013-10-03 09:14:02 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 09:15:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: testing ~ APPPATH\views\home.php [ 2 ] in C:\sites\KOHANA-3.3.1\application\views\home.php:2
2013-10-03 09:15:43 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\home.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 2, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Welcome.php(8): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#10 {main} in C:\sites\KOHANA-3.3.1\application\views\home.php:2
2013-10-03 10:05:50 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH\classes\Controller\Frontend.php [ 12 ] in file:line
2013-10-03 10:05:50 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 10:06:09 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH\classes\Controller\Frontend.php [ 12 ] in file:line
2013-10-03 10:06:09 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 10:06:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting '(' ~ APPPATH\classes\Controller\Frontend.php [ 7 ] in file:line
2013-10-03 10:06:27 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 10:07:03 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php on line 9 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:43
2013-10-03 10:07:03 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\sites\KOHANA...', 43, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(9): Kohana_Controller->__construct()
#2 [internal function]: Controller_Frontend->__construct(Object(Request), Object(Response))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:43
2013-10-03 10:07:13 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH\classes\Controller\Frontend.php [ 12 ] in file:line
2013-10-03 10:07:13 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 10:08:57 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH\classes\Controller\Frontend.php [ 12 ] in file:line
2013-10-03 10:08:57 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 10:12:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\layout\master.php [ 3 ] in C:\sites\KOHANA-3.3.1\application\views\layout\master.php:3
2013-10-03 10:12:15 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\layout\master.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 3, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(13): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Controller_Frontend->__destruct()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#8 {main} in C:\sites\KOHANA-3.3.1\application\views\layout\master.php:3
2013-10-03 10:12:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\layout\master.php [ 3 ] in C:\sites\KOHANA-3.3.1\application\views\layout\master.php:3
2013-10-03 10:12:24 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\layout\master.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 3, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(13): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Controller_Frontend->__destruct()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#8 {main} in C:\sites\KOHANA-3.3.1\application\views\layout\master.php:3
2013-10-03 10:18:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Frontend.php [ 30 ] in file:line
2013-10-03 10:18:55 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 10:20:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Welcome::getHeader() ~ APPPATH\classes\Controller\Frontend.php [ 13 ] in file:line
2013-10-03 10:20:47 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 10:21:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view component/header could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-03 10:21:09 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('component/heade...')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('component/heade...', Array)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(30): Kohana_View::factory('component/heade...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(13): Controller_Frontend->getHeader()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Controller_Frontend->__destruct()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#8 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-03 10:23:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\component\header.php [ 3 ] in C:\sites\KOHANA-3.3.1\application\views\component\header.php:3
2013-10-03 10:23:02 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\component\header.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 3, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(31): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(13): Controller_Frontend->getHeader()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Controller_Frontend->__destruct()
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#9 {main} in C:\sites\KOHANA-3.3.1\application\views\component\header.php:3
2013-10-03 10:23:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view layout/master could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-03 10:23:18 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(137): Kohana_View->set_filename('layout/master')
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(30): Kohana_View->__construct('layout/master', Array)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(16): Kohana_View::factory('layout/master', Array)
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Controller_Frontend->__destruct()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php:137
2013-10-03 10:23:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: template ~ APPPATH\classes\Controller\Frontend.php [ 12 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php:12
2013-10-03 10:23:37 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 12, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Controller_Frontend->__destruct()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#4 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#5 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php:12
2013-10-03 10:32:42 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\Frontend.php [ 51 ] in file:line
2013-10-03 10:32:42 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 10:32:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\Frontend.php [ 51 ] in file:line
2013-10-03 10:32:51 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 10:36:01 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\Frontend.php [ 50 ] in file:line
2013-10-03 10:36:01 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 10:40:32 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\Frontend.php [ 51 ] in file:line
2013-10-03 10:40:32 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 10:40:33 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\Frontend.php [ 51 ] in file:line
2013-10-03 10:40:33 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line