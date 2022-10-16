<?php 
require_once "./vendor/autoload.php";
require_once "./helpers/helpers.php";

/* -------------------------------------------------------------------------- */
/*                            VARIABLES DE ENTORNO                            */
/* -------------------------------------------------------------------------- */

use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable('./');
$dotenv->load();

/* -------------------------------------------------------------------------- */
/*                    Eliminar "/" de la ruta controlador                     */
/* -------------------------------------------------------------------------- */

$url = !empty($_GET['url']) ? rtrim($_GET['url'], '/') : '/';
$arrayUrl = explode("/", strtolower($url));
$ruta = strtolower($arrayUrl[0]);

if (count($arrayUrl) == 1) {
   
    if ($_SERVER["REQUEST_URI"][-1] == '/') {
        header("Location: ".base_url().substr($_SERVER["REQUEST_URI"], 0, -1));
        die();
    }
}

/* -------------------------------------------------------------------------- */
/*                                    CORS                                    */
/* -------------------------------------------------------------------------- */

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Authorization, Accept, Access-Control-Allow-Methods");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Credentials");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    $json = [
        'status' => 200,
        'statuText' => "ok"
    ];
    echo json_encode($json, http_response_code($json["status"]));
    return;
}

/* -------------------------------------------------------------------------- */
/*                            CONTROLADOR DE RUTAS                            */
/* -------------------------------------------------------------------------- */

$router = new AltoRouter();

$router->map( 'GET', '/', 'Pages#home');
$router->map( 'GET', '/registro', 'Pages#registro');
$router->map( 'GET', '/iniciar-sesion', 'Pages#ingreso');
$router->map( 'GET', '/restablecer-contrasena', 'Pages#restablecerContrasena');
$router->map( 'GET', '/nueva-contrasena', 'Pages#nuevaContrasena');
$router->map( 'GET', '/contactanos', 'Pages#contacto');
$router->map( 'GET', '/perfil', 'Pages#perfil');
$router->map( 'POST', '/login', 'Usuarios#login');
$router->map( 'GET', '/salir', 'Usuarios#salir');
$router->map( 'POST', '/sitioiniciarsesion', 'Usuarios#login');
$router->map( 'POST', '/prueba', 'Usuarios#prueba');

$router->map( 'GET', '/blank-page', 'Pages#blankpage');

/* -------------------------------------------------------------------------- */
/*                     VALIDAR SI EXISTE LA RUTA INGRESADA                    */
/* -------------------------------------------------------------------------- */

$match = $router->match();
$match ? callController($match) : open404Error(); 

/* -------------------------------------------------------------------------- */
/*                         REDIRIGE A PAGINA ERROR 404                        */
/* -------------------------------------------------------------------------- */

function open404Error()
{
    header($_SERVER["SERVER_PROTOCOL"]. ' 404 Not Found');
    $controllerObject = new App\Controllers\Pages;
    $controllerObject->error404();
}

/* -------------------------------------------------------------------------- */
/*                       LLAMA AL CONTROLADOR DE LA RUTA                      */
/* -------------------------------------------------------------------------- */

function callController($match)
{
    list($controller, $action) = explode("#", $match['target']);
    $controller = 'App\\Controllers\\' . $controller;

    if (method_exists($controller, $action)) 
    {
        $controllerObject = new $controller;
        call_user_func_array(array($controllerObject,$action), $match['params']);
    }else{
        open404Error();
    }
}