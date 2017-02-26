<?php

namespace app;

use mvc\init\Bootstrap;

class Route extends Bootstrap
{
    protected function initRoutes(){
        $routes['home'] = array('route'=>'/','controller'=>'indexCtrl','action'=>'index');

        $routes['contact'] = array('route'=>'/contact','controller'=>'indexCtrl','action'=>'contact');

        $this->setRoutes($routes);
    }
}