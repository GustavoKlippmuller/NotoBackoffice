<?php 

require_once __DIR__ . '/../includes/app.php';


use MVC\Router;
use Controllers\LoginController;
use Controllers\MenuController;

$router = new Router();

$router->get('/',[LoginController::class, 'index']);
$router->post('/',[LoginController::class, 'index']);

$router->get('/olvide', [LoginController::class, 'olvide']);
$router->post('/olvide', [LoginController::class, 'olvide']);
$router->get('/recuperar', [LoginController::class, 'recuperar']);
$router->post('/recuperar', [LoginController::class, 'recuperar']);

$router->get('/logout', [LoginController::class, 'logout']);

$router->get('/menu',[MenuController::class, 'menu']);

$router->comprobarRutas();