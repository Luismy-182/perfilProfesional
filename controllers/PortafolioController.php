<?php 

namespace Controllers;
use MVC\Router;

class PortafolioController{
    public static function index(Router $router){

        $router->render('portafolio/portafolio', [
            'titulo'=>'Miguel Angel Suarez'
        ]);
    }
}









?>