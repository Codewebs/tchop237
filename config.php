<?php
// HTTP
define('HTTP_SERVER', 'http://www.tchop237.herokuapp.com/');

// HTTPS
define('HTTPS_SERVER', 'https://tchop237.herokuapp.com/');
echo __FILE__;
echo "<br />";
echo __DIR__ ;
echo "<br />";

echo "<br />";
echo $_SERVER["DOCUMENT_ROOT"];

// DIR
define('DIR_APPLICATION', 'catalog/');
define('DIR_SYSTEM', 'system/');
define('DIR_IMAGE', $_SERVER["DOCUMENT_ROOT"].'/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');
echo DIR_IMAGE;
// DB
/*define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'tchop237');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');*/
/* */
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'us-cdbr-iron-east-05.cleardb.net');
define('DB_USERNAME', 'bdc544f82295b8');
define('DB_PASSWORD', '65169927');
define('DB_DATABASE', 'heroku_d5243f28b216730');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');