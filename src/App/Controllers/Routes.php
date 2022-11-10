<?php
namespace App\Controllers;

class Routes {
    
    function getRoutes () {
        $arrayRutas = [
            'Pages' => [
                ["method" => "GET", "ruta" => "/", "function" => "home"],
                ["method" => "GET", "ruta" => "/registro", "function" => "registro"],
                ["method" => "GET", "ruta" => "/iniciar-sesion", "function" => "ingreso"],
                ["method" => "GET", "ruta" => "/restablecer-contrasena", "function" => "restablecerContrasena"],
                ["method" => "GET", "ruta" => "/nueva-contrasena", "function" => "nuevaContrasena"],
                ["method" => "GET", "ruta" => "/contactanos", "function" => "contacto"],
                ["method" => "GET", "ruta" => "/conocenos", "function" => "conocenos"],
                ["method" => "GET", "ruta" => "/perfil", "function" => "perfil"],
                ["method" => "GET", "ruta" => "/blank-page", "function" => "blankpage"]
            ],
            'Users' => [
                ["method" => "GET", "ruta" => "/salir", "function" => "salir"],
                ["method" => "POST", "ruta" => "/login", "function" => "login"],
                ["method" => "POST", "ruta" => "/sitioiniciarsesion", "function" => "login"],
            ]
        ];

        return $arrayRutas;
    }
}