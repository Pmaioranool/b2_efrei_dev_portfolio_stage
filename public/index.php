<?php
session_start();
$_SESSION['language'] = $_SESSION['language'] ?? 'fr';
// Ici j'inclus le fichier autoload.php car c'est grâce à ce fichier que je vais pouvoir inclure TOUTES mes dépendances composer (donc ce qu'il y a dans le dossier vendor)
require_once __DIR__ . "/../vendor/autoload.php";
// Change the path according to your project
use App\Controllers\MainController;
use App\Controllers\CoreController;
use Alterouter\Alterouter;
use Alterouter\Request;

// Je créer une instance de Alterouter (la librairie que j'ai installé)
$router = new Alterouter();

// Créer une route avec la méthode générique "addRoute"
$router->addRoute('GET', '/', MainController::class . '@home', 'home');
$router->addRoute('GET', '/material', MainController::class . '@material', 'material');
$router->addRoute('GET', '/technologies', MainController::class . '@technologies', 'technologies');
$router->addRoute('GET', '/projects', MainController::class . '@projects', 'projects');
$router->addRoute('POST', '/setLanguage', MainController::class . '@setLanguage', 'setLanguage');


$route = $router->match(Request::getMethodFromGlobals(), Request::getPathFromGlobals());

if ($route !== null) {
    if (is_string($route->getHandler())) {
        [$controller, $method] = explode('@', $route->getHandler());
        $controller = new $controller();
        $controller->$method($route->getMatches());
    } else {
        call_user_func_array($route->getHandler(), $route->getMatches());
    }
} else {
    // Handle 404
    $controller = new CoreController();
    $controller->notFound();
}