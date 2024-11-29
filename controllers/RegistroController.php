<?php 
namespace Controllers;

use MVC\Router;
use Model\Usuario;

class RegistroController{

    public static function index(Router $router){
        
        $alertas=[];
        
        if($_SERVER['REQUEST_METHOD']==='POST'){
            
        $usuario=new Usuario;//usuario ahora es un objeto de la clase usuario
        $usuario->sincronizar($_POST); //sincronizamos nuestro post con el modelo de usuario   
        $alertas=$usuario->validar_cuenta();
   
        if(empty($alertas)){
            //comprueba si ya existia antes el usuario
            $resultado=$usuario->existeUsuario();
            if($resultado->num_rows){
                $alertas=Usuario::getAlertas();//cuando se usa con toda la clase trae todas las alertas del modelo
            }else{
                 //si nos hay alertas hasheamos password
                $usuario->hashPassword();
                $usuario->guardar();
                $alertas=$usuario->setAlerta('exito','Registrado correctamente.');
                sleep(2);
                header('Location:/login');
            }


           
        }

            //recupera las alertas que se crearon
            $alertas=$usuario->getAlertas();
            $router->render('auth/registro',[
                'titulo'=>'Registro',
                'alertas'=>$alertas
            ]);

        }

    }
}