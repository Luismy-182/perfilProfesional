<?php 

namespace Controllers;
use MVC\Router;

class ProyectosController{
    public static function index(Router $router){

        $router->render('proyectos/proyectos', [
            'titulo'=>'Miguel Angel Suarez'
        ]);
    }
}









?>