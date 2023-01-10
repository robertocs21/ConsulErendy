<?php 
namespace Model;
class BusquedaDeuda extends ActiveRecord{
    protected static $tabla = 'pacientes';
    protected static $columnasDB = ['nombre','apellido','aapellido','id','total'];
    public $nombre;
    public $apellido;
    public $sapellido;
    public $id;
    public $total;

    

    public function __construct($args = []){
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->sapellido = $args['sapellido'] ?? '';
        $this->id = $args['id'] ?? '';
        $this->total = $args['total'] ?? '';
    }

public function validarBusqueda(){
    if(!$this->id){
       
    }       
    return self::$alertas;
}

}

?>