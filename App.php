<?php

class App{

    function __construct($pdo)
    {

        $url = substr($_SERVER["REQUEST_URI"],1,strlen($_SERVER["REQUEST_URI"]));
        $elementos = explode("/",$url);
        $clase = strtoupper(substr($elementos[0],0,1))
            . substr($elementos[0],1,strlen($elementos[0]));
        $funcion = explode("?",$elementos[1])[0];

        $datos = $this->getDatos($_SERVER['REQUEST_METHOD']);
        $validador = new \Directorio\Librerias\Validador($pdo);

        $ruta = "Directorio\Controladores\\".$clase;
        $controlador = new $ruta($datos,$validador);

        if(isset($elementos[1])){
            $controlador->{$funcion}();
        }

    }

    function getDatos($requestType){
        if($requestType =="POST" ){
            return $_POST;
        }
        if($requestType =="GET" ){
            return $_GET;
        }
        return [];

    }



}

