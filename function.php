<?php
/**
* Автоматически подключает классы с именем $className
*
* @return void
**/
function autoloader($className) {
    include_once PATH_ROOT . DS . 'app' . DS . $className . '.php';
}