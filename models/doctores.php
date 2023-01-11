<?php

namespace Model;

class Doctores extends ActiveRecord{
    //Base de datos
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id','nombre','apellido','email','password'];
    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $password;

    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
    }
    public function validarLogin(){
        if(!$this->email){
            self::$alertas['error'][] = 'El email es obligatorio';
        }
       
        return self::$alertas;
    }
    public function hashPassword(){
        $this-> password = password_hash($this-> password, PASSWORD_BCRYPT);
    }
    public function comprobarPasswordAndVerificado($password){
        $resultado = password_verify($password, $this->password);
        if(!$resultado){
            self::$alertas['error'][]='Contraseña incorrecta';
        }else{
            return true;
        }
    }
}