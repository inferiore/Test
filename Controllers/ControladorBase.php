<?php
namespace Directorio\Controladores;
use Josantonius\Session\Session;

class ControladorBase {

    protected  $datos;
    protected  $blade;
    protected  $validador;
    protected $manejadorDeSesion;


    public function __construct($datos,$blade,$validador)
    {
        $this->datos = $datos;
        $this->blade = $blade;
        $this->validador = $validador;
        Session::init(3600);
    }

    protected function validar($data,$reglas){
        return $this->validador->validate($data,$reglas,[
            'required' => ':attribute no debe ser nulo',
            'email' => 'El :attribute debe ser valido',
            'regex' => ':attribute debe tener al menos un numero',
            'min' => ':attribute debe tener minimo :min caracteres'

        ])
        ;
    }

    protected function redireccionar($to){
        header("Location:".$to);
        exit;
    }

    protected function estaLogeado(){

        return (!is_null(Session::get("user")));

    }



}