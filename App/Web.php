<?php
namespace App;
use Core\Router;
class Web extends Router{

    protected function initRoute()
    {
       $route['home'] = ['route'=>'/','controller'=>'AdminController','action'=>'index'];


       $this->setRoute($route);
    }
}