<?php

namespace mvc\init;

abstract class Bootstrap
{
    private $routes;

    /**
     * Route constructor.
     */
    public function __construct()
    {
        //Inicia a configuração de rotas
        $this->initRoutes();
        //Executa o run com base na url no executada no browser
        $this->run($this->getUrl());
    }

    abstract protected function initRoutes();

    protected function run($url){
        //Percorre o $routes tendo como parametro a url
        array_walk($this->routes, function($route) use ($url){
            //Valida a url
            if($url == $route['route']){
                //Objeto que recebe a classe do controller da url
                $class = "app\\controllers\\".ucfirst($route['controller']);
                $controller = new $class;
                $action = $route['action'];
                $controller->$action();
            }
        });
    }

protected function setRoutes(array $routes){
        $this->routes = $routes;
    }

protected function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    }
}