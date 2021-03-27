<?php
namespace Directorio\Controladores;

use Directorio\Modelos\Usuario;

class Usuarios extends ControladorBase {


    function listar(){

        $nombre_o_email = (isset($this->datos["nombre_o_email"])) ? $this->datos["nombre_o_email"] : null;

        $usuarios = \Directorio\Modelos\Usuario::when(!is_null($nombre_o_email),function($query) use ($nombre_o_email){
            return $query->where("email","like","%".$nombre_o_email."%")
                ->orWhere("nombre_completo","like","%".$nombre_o_email."%");
        })->get();
        echo $this->blade->make('listado',
            [
                'usuarios' => $usuarios,
                'nombre_o_email'=>$nombre_o_email
            ])
            ->render();
    }
    function registrar(){
        echo $this->blade->make('registro',[])
            ->render();
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
            echo $this->blade->make('registro',array_merge($this->datos,["errors"=>$errors->firstOfAll()]))
                ->render();

        } else {
            $datos = $this->datos;
            $datos["contrasena"] = hash("md5",$this->datos["contrasena"]);
            Usuario::create($datos);

            $this->redirecto("../autenticacion/formulariologin");
        }

    }





}