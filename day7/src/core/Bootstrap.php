<?php
namespace Iti\Mvc\core;

class Bootstrap{

    private $controller;

    private $method;

    private $params = [];

    public function __construct()
    {
        $this->url();
        $this->run();
    }

    private function url():void
    {
        $url = $_SERVER['QUERY_STRING'];
        $url =  explode('/',$url);
        $this->controller = $url[0];
        $this->method = $url[1];

        unset($url[0],$url[1]);

        $this->params = $url;
    }


    private function run(){
        $controller = 'Iti\\Mvc\\controllers\\'.$this->controller;
        call_user_func_array([new  $controller, $this->method],$this->params);
    }
}