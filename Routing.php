<?php
require_once CONTROLLER.'homeController.php';
require_once CONTROLLER.'fileController.php';
class Router
{
    protected $controller = 'homeController';
    protected $action = 'index';
    protected $parameters = [];

    public function __construct()
    {
        $this -> prepareURL();
        if(file_exists(CONTROLLER.$this->controller.'.php'))
        {
            $this->controller = new $this->controller;
            if(method_exists($this->controller, $this->action))
            {
                call_user_func_array([$this->controller,$this->action],$this->parameters);
            }
        }
    }
    protected function prepareURL(){
        $request = trim($_SERVER['REQUEST_URI'],'/');
        if(!empty($request))
        {
            $url = explode('/',$request);
            $this->controller = isset($url[0]) ? $url[0].'Controller' : 'homeController';
            $this->action = isset($url[1]) ? $url[1] : 'index';
            unset($url[0], $url[1]);
            $this->parameters = !empty($url) ? array_values($url) : [];
        }
    }
}