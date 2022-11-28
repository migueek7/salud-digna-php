<?php
namespace App\Controllers;

class Pages extends Controller
{
    private $entrada;
    
    public function __construct() 
    {
        parent::__construct();
        session_start();

        $this->entrada = "pages"; //ruta de entrada
    }

    public function home()
    {
        $estilos = [
            css().'plugins/swiper-bundle.min',
            css().'global',
            css().'home.min'
        ];

        $scripts = [
            ['route' => js().'plugins/swiper-bundle.min'],
            ['route' => js().'home']
        ];

        $SEO = [
            "title"         => "Inicio",
            "description"   => "Compártenos un poco sobre ti y conviértete en uno de nuestros Pacientes Salud Digna. Obtén beneficios antes que nadie, lleva un control de tu prevención y conoce los estudios que hoy necesitas.",
            "keywords"      => "Salud Digna, Clinica de Salud, Salud"
        ];

        $this->templates->addData(['SEO' => $SEO, 'estilos' => $estilos, 'scripts' => $scripts]);
        echo $this->templates->render($this->entrada.'/home');
    }

    public function registro()
    {
        if (!empty($_SESSION["login"])) 
        {
            header('Location:'.$_ENV['BASE_URL'].'/perfil');
            die();
        }

        $estilos = [
            css().'plugins/sweetalert2.min',
            css().'plugins/swiper-bundle.min',
            css().'plugins/alerts',
            css().'form',
            css().'registro',
        ];

        $scripts = [
            ['route' => js().'plugins/sweetalert2.min'],
            ['route' => js().'plugins/swiper-bundle.min'],
            ['route' => js().'plugins/alerts'],
            ['route' => js().'registro']
        ];

        $SEO = [
            "title"         => "Registro",
            "description"   => "Compártenos un poco sobre ti y conviértete en uno de nuestros Pacientes Salud Digna. Obtén beneficios antes que nadie, lleva un control de tu prevención y conoce los estudios que hoy necesitas.",
            "keywords"      => "Salud Digna, Clinica de Salud, Salud"
        ];

        $this->templates->addData(['SEO' => $SEO, 'estilos' => $estilos, 'scripts' => $scripts]);
        echo $this->templates->render($this->entrada.'/registro');
    }

    public function ingreso()
    {
        if (!empty($_SESSION["login"])) 
        {
            header('Location:'.base_url().'/perfil');
            die();
        }

        $estilos = [
            css().'plugins/sweetalert2.min',
            css().'plugins/swiper-bundle.min',
            css().'plugins/alerts',
            css().'form',
            css().'ingreso',
        ];

        $scripts = [
            ['route' => js().'plugins/sweetalert2.min'],
            ['route' => js().'plugins/swiper-bundle.min'],
            ['route' => js().'plugins/alerts'],
            ['route' => js().'ingreso']
        ];

        $SEO = [
            "title"         => "Iniciar Sesion",
            "description"   => "Compártenos un poco sobre ti y conviértete en uno de nuestros Pacientes Salud Digna. Obtén beneficios antes que nadie, lleva un control de tu prevención y conoce los estudios que hoy necesitas.",
            "keywords"      => "Salud Digna, Clinica de Salud, Salud"
        ];

        $this->templates->addData(['SEO' => $SEO, 'estilos' => $estilos, 'scripts' => $scripts]);
        echo $this->templates->render($this->entrada.'/ingreso');
    }

    
    public function restablecerContrasena()
    {
        $estilos = [
            css().'plugins/sweetalert2.min',
            css().'plugins/swiper-bundle.min',
            css().'plugins/alerts',
            css().'form',
            css().'restablecer-contrasena',
        ];

        $scripts = [
            ['route' => js().'plugins/sweetalert2.min'],
            ['route' => js().'plugins/swiper-bundle.min'],
            ['route' => js().'plugins/crypto-js.min'],
            ['route' => js().'plugins/alerts'],
            ['route' => js().'restablecer-contrasena'],
        ];

        $SEO = [
            "title"         => "Restablecer contraseña",
            "description"   => "Compártenos un poco sobre ti y conviértete en uno de nuestros Pacientes Salud Digna. Obtén beneficios antes que nadie, lleva un control de tu prevención y conoce los estudios que hoy necesitas.",
            "keywords"      => "Salud Digna, Clinica de Salud, Salud"
        ];

        $this->templates->addData(['SEO' => $SEO, 'estilos' => $estilos, 'scripts' => $scripts]);
        echo $this->templates->render($this->entrada.'/restablecer-contrasena');
    }
    
    public function nuevaContrasena()
    {
        $estilos = [
            css().'plugins/sweetalert2.min',
            css().'plugins/swiper-bundle.min',
            css().'plugins/alerts',
            css().'form',
            css().'nueva-contrasena',
        ];

        $scripts = [
            ['route' => js().'plugins/jquery.min'],
            ['route' => js().'plugins/sweetalert2.min'],
            ['route' => js().'plugins/swiper-bundle.min'],
            ['route' => js().'plugins/crypto-js.min'],
            ['route' => js().'plugins/alerts'],
            ['route' => js().'nueva-contrasena'],
        ];

        $SEO = [
            "title"         => "Nueva contraseña",
            "description"   => "Compártenos un poco sobre ti y conviértete en uno de nuestros Pacientes Salud Digna. Obtén beneficios antes que nadie, lleva un control de tu prevención y conoce los estudios que hoy necesitas.",
            "keywords"      => "Salud Digna, Clinica de Salud, Salud"
        ];

        $this->templates->addData(['SEO' => $SEO, 'estilos' => $estilos, 'scripts' => $scripts]);
        echo $this->templates->render($this->entrada.'/nueva-contrasena');
    }
   
    public function perfil()
    {
        if (empty($_SESSION["login"])) 
        {
            header('Location:'.base_url().'/iniciar-sesion');
            die();
        }
        
        $estilos = [
            css().'plugins/sweetalert2.min',
            css().'plugins/alerts',
            css().'perfil'
        ];

        $scripts = [
            ['route' => js().'plugins/sweetalert2.min'],
            ['route' => js().'plugins/alerts'],
            ['route' => js().'perfil']
        ];

        $SEO = [
            "title"         => "Perfil",
            "description"   => "Compártenos un poco sobre ti y conviértete en uno de nuestros Pacientes Salud Digna. Obtén beneficios antes que nadie, lleva un control de tu prevención y conoce los estudios que hoy necesitas.",
            "keywords"      => "Salud Digna, Clinica de Salud, Salud"
        ];

        $this->templates->addData(['SEO' => $SEO, 'estilos' => $estilos, 'scripts' => $scripts]);
        echo $this->templates->render($this->entrada.'/perfil');
    }

    public function contacto()
    {   
        $estilos = [
            css().'salud-digna/bootstrap.min',
            css().'plugins/sweetalert2.min',
            css().'plugins/swiper-bundle.min',
            css().'plugins/alerts',
            css().'form',
            css().'contacto',
            css().'estilos'
        ];

        $scripts = [
            ['route' => js().'salud-digna/jquery.min'],
            ['route' => js().'salud-digna/jquery-ui.min'],
            ['route' => js().'salud-digna/bootstrap.min'],
            ['route' => js().'plugins/sweetalert2.min'],
            ['route' => js().'plugins/swiper-bundle.min'],
            ['route' => js().'plugins/alerts'],
            ['route' => js().'main'],
            ['route' => js().'contacto', 'module' => true]
        ];

        $SEO = [
            "title"         => "Contacto",
            "description"   => "Compártenos un poco sobre ti y conviértete en uno de nuestros Pacientes Salud Digna. Obtén beneficios antes que nadie, lleva un control de tu prevención y conoce los estudios que hoy necesitas.",
            "keywords"      => "Salud Digna, Clinica de Salud, Salud"
        ];

        $this->templates->addData(['SEO' => $SEO, 'estilos' => $estilos, 'scripts' => $scripts]);
        echo $this->templates->render($this->entrada.'/contacto');
    }

    public function conocenos()
    {   
        $estilos = [
            css().'salud-digna/bootstrap.min',
            css().'plugins/sweetalert2.min',
            css().'plugins/swiper-bundle.min',
            css().'plugins/alerts',
            css().'form',
            css().'conocenos',
            css().'estilos'
        ];

        $scripts = [
            ['route' => js().'salud-digna/jquery.min'],
            ['route' => js().'salud-digna/jquery-ui.min'],
            ['route' => js().'salud-digna/bootstrap.min'],
            ['route' => js().'plugins/sweetalert2.min'],
            ['route' => js().'plugins/swiper-bundle.min'],
            ['route' => js().'plugins/alerts'],
            ['route' => js().'plugins/wow.min'],
            ['route' => js().'main'],
            ['route' => js().'conocenos']
        ];

        $SEO = [
            "title"         => "Conocenos",
            "description"   => "Compártenos un poco sobre ti y conviértete en uno de nuestros Pacientes Salud Digna. Obtén beneficios antes que nadie, lleva un control de tu prevención y conoce los estudios que hoy necesitas.",
            "keywords"      => "Salud Digna, Clinica de Salud, Salud"
        ];

        $this->templates->addData(['SEO' => $SEO, 'estilos' => $estilos, 'scripts' => $scripts]);
        echo $this->templates->render($this->entrada.'/conocenos');
    }


    public function blankpage()
    {   
        $estilos = [
            css().'salud-digna/bootstrap.min',
            css().'plugins/swiper-bundle.min',
            css().'plugins/alerts',
            css().'estilos'
        ];

        $scripts = [
            ['route' => js().'salud-digna/jquery.min'],
            ['route' => js().'salud-digna/bootstrap.min'],
            ['route' => js().'plugins/swiper-bundle.min'],
            ['route' => js().'main'],
        ];

        $SEO = [
            "title"         => "Covid",
            "description"   => "Descripción pagina covid",
            "keywords"      => "Salud Digna, Clinica de Salud, Salud"
        ];

        $this->templates->addData(['SEO' => $SEO, 'estilos' => $estilos, 'scripts' => $scripts]);
        echo $this->templates->render($this->entrada.'/page_blank');
    }
   

    public function error404()
    {
        $SEO = [
            "title"         => "ERROR 404",
            "description"   => "",
            "keywords"      => ""
        ];

        $this->templates->addData(['title' => "Error 404", 'SEO' => $SEO]);
        echo $this->templates->render('pages/error404');
    }
    

    public function redirige($ruta)
    {
        if (!empty($_SESSION["login"])) 
        {
            header('Location:'.base_url().'/'.$ruta);
            die();
        }
    }
}