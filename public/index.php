<?php 

use Controllers\LoginController;
use Controllers\PacienteController;
require_once __DIR__ . '/../includes/app.php';

use MVC\Router;

$router = new Router();

$router->get('/',[LoginController::class, 'direc']);
$router->post('/',[LoginController::class, 'direc']);

$router->get('/direc',[LoginController::class, 'direc']);
$router->post('/direc',[LoginController::class, 'direc']);

$router->get('/historia',[PacienteController::class, 'historia']);
$router->post('/historia',[PacienteController::class, 'historia']);

$router->get('/presupuesto',[PacienteController::class, 'presupuesto']);
$router->post('/presupuesto',[PacienteController::class, 'presupuesto']);

$router->get('/buscar',[PacienteController::class, 'buscar']);
$router->post('/buscar',[PacienteController::class, 'buscar']);

$router->get('/adeudos',[PacienteController::class, 'adeudos']);
$router->post('/adeudos',[PacienteController::class, 'adeudos']);

$router->get('/busqueda',[PacienteController::class, 'busqueda']);
$router->post('/busqueda',[PacienteController::class, 'busqueda']);

$router->get('/consentimiento',[PacienteController::class, 'consentimiento']);
$router->post('/consentimiento',[PacienteController::class, 'consentimiento']);

$router->get('/historia_hecha',[PacienteController::class, 'historia_hecha']);
$router->post('/historia_hecha',[PacienteController::class, 'historia_hecha']);

$router->get('/presupuestoact',[PacienteController::class, 'presupuestoact']);
$router->post('/presupuestoact',[PacienteController::class, 'presupuestoact']);

$router->get('/sesion',[LoginController::class, 'sesion']);
$router->post('/sesion',[LoginController::class, 'sesion']);
// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();