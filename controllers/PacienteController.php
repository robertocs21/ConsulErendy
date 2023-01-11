<?php

namespace Controllers;
include '../models/doctores.php';
include '../models/busqueda.php';
include '../models/busquedadeuda.php';
include '../models/deuda.php';
include '../models/doctores.php';
include '../models/historia.php';
use Model\Historia;
use Model\Busqueda;
use Model\Deuda;
use Model\BusquedaDeuda;
use MVC\Router;

class PacienteController{
    public static function historia(Router $router){
        $paciente = new Historia(); 
        if($_SERVER['REQUEST_METHOD'] === 'POST'){           
            $paciente->sincronizar($_POST);
            debuguear($paciente);
            $resultado = $paciente->guardar();
            //debuguear($paciente);
            header("location: /presupuesto?folio=$paciente->folio");
        }
        $router->render('auth/historia',[
            'paciente'=> $paciente

            
        ]);
    }
    public static function registros(Router $router){
        $router->render('auth/registros');
    }
    
    public static function buscar(Router $router){
        $busqueda = new Busqueda();
        $alertas = [];
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
            $busqueda->sincronizar($_POST);
            $alertas = $busqueda->validarBusqueda();
            if(empty($alertas)){
            header("Location: busqueda?nombre=$busqueda->nombre");
            if(!$busqueda->nombre){
                header("Location: busqueda?apellido=$busqueda->apellido");
            }
            
            }
        }
 
        $router->render('auth/buscar',[
            'busqueda'=> $busqueda
        ]);
    }
    public static function adeudos(Router $router){
        $busqueda = new Historia();
        $resultado = $busqueda->all();
        $router->render('auth/adeudos',[
            'resultado' => $resultado
        ]);
    }
    public static function busqueda(Router $router){
        $nombre = $_GET['nombre'];
        $busqueda = new Busqueda();

        if(!$nombre){
            $apellido = $_GET['apellido'];
            $resultado = $busqueda->buscarap($apellido);
        }else{
            $resultado = $busqueda->buscar($nombre);
        }
        $router->render('auth/busqueda',[
            'resultado'=>$resultado
        ]);
    }
    public static function consentimiento(Router $router){
        $id=$_GET['id'];
        $busqueda = new Historia();
        $paciente = $busqueda->find($id);
        //debuguear($paciente);
        $router->render('auth/consentimiento',[
            'paciente'=>$paciente
        ]);
    }
    public static function historia_hecha(Router $router){
        $id=$_GET['id'];
        $busqueda = new Historia();
        $paciente = $busqueda->find($id);
        //debuguear($paciente);
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $paciente->sincronizar($_POST);
            //debuguear($paciente);
            $paciente->guardar();
            //debuguear($paciente);
        }
        $router->render('auth/historia_hecha',[
            'paciente'=> $paciente
        ]);
    }
    public static function presupuesto(Router $router){
        $busqueda = new Historia;
        $deuda = new Deuda;
        //$busqueda2 = new BusquedaDeuda;
        $folio = $_GET['folio'];
        $resultado = $busqueda->buscarfolio($folio);
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $busqueda->sincronizar($_POST);
            $abono = (int)$_POST['abono'];
            $cobro = (int)$_POST['costo'];
            $totalant =(int) $busqueda->total;
            if(!$cobro){
                $total = $totalant - $abono;
                $busqueda->total=$total;
                
                $busqueda->guardar();
                header("Location: presupuestoact?folio=$busqueda->folio");
            }else{
                $total = $totalant + $cobro;
                $busqueda->total=$total;

                $busqueda->guardar();
                header("Location: presupuestoact?folio=$busqueda->folio");
            }
        }
        $router->render('auth/presupuesto',[
            'resultado'=> $resultado,
            'deuda'=>$deuda
            
        ]);
    }
    public static function presupuestoact(Router $router){
        $busqueda = new Historia;
        $folio = $_GET['folio'];
        $resultado = $busqueda->buscarfolio($folio);
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $busqueda->sincronizar($_POST);
            $abono = (int)$_POST['abono'];
            $cobro = (int)$_POST['costo'];
            $totalant =(int) $busqueda->total;
            if(!$cobro){
                $total = $totalant - $abono;
                $busqueda->total=$total;
                //debuguear($busqueda);
                $busqueda->guardar();
                header("Location: presupuestoact?folio=$busqueda->folio");
            }else{
                $total = $totalant + $cobro;
                $busqueda->total=$total;
                //debuguear($busqueda);
                $busqueda->guardar();
                header("Location: presupuestoact?folio=$busqueda->folio");
            }
        }
        $router->render('auth/presupuestoact',[
            'resultado'=> $resultado
            
        ]);
    }
}
