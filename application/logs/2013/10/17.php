<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-17 08:13:58 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-17 08:13:58 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#2 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php:975
2013-10-17 10:44:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: page_title ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:44:28 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(22): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(18): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:53:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:53:04 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(22): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(18): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:55:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:55:14 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(22): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(18): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:55:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:55:25 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(22): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(18): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:55:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:55:36 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(22): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(18): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:55:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:55:37 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(22): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(18): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:55:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:55:50 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(22): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(18): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:56:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:56:13 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(22): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(18): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:56:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:56:42 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(22): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(18): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:58:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:58:20 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(22): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(18): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:58:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:58:37 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(22): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(36): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:58:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:58:42 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(22): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(37): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:58:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 10:58:50 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(23): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(37): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:05:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\classes\Controller\Admin\Admin.php [ 35 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:35
2013-10-17 11:05:31 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 35, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:35
2013-10-17 11:06:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:06:11 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(25): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(18): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:06:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:06:40 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(26): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(18): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:10:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:10:30 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(26): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(17): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:13:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:13:22 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(26): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(17): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:13:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ APPPATH\classes\Controller\Frontend.php [ 15 ] in file:line
2013-10-17 11:13:47 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-17 11:13:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:13:53 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(26): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(17): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:14:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Admin_Index::$template_vars ~ APPPATH\classes\Controller\Frontend.php [ 18 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php:18
2013-10-17 11:14:08 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(18): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 18, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(17): Controller_Frontend->after()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#8 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php:18
2013-10-17 11:15:17 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, null given, called in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Arr.php on line 433 and defined ~ SYSPATH\classes\Kohana\Arr.php [ 30 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Arr.php:30
2013-10-17 11:15:17 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\sites\KOHANA...', 30, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Arr.php(433): Kohana_Arr::is_assoc(NULL)
#2 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(24): Kohana_Arr::merge(Array, NULL)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(17): Controller_Frontend->after()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#10 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Arr.php:30
2013-10-17 11:15:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:15:21 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(26): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(17): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:15:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:15:42 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(26): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(17): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:15:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:15:43 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(26): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(17): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:15:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Admin_Index::$section ~ APPPATH\classes\Controller\Admin\Admin.php [ 34 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:34
2013-10-17 11:15:59 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(34): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 34, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:34
2013-10-17 11:16:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Admin_Index::$section ~ APPPATH\classes\Controller\Admin\Admin.php [ 34 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:34
2013-10-17 11:16:00 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(34): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 34, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:34
2013-10-17 11:16:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:16:30 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(26): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(17): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:17:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Admin_Index::$section ~ APPPATH\classes\Controller\Admin\Admin.php [ 26 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:26
2013-10-17 11:17:39 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(26): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 26, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(69): Controller_Admin_Admin->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:26
2013-10-17 11:21:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Admin_Index::$section ~ APPPATH\classes\Controller\Admin\Admin.php [ 26 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:26
2013-10-17 11:21:19 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(26): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 26, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(69): Controller_Admin_Admin->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:26
2013-10-17 11:21:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Admin_Index::$section ~ APPPATH\classes\Controller\Admin\Admin.php [ 27 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:27
2013-10-17 11:21:38 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 27, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(69): Controller_Admin_Admin->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:27
2013-10-17 11:21:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Admin_Index::$section ~ APPPATH\classes\Controller\Admin\Admin.php [ 27 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:27
2013-10-17 11:21:39 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 27, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(69): Controller_Admin_Admin->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:27
2013-10-17 11:23:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:23:23 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(26): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(17): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:24:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:24:40 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(26): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(17): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:24:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:24:48 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(26): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(17): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:24:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:24:49 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(26): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(17): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:25:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Admin_Index::$section ~ APPPATH\classes\Controller\Admin\Admin.php [ 32 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:32
2013-10-17 11:25:33 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(32): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 32, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:32
2013-10-17 11:29:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Admin_Index::$section ~ APPPATH\classes\Controller\Admin\Admin.php [ 32 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:32
2013-10-17 11:29:24 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(32): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 32, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:32
2013-10-17 11:44:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Admin_Index::$section ~ APPPATH\classes\Controller\Admin\Admin.php [ 32 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:32
2013-10-17 11:44:54 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(32): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 32, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:32
2013-10-17 11:44:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Admin_Index::$section ~ APPPATH\classes\Controller\Admin\Admin.php [ 32 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:32
2013-10-17 11:44:55 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(32): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 32, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php:32
2013-10-17 11:47:47 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in file:line
2013-10-17 11:47:47 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-17 11:48:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Index::param() ~ APPPATH\classes\Controller\Admin\Admin.php [ 17 ] in file:line
2013-10-17 11:48:02 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-17 11:48:06 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ APPPATH\classes\Controller\Admin\Admin.php [ 17 ] in file:line
2013-10-17 11:48:06 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-17 11:48:12 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ APPPATH\classes\Controller\Admin\Admin.php [ 17 ] in file:line
2013-10-17 11:48:12 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-17 11:48:17 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in file:line
2013-10-17 11:48:17 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-17 11:48:27 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in file:line
2013-10-17 11:48:27 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-17 11:48:30 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in file:line
2013-10-17 11:48:30 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-17 11:48:44 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php on line 17 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:43
2013-10-17 11:48:44 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\sites\KOHANA...', 43, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(17): Kohana_Controller->__construct()
#2 [internal function]: Controller_Admin_Admin->__construct(Object(Request), Object(Response))
#3 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#7 {main} in C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php:43
2013-10-17 11:52:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Controller\Admin\Admin.php [ 15 ] in file:line
2013-10-17 11:52:43 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-17 11:54:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 11:54:18 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(26): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(18): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 12:00:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: section ~ APPPATH\views\admin\template\master.php [ 29 ] in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 12:00:33 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\sites\KOHANA...', 29, Array)
#1 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(61): include('C:\sites\KOHANA...')
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\sites\KOHANA...', Array)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(26): Kohana_View->render()
#4 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(21): Controller_Frontend->after()
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#11 {main} in C:\sites\KOHANA-3.3.1\application\views\admin\template\master.php:29
2013-10-17 14:19:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Admin_User::$template_vars ~ APPPATH\classes\Controller\Frontend.php [ 18 ] in C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php:18
2013-10-17 14:19:02 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php(18): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\sites\KOHANA...', 18, Array)
#1 C:\sites\KOHANA-3.3.1\application\classes\Controller\Admin\Admin.php(22): Controller_Frontend->after()
#2 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(87): Controller_Admin_Admin->after()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#8 {main} in C:\sites\KOHANA-3.3.1\application\classes\Controller\Frontend.php:18