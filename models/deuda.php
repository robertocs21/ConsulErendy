<?php 
namespace Model;
class Deuda extends ActiveRecord{
    protected static $tabla = 'deuda';
    protected static $columnasDB = ['nombre','apellido','sapellido','folio','total','fechatotal','id'];
    public $nombre;
    public $apellido;
    public $sapellido;
    public $folio;
    public $total;
    public $fechatotal;
    public $id;
    

    public function __construct($args = []){
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->sapellido = $args['sapellido'] ?? '';
        $this->folio = $args['folio'] ?? '';
        $this->total = $args['total'] ?? '';
        $this->fechatotal = $args['fechatotal'] ?? '';
        $this->id = $args['id'] ?? '';
    }



}

?>