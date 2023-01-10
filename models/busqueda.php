<?php 
namespace Model;
class Busqueda extends ActiveRecord{
    protected static $tabla = 'pacientes';
    protected static $columnasDB = ['nombre','apellido','aapellido','id'];
    public $nombre;
    public $apellido;
    public $sapellido;
    public $id;

    

    public function __construct($args = []){
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->sapellido = $args['sapellido'] ?? '';
        $this->id = $args['id'] ?? '';
    }

public function validarBusqueda(){
    if(!$this->id){
       
    }       
    return self::$alertas;
}

}

?>