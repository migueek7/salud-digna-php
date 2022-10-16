<?php 
namespace App\Controllers;

class UsuarioController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    /* -------------------------------------------------------------------------- */
    /*                             INGRESO DE USUARIO                             */
    /* -------------------------------------------------------------------------- */
    public function login()
    {
        if (isset($_POST)) {

            //$datos = json_decode($_POST['datos'], true);
            //$datos = json_decode($_POST, true);
            $datos = $_POST;

            if ($datos['Nombre']) 
            {
                $_SESSION['login'] = true;
                $_SESSION['useData'] = $datos;

                $json = ["status" => 200, "statusText" => "ok", "datos" => $datos];

                echo json_encode($json);
            }
        }
    }

    public function salir()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location:'.$_ENV['BASE_URL']);
        die();
    }


    public function prueba() {

        if (isset($_POST)) {
            dep($_POST);

            // $json = json_decode($_POST);
            //echo json_encode($json);
        }
    }

}