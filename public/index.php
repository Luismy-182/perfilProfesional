<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\DashboardController;
use Controllers\LoginController;
use Controllers\PortafolioController;
use Controllers\AdminController;
use Controllers\RegistroController;

$router = new Router();


// Index
$router->get('/',[DashboardController::class, 'index']);
//proyectos
$router->get('/portafolio',[PortafolioController::class, 'index']);



/********************área para admins*****************************/

//registro
$router->get('/login/registro',[RegistroController::class,'index']);
$router->post('/login/registro',[RegistroController::class,'index']);
//login
$router->get('/login',[LoginController::class,'index']);
$router->post('/login',[LoginController::class,'index']);
//Admin
$router->get('/admin',[AdminController::class,'index']);
$router->get('/admin/crear',[AdminController::class,'crear']);
$router->post('/admin/crear',[AdminController::class,'crear']);




$router->comprobarRutas();