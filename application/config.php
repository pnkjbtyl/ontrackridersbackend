<?php
	
	error_reporting(E_ALL ^ E_NOTICE);

	define('DEFAULT_CONTROLLER', 'home');
	define('DEFAULT_VIEW', 'welcome');
	define('DEFAULT_TEMPLATE', 'default');
	define('DEFAULT_FUCTION', 'login');


	define('BASEPATH', dirname(dirname(__FILE__)));
	define('BASEURL', 'http://localhost/ontrackridersbackend/');

	define('DB_HOST', '192.168.1.6');
    define('DB_USER', 'user');
    define('DB_PASS', '1111Qqqq');
    define('DB_NAME', 'riders_db');
    define('DB_TABLE_PREFIX', 'admin_'); 
    
?>