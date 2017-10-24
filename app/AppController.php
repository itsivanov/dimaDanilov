<?php

/**
 * Created by PhpStorm.
 * User: oleg
 * Date: 24.10.17
 * Time: 21:53
 */
class AppController
{
    private $parameters;

    public function __construct()
    {
        $this->_parseUri();
    }

    private function _parseUri()
    {
        $parse_uri = parse_url($_SERVER["REQUEST_URI"]);
        $uri = ltrim($parse_uri["path"], '/');
        $uri = filter_var($uri, FILTER_SANITIZE_STRING);
        $uri = strip_tags($uri);
        $parameters = [];

        if (!empty($uri)) {
            $parameters = explode('/', $uri);
        }

        if (empty($parameters[0])) {
            $parameters[0] = "index";
        }
        $this->parameters = $parameters;
    }

    public function getContent()
    {
        $method_name = "action" . ucfirst($this->parameters[0]);

        if (method_exists($this, $method_name)) {
            $this->$method_name();
        } else {
            $this->notFound();
        }
    }


    public function notFound()
    {
        die("Страница не найдена");
    }

    public function actionIndex()
    {

    }

    public function actionUser()
    {
        include_once ('views/profile.php');
    }

}