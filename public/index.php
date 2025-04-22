<?php
require_once '../app/config/global.php';
require_once '../app/controllers/homeController.php';
require_once '../app/controllers/regionalController.php';
require_once '../app/controllers/rolController.php';
require_once '../app/controllers/usuarioController.php';
require_once '../app/controllers/AdministradorController.php';
require_once '../app/controllers/centroController.php';
require_once '../app/controllers/centroController.php';
require_once '../app/controllers/asistenciaController.php';
require_once '../app/controllers/loginController.php';
require_once '../app/controllers/programaController.php';
require_once '../app/controllers/FichaController.php';
require_once '../app/controllers/CoordinadorController.php';
require_once '../app/controllers/HorarioController.php';
require_once '../app/controllers/CompetenciaController.php';
require_once '../app/controllers/AprendizController.php';


$url = $_SERVER['REQUEST_URI']; //Lo que se ingresa en la URL
$routes = include_once '../app/config/routes.php';

$matchedRoute = null;
foreach ($routes as $route => $routeConfig) {
    if(preg_match("#^$route$#", $url, $matches)) {
        $matchedRoute = $routeConfig;
        break;
    }
    // Las expresiones regulares encuentra un patrón en un String
}
if($matchedRoute){
    $controllerName = $matchedRoute['controller'];
    $actionName = $matchedRoute['action'];
    if(class_exists($controllerName) && method_exists($controllerName, $actionName)){
        $parameters = array_slice($matches, 1);
        $controller = new $controllerName();
        $controller->$actionName(...$parameters);
        exit;
    }
}
