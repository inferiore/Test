<?php
namespace Directorio\Controladores;

use Directorio\Modelos\Usuario;
use Josantonius\Session\Session;

class Usuarios extends ControladorBase {


    function listar(){

        if(!$this->estaLogeado()){
            $this->redireccionar("../autenticacion/formulariologin");
        }

        $nombre_o_email = (isset($this->datos["nombre_o_email"])) ? $this->datos["nombre_o_email"] : null;

        $usuarios = \Directorio\Reposorio\CustomerData::buscar_por_email_o_nombre($nombre_o_email);

        echo $this->renderizar('listado',
            [
                'usuarios' => $usuarios,
                'nombre_o_email'=>$nombre_o_email
            ]);
    }

    function registrar(){
        if($this->estaLogeado()){
            $this->redireccionar("../usuarios/listar");
        }
        echo $this->renderizar('registro',[]);
    }

    function almacenar(){
        $error = null;
        $validacion = $this->validar($this->datos,
            [
                "nombre_completo" => "required|min:3",
                "email" => "email|required",
                "identificacion" => "required",
                "contrasena" => "required|min:6|regex:(.*[0-9].*)",
            ]);
        if ($validacion->fails()) {
            $errors = $validacion->errors();
            echo $this->renderizar('registro',array_merge($this->datos,["errors"=>$errors->firstOfAll()]));

        } else {
            $datos = $this->datos;
            $datos["contrasena"] = hash("md5",$this->datos["contrasena"]);
            Usuario::create($datos);
            $this->redireccionar("../autenticacion/formulariologin");
        }

    }

}