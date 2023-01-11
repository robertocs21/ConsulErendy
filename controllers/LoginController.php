<?php

namespace Controllers;
include '../models/doctores.php';
include '../models/busqueda.php';
include '../models/busquedadeuda.php';
include '../models/deuda.php';
include '../models/doctores.php';
include '../models/historia.php';

use Model\Doctores;
use MVC\Router;


class LoginController{
    public static function login(Router $router){
        $auth = new Doctores;
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $alertas = [];
            $auth = new Doctores($_POST);
            //debuguear($auth);
            $alertas = $auth->validarLogin();
            //debuguear($alertas);
            if(empty($alertas)){
                $doctor = Doctores::where('email', $auth->email);
                if($doctor){
                    if($doctor->comprobarPasswordAndVerificado($auth->password)){
                        session_start();
                        $_SESSION['id'] = $doctor->id;
                        $_SESSION['nombre'] = $doctor->nombre;
                        $_SESSION['login'] = true;

                        header('location: /direc');
                    }
                }else{
                    Doctores::setAlerta('error','Usuario no encontrado');
                }
            }
        }
        $router->render('auth/login', [
           
            'auth'=>$auth,
            
        ]);

    }

    public static function direc(Router $router){
        $router->render('auth/direc');
    }
    public static function sesion(Router $router){
        $doctor = new Doctores();
        //Alertas vacias
        $alertas = [];
        if($_SERVER['REQUEST_METHOD']=== 'POST'){
           
            $doctor->sincronizar($_POST);
            //Hashear el password
            $doctor->hashPassword();
            //Crear el usuario
            $resultado = $doctor->guardar();
            if($resultado){
                header('Location: /');
             }
            }
        $router->render('auth/sesion',[

        ]);
    }
    
}
