<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\DashboardController;
use Controllers\PortafolioController;




$router = new Router();


// Index
$router->get('/',[DashboardController::class, 'index']);


//proyectos
$router->get('/portafolio',[PortafolioController::class, 'index']);


$router->comprobarRutas();