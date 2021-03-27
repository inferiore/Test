<?php
namespace Directorio\Controladores;
use Jenssegers\Blade\Blade;
class Usuarios extends ControladorBase {

    function __construct($request,$blade)
    {
        parent::__construct($request,$blade);
    }
    function listar(){
        // where("email","like",$this->request["email"])
        $usuarios = \Directorio\Modelos\Usuario::all();
        echo $this->blade->make('listado-usuarios', ['usuarios' => $usuarios])->render();
    }
    function registrar(){
//        $usuarios = \Directorio\Modelos\Usuario::where("email","like",$this->request["email"])->get();
        var_dump($this->request);

    }
    function login(){
        var_dump($this->request);
    }

    function logout(){
        var_dump($this->request);
    }



}