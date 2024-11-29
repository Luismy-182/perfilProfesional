<?php

namespace Model;

class Usuario extends ActiveRecord {
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'nombre', 'apellidos', 'usuario', 'password'];

    public $id;
    public $nombre;
    public $apellidos;
    public $usuario;
    public $password;


    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellidos = $args['apellidos'] ?? '';
        $this->usuario = $args['usuario'] ?? '';
        $this->password = $args['password'] ?? '';
      
    }

    // Validar el Login de Usuarios
    public function validarLogin() {
        if(!$this->usuario) {
            self::$alertas['error'][] = 'El nombre de usuario es Obligatorio';
        }
        
        if(!$this->password) {
            self::$alertas['error'][] = 'El Password no puede estar vacio';
        }
        return self::$alertas;

    }

    // Validación para cuentas nuevas
    public function validar_cuenta() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->apellidos) {
            self::$alertas['error'][] = 'El Apellido es Obligatorio';
        }
        if(!$this->usuario) {
            self::$alertas['error'][] = 'El nombre de usuario es Obligatorio';
        }
        if(!$this->password) {
            self::$alertas['error'][] = 'El Password no puede ir vacio';
        }
        if(strlen($this->password) < 6) {
            self::$alertas['error'][] = 'El password debe contener al menos 6 caracteres';
        }
       
        return self::$alertas;
    }

    // Valida un email


    // Valida el Password 
    public function validarPassword() {
        if(!$this->password) {
            self::$alertas['error'][] = 'El Password no puede ir vacio';
        }
        if(strlen($this->password) < 6) {
            self::$alertas['error'][] = 'El password debe contener al menos 6 caracteres';
        }
        return self::$alertas;
    }

 

 
 

    // Hashea el password
    public function hashPassword() : void {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }



    //existe el usuario?


    public function existeUsuario(){
        //creando la query
        $query="SELECT usuario FROM ".self::$tabla." WHERE  usuario = '$this->usuario' ";
       
        //comprobando con sql
        $resultado= self::$db->query($query); //0- no lo encontro, 1- si lo encontro

        if($resultado->num_rows){
            self::$alertas['error'][]='Error el usuario ya esta registrado';
        }   

        return $resultado;
    }


    public function existeLoggin(){
         //creando la query
         $query="SELECT usuario FROM ".self::$tabla." WHERE  usuario = '$this->usuario' ";
       
         //comprobando con sql
         $resultado=self::$db->query($query); //0- no lo encontro, 1- si lo encontro
 
         if(!$resultado->num_rows){
             self::$alertas['error'][]='Lo sentimos el usuario no esta registrado';
            
         }   
 
         return $resultado;
    }


    public function comprobarPassword($password){
        $resultado=password_verify($password, $this->password);
        //seteamos alerta
        if(!$resultado){
            self::$alertas['error'][]='Error, el password es incorrecto';
            return;
        }else{
            return true;
        }

    }   

   
}