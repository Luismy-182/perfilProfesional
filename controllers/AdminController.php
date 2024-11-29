<?php 
namespace Controllers;

use MVC\Router;

class AdminController{

    public static function index(Router $router){




        
        $router->render('admin/dashboard/index',[
            
            'titulo'=>'Proyectos'
        ]);
    }


    public static function crear(Router $router){
        $router->render('admin/dashboard/crear',[
            
            'titulo'=>'Crear proyecto'
        ]);
    }


}



?>