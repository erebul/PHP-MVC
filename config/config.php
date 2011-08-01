<?php
//path's
define('DEBUG_ENVIRONMENT',TRUE);
define('APPLICATION_WEB_PROTOCOL', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']) ?  'https' : 'http');
define('APPLICATION_WEB_PATH',APPLICATION_WEB_PROTOCOL.'://'.$_SERVER["SERVER_NAME"].'/');
define('APPLICATION_VIEW_PATH',APPLICATION_PATH.'/views/');
define('APPLICATION_PUBLIC_PATH',APPLICATION_PATH.'/public/');
define('APPLICATION_PUBLIC_WEB_PATH',APPLICATION_WEB_PATH.'/public/');
define('ADMIN_EMAIL','');
define('DEBUG_IP','');

//database
define('DB_TYPE', 'mysql');
define('DB_HOST', '');
define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASS', '');