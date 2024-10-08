<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\DashboardController;
use Controllers\ProyectosController;



$router = new Router();


// Index
$router->get('/',[DashboardController::class, 'index']);


//proyectos
$router->get('/proyectos',[ProyectosController::class, 'index']);


$router->comprobarRutas();