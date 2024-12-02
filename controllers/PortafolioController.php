<?php 

namespace Controllers;
use MVC\Router;
use Model\Proyecto;

class PortafolioController{
    public static function index(Router $router){
        $proyecto=Proyecto::all();
        

        $router->render('portafolio/portafolio', [
            'titulo'=>'Miguel Angel Suarez',
            'proyecto'=>$proyecto
        ]);
    }
}









?>