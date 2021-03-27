<?php

class App{

    function __construct()
    {

        $url = substr($_SERVER["REQUEST_URI"],1,strlen($_SERVER["REQUEST_URI"]));
        $elementos = explode("/",$url);
        $clase = strtoupper(substr($elementos[0],0,1))
            . substr($elementos[0],1,strlen($elementos[0]));

        $ruta = "Directorio\Controladores\Usuarios";
        $controlador = new $ruta;

    }
}

