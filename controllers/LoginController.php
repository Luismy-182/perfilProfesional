<?php 
namespace Controllers;

use MVC\Router;
use Model\Usuario;

class LoginController{

    public static function index(Router $router){
        
        $alertas=[];
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $auth=new Usuario($_POST);
            $alertas=$auth->validarLogin();
            //validamos si existe el username en nuestra base de datos
            $resultado=$auth->existeLoggin(); //dentro esta negado y retorna un 0 o 1 en usuario
            if(!$resultado->num_rows){ //si no hayt un resultado imprime la alerta y sal de ahí
                $alertas=Usuario::getAlertas(); 
            }
         
            if(empty($alertas)){
                $usuario=Usuario::where('usuario', $auth->usuario);

                //verificando el password
               if($usuario){ //si encontro el usuario, a este paso es una mamada porque ya sabe si esta o no
                    if($usuario->comprobarPassword($auth->password)){ //si el password es correcto
                        session_start();
                        $_SESSION['id']=$usuario->id;
                        $_SESSION['nombre']=$usuario->nombre;
                        $_SESSION['usuario']=$usuario->usuario;
                        $_SESSION['login']=true;

                        //redireccionando
                        header('Location: /admin');
                    }
               }
            }
           
               
            
            
        }
            
            

 

        

        $alertas=Usuario::getAlertas();
        $router->render('auth/login',[
            'titulo'=>'Iniciar sesión',
            'alertas'=>$alertas
        ]);
    }
}




?>