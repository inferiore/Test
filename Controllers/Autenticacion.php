<?php

namespace Directorio\Controladores;

use Directorio\Modelos\Usuario;

use Josantonius\Session\Session;
class Autenticacion extends ControladorBase
{
    public function formulariologin(){
        if($this->estaLogeado()){
            $this->redireccionar("../usuarios/listar");
        }
        echo $this->blade->make("login")->render();
    }

    public function login(){

        $user = Usuario::where("email",$this->datos["email"])
            ->where("contrasena",hash("md5",$this->datos["contrasena"]))
        ->first()->toArray();

        if(!is_null($user)){
            Session::set("user",$user);
            $this->redireccionar("../usuarios/listar");

        }else{
            $this->redireccionar("../autenticacion/formulariologin");
        }
    }

    public function logout(){
        Session::destroy();
        $this->redireccionar("../autenticacion/formulariologin");

    }



}