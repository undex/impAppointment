<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-19 20:20:49 --- EMERGENCY: Database_Exception [ 1 ]: Can't create/write to file '/tmp/#sql_19d_0.MYI' (Errcode: 13) [ SHOW FULL COLUMNS FROM `scheda` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/impAppointment/modules/database/classes/Kohana/Database/MySQL.php:358
2013-08-19 20:20:49 --- DEBUG: #0 /var/www/impAppointment/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/impAppointment/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('scheda')
#2 /var/www/impAppointment/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /var/www/impAppointment/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /var/www/impAppointment/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/impAppointment/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /var/www/impAppointment/application/classes/Controller/Appointment.php(8): Kohana_ORM::factory('scheda')
#7 /var/www/impAppointment/system/classes/Kohana/Controller.php(84): Controller_appointment->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/impAppointment/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_appointment))
#10 /var/www/impAppointment/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/impAppointment/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/impAppointment/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/impAppointment/modules/database/classes/Kohana/Database/MySQL.php:358