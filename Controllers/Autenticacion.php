<?php

namespace Directorio\Controladores;

use Directorio\Modelos\Usuario;

use Directorio\Reposorio\CustomerData;
use Josantonius\Session\Session;
class Autenticacion extends ControladorBase
{
    public function formulariologin(){
        if($this->estaLogeado()){
            $this->redireccionar("../usuarios/listar");
        }
        echo $this->renderizar("login");
    }

    public function login(){

        $user = CustomerData::bucar_usuario_por_contrasena_e_email($this->datos["email"],encriptar($this->datos["contrasena"]));

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