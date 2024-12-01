<?php 
namespace Controllers;

use MVC\Router;
use Model\Proyecto;
use Intervention\Image\ImageManagerStatic as Image;


class AdminController{

    public static function index(Router $router){
        isAuth();
        $proyectos=Proyecto::all('usuario_id', $_SESSION['id']);
        
        
        
        
        $router->render('admin/dashboard/index',[
            'titulo'=>'Proyectos',
            'proyectos'=>$proyectos
        ]);
    }


    public static function crear(Router $router){
        isAuth();
        $alertas=[];
        $proyecto=new Proyecto;
        
        if($_SERVER['REQUEST_METHOD']==='POST'){    
            
            //validando la imagen 
            if(!empty($_FILES['imagen']['tmp_name'] ) ){
                $carpeta_imagenes='../public/storage/proyectos';

                //crear carpeta si no existe
                if(!is_dir($carpeta_imagenes)){
                    mkdir($carpeta_imagenes, 777, true);
                }
                //creando 2 tipos de imagenes
                $imagen_png = Image::make($_FILES['imagen']['tmp_name'])/*->fit(800,800)*/->encode('png', 80);
                $imagen_webp = Image::make($_FILES['imagen']['tmp_name'])/*->fit(800,800)*/->encode('webp', 80);

                //creando el nombre de la imagen a guardar en la bd
                $nombre_imagen=md5(uniqid(rand(), true));
                $_POST['imagen']=$nombre_imagen;//asignando el nombre
 
            }
            $proyecto->sincronizar($_POST);
           
            $alertas=$proyecto->validarCampos();
      
            if(empty($alertas)){

                //asignando la fecha
                $proyecto->insertarFecha();

                //guardando la imagen
                $imagen_png->save($carpeta_imagenes. '/'. $nombre_imagen . '.png');
                $imagen_webp->save($carpeta_imagenes. '/'. $nombre_imagen . '.webp');

                //asignando la foranea
                $proyecto->usuario_id=$_SESSION['id'];
        

                //guardando proyecto
                
                $resultado=$proyecto->guardar();

                //redireccionando al index 
                if($resultado){
                    header('Location: /admin');
                }
            }
     
            
        }
        $alertas=Proyecto::getAlertas();
        $router->render('admin/dashboard/crear',[
            'titulo'=>'Crear proyecto',
            'alertas'=>$alertas
        ]);
    }


    public static function editar(Router $router){
        isAuth();
        $alertas=[];
        //validar id 
        $id=$_GET['id']; //cachamos la id con get 
        //sanitizamos
        $id=filter_var($id, FILTER_VALIDATE_INT);

        if(!$id){
            header('Location: /admin');
        }

        //obtenermos el proyecto a editar
        $proyecto=Proyecto::where('id', $id);
        $proyecto->imagen_actual = $proyecto->imagen;

        if($_SERVER['REQUEST_METHOD']==='POST'){
              //validando la imagen 
              if(!empty($_FILES['imagen']['tmp_name'] ) ){
                $carpeta_imagenes='../public/storage/proyectos';

                //crear carpeta si no existe
                if(!is_dir($carpeta_imagenes)){
                    mkdir($carpeta_imagenes, 777, true);
                }
                //creando 2 tipos de imagenes
                $imagen_png = Image::make($_FILES['imagen']['tmp_name'])->encode('png', 80);
                $imagen_webp = Image::make($_FILES['imagen']['tmp_name'])->encode('webp', 80);

                //creando el nombre de la imagen a guardar en la bd
                $nombre_imagen=md5(uniqid(rand(), true));
                $_POST['imagen']=$nombre_imagen;//asignando el nombre
 
            }else{
                $_POST['imagen'] = $proyecto->imagen_actual;
            }

            $proyecto->sincronizar($_POST);
            $alertas=$proyecto->validarCampos();

            if(empty($alertas)){

              if(isset($nombre_imagen)){
                //guardando la imagen
                $imagen_png->save($carpeta_imagenes. '/'. $nombre_imagen . '.png');
                $imagen_webp->save($carpeta_imagenes. '/'. $nombre_imagen . '.webp');
                }
                //asignando la fecha
                $proyecto->insertarFecha();

                //asignando la foranea
                $proyecto->usuario_id=$_SESSION['id'];
        
               
                //guardando proyecto

                $resultado=$proyecto->guardar();

                //redireccionando al index 
                if($resultado){
                    header('Location: /admin');
                }
            }
     
         

        }
        
        
        $router->render('admin/dashboard/editar',[
            'titulo'=>'Actualizar proyecto',
            'alertas'=>$alertas,
            'proyecto'=>$proyecto
        ]);
    }


    public static function eliminar(){
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $id=$_POST['id'];
            $proyecto= Proyecto::where('id', $id);
            if(!isset($proyecto)){
                header('Location: /admin');
            }

            $resultado=$proyecto->eliminar();

            if($resultado){
                header('Location: /admin');
            }
        }
    }



    //muestra mas información del proyecto
    public static function proyecto(Router $router){
        $id=$_GET['id'];
        $proyecto=Proyecto::where('id',$id);
        $id=filter_var($id, FILTER_VALIDATE_INT);

        if(!$id){
            header('Location: /admin');
        }
     
        
        $router->render('admin/dashboard/proyecto',[
            'titulo'=>$proyecto->titulo,
            'proyecto'=>$proyecto
        ]);

    }

}



?>