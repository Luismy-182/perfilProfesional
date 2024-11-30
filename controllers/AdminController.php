<?php 
namespace Controllers;

use MVC\Router;
use Model\Proyecto;
use Intervention\Image\ImageManagerStatic as Image;


class AdminController{

    public static function index(Router $router){
        isAuth();
        
        
        
        
        $router->render('admin/dashboard/index',[
            'titulo'=>'Proyectos'
        ]);
    }


    public static function crear(Router $router){
        isAuth();
        $alertas=[];
        $proyecto=new Proyecto;

        if($_SERVER['REQUEST_METHOD']==='POST'){    
            
            //validando la imagen 
            if(!empty($_FILES['imagen']['tmp_name'] ) ){
                $carpeta_imagenes='../public/img/proyectos';

                //crear carpeta si no existe
                if(!is_dir($carpeta_imagenes)){
                    mkdir($carpeta_imagenes, 777, true);
                }

                $imagen_png = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('png', 80);
                $image_webp = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('webp', 80);

                $nombre_imagen=md5(uniqid(rand(), true));
                $_POST['imagen']=$nombre_imagen;

            }







            $proyecto->sincronizar($_POST);
            dd($proyecto);
            $alertas=$proyecto->validarCampos();
            if(empty($alertas)){

                //asignando la fecha
                $proyecto->insertarFecha();

                //creando la imagen


                //asignando la foranea
                $proyecto->usuario_id= $_SESSION['id'];
                dd($proyecto);

                //guardando proyecto
            }
     
            
        }
        $alertas=Proyecto::getAlertas();
        $router->render('admin/dashboard/crear',[
            'titulo'=>'Crear proyecto',
            'alertas'=>$alertas
        ]);
    }


}



?>