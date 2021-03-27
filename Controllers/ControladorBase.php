<?php
namespace Directorio\Controladores;


class ControladorBase {

    protected  $datos;
    protected  $blade;
    protected  $validador;


    public function __construct($datos,$blade,$validador)
    {
        $this->datos = $datos;
        $this->blade = $blade;
        $this->validador = $validador;


    }

    protected function validar($data,$rules){
        return $this->validador->validate($data,$rules,[
            'required' => ':attribute no debe ser nulo',
            'email' => 'El :attribute debe ser valido',
            'regex' => ':attribute debe tener al menos un numero',
            'min' => ':attribute debe tener minimo :min caracteres'

        ])
        ;
    }

    protected function redirecto($to){
        header("Location:".$to);
        exit;
    }



}