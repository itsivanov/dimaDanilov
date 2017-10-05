<?php
define('DB_USERNAME', 'root');
define('DB_HOST', '127.0.0.1');
define('DB_PASSWORD', '123');
define('DB_NAME', 'test');

$GLOBALS["DB"] = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));


