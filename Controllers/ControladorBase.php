<?php
namespace Directorio\Controladores;

class ControladorBase {

    public  $request;
    public  $blade;

    public function __construct($request,$blade)
    {
        $this->request = $request;
        $this->blade = $blade;

    }
}