<?php
namespace Directorio\Controladores;
use Josantonius\Session\Session;

class ControladorBase {

    protected  $datos;
    protected  $blade;
    protected  $validador;
    protected $http;



    public function __construct($datos,$validador)
    {
        $this->datos = $datos;
        $this->validador = $validador;
        Session::init(variables_de_ambiente("SESSION_LIFE_TIME",3600));

    }



    protected function redireccionar($to){

        header("Location:".$to);
        exit;
    }

    protected function estaLogeado(){

        return (!is_null(Session::get("user")));

    }




}