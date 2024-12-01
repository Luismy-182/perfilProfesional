<?php 

namespace Model;

class Proyecto extends ActiveRecord{
    protected static $tabla='proyectos';
    protected static $columnasDB = ['id','titulo','descripcion','enlace1','enlace2','enlace3','imagen','importancia','fecha','usuario_id'];


    public $id;
    public $titulo;
    public $descripcion;
    public $enlace1;
    public $enlace2;
    public $enlace3;
    public $imagen;
    public $importancia;
    public $fecha;
    public $usuario_id;

    public function __construct($args=[]) {
        $this->id=$args['id'] ?? null;
        $this->titulo=$args['titulo'] ?? '';
        $this->descripcion=$args['descripcion'] ?? '';
        $this->enlace1=$args['enlace1'] ?? '';
        $this->enlace2=$args['enlace2'] ?? '';
        $this->enlace3=$args['enlace3'] ?? '';
        $this->imagen=$args['imagen'] ?? '';
        $this->importancia=$args['importancia'] ?? 0;
        $this->fecha=$args['fecha'] ?? '';
        $this->usuario_id=$args['usuario_id'] ?? null;

    }



    public function validarCampos(){
        if(!$this->titulo){
            self::$alertas['error'][]='Error el título es obligatorio';
        }
        if(!$this->descripcion){
            self::$alertas['error'][]='Error la descripción es obligatoria';
        }
        if(!$this->enlace1){
            self::$alertas['error'][]='Error el enlace a Github es obligatorio';
        }
        if(!$this->imagen){
            self::$alertas['error'][]='Error agrega una imagen del proyecto';
        }
        if(!is_numeric($this->importancia)){
            self::$alertas['error'][]='Error asigna un nivel de importancia al proyecto';
        }
        return self::$alertas;
    }


    public function insertarFecha(){
        if(!$this->fecha){
        $resultado=$this->fecha=date('Y-m-d');

        return $resultado;
        }
        
    }



    
    

}