<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-08 03:39:45 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH\classes\Controller\Frontend.php [ 17 ] in file:line
2013-10-08 03:39:45 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:40:12 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\MySQL.php:171
2013-10-08 11:40:12 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('tblUsers')
#3 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(10)
#7 C:\sites\KOHANA-3.3.1\application\classes\Controller\Welcome.php(7): Kohana_ORM::factory('User', 10)
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#14 {main} in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\MySQL.php:171
2013-10-08 11:40:27 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\MySQL.php:171
2013-10-08 11:40:27 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('tblUsers')
#3 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(10)
#7 C:\sites\KOHANA-3.3.1\application\classes\Controller\Welcome.php(7): Kohana_ORM::factory('User', 10)
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#14 {main} in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\MySQL.php:171
2013-10-08 11:40:27 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\MySQL.php:171
2013-10-08 11:40:27 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('tblUsers')
#3 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(10)
#7 C:\sites\KOHANA-3.3.1\application\classes\Controller\Welcome.php(7): Kohana_ORM::factory('User', 10)
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#14 {main} in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\MySQL.php:171
2013-10-08 11:46:52 --- EMERGENCY: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`ecology/tblroles_users`, CONSTRAINT `tblroles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tblusers` (`id`) ON DELETE CASCADE) [ UPDATE `tblUsers` SET `id` = 'test' WHERE `id` = '66' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-08 11:46:52 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `tblUser...', false, Array)
#1 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Welcome.php(9): Kohana_ORM->save()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#10 {main} in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-08 11:47:28 --- EMERGENCY: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`ecology/tblroles_users`, CONSTRAINT `tblroles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tblusers` (`id`) ON DELETE CASCADE) [ UPDATE `tblUsers` SET `id` = 'test' WHERE `id` = '66' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-08 11:47:28 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `tblUser...', false, Array)
#1 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Welcome.php(10): Kohana_ORM->save()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#10 {main} in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-08 11:47:44 --- EMERGENCY: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`ecology/tblroles_users`, CONSTRAINT `tblroles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tblusers` (`id`) ON DELETE CASCADE) [ UPDATE `tblUsers` SET `id` = 'test' WHERE `id` = '66' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-08 11:47:44 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `tblUser...', false, Array)
#1 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Welcome.php(10): Kohana_ORM->save()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#10 {main} in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-08 11:48:19 --- EMERGENCY: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`ecology/tblroles_users`, CONSTRAINT `tblroles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tblusers` (`id`) ON DELETE CASCADE) [ UPDATE `tblUsers` SET `id` = 'test' WHERE `id` = '66' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-08 11:48:19 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `tblUser...', false, Array)
#1 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Welcome.php(11): Kohana_ORM->save()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#10 {main} in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-08 11:48:41 --- EMERGENCY: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`ecology/tblroles_users`, CONSTRAINT `tblroles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tblusers` (`id`) ON DELETE CASCADE) [ UPDATE `tblUsers` SET `id` = 'test' WHERE `id` = '66' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-08 11:48:41 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `tblUser...', false, Array)
#1 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Welcome.php(11): Kohana_ORM->save()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#10 {main} in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-08 11:49:54 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '' for key 2 [ INSERT INTO `tblUsers` () VALUES () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251
2013-10-08 11:49:54 --- NOTICE: #0 C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\sites\KOHANA-3.3.1\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\sites\KOHANA-3.3.1\application\classes\Controller\Welcome.php(10): Kohana_ORM->save()
#4 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\sites\KOHANA-3.3.1\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\sites\KOHANA-3.3.1\public\index.php(118): Kohana_Request->execute()
#10 {main} in C:\sites\KOHANA-3.3.1\modules\database\classes\Kohana\Database\Query.php:251