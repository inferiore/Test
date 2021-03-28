<?php
namespace Directorio\Controladores;

use Directorio\Modelos\Usuario;
use Directorio\Repositorio\CustomerData;
use Directorio\Librerias\Vista;

class Usuarios extends ControladorBase {


    function listar(){

        if(!$this->estaLogeado()){
            $this->redireccionar("../autenticacion/formulariologin");
        }

        $nombre_o_email = (isset($this->datos["nombre_o_email"])) ? $this->datos["nombre_o_email"] : null;

        $usuarios = CustomerData::buscar_por_email_o_nombre($nombre_o_email);

        echo Vista::renderizar('listado',
            [
                'usuarios' => $usuarios,
                'nombre_o_email'=>$nombre_o_email
            ]);
    }

    function registrar(){
        if($this->estaLogeado()){
            $this->redireccionar("../usuarios/listar");
        }
        $paises = CustomerData::obtener_paises();
        echo Vista::renderizar('registro',["paises" => $paises]);
    }

    function almacenar(){
        $error = null;
        $validacion = $this->validar($this->datos,
            [
                "nombre_completo" => "required|min:3",
                "identificacion" => "required|unique:usuarios,identificacion",
                "email" => "unique:usuarios,email|email|required",
                "contrasena" => "required|min:6|regex:(.*[0-9].*)",
                "pais" => "required",
            ]);
        if ($validacion->fails()) {
            $errors = $validacion->errors();
            $paises = CustomerData::obtener_paises();
            echo Vista::renderizar('registro',array_merge(
                $this->datos,["errors"=>$errors->firstOfAll(),"paises"=>$paises])
            );

        } else {
            $datos = $this->datos;
            $datos["contrasena"] = encriptar($this->datos["contrasena"]);
            Usuario::create($datos);
            $this->redireccionar("../autenticacion/formulariologin");
        }

    }

}