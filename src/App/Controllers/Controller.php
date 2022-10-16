<?php 
namespace App\Controllers;
use League\Plates\Engine;
use League\Plates\Extension\URI;
use League\Plates\Template\Template;

class Controller
{
    protected $templates;

    public function __construct()
    {
        $this->templates = new Engine('./views');
        $this->templates->loadExtension(new \League\Plates\Extension\URI($_SERVER['REQUEST_URI']));   
    }
}