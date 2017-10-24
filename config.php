<?php
define('DB_USERNAME', 'root');
define('DB_HOST', '127.0.0.1');
define('DB_PASSWORD', '123');
define('DB_NAME', 'test');

define('PATH', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);
define('PATH_ROOT', $_SERVER['DOCUMENT_ROOT']);

$GLOBALS["DB"] = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));


