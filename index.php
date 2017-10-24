<?php
session_start();
require_once 'config.php';
require_once 'function.php';
spl_autoload_register('autoloader');
$app = new AppController();

$app->getContent();