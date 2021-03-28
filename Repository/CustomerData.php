<?php
namespace Directorio\Reposorio;

use Directorio\Modelos\Usuario;

class CustomerData {

    public static function bucar_usuario_por_contrasena_e_email($email,$contrasena){
        return Usuario::where("email",$email)
            ->where("contrasena",$contrasena)
            ->first()->toArray();
    }

    public static function buscar_por_email_o_nombre($nombre_o_email){
        return \Directorio\Modelos\Usuario::when(!is_null($nombre_o_email),function($query) use ($nombre_o_email){
            return $query->where("email","like","%".$nombre_o_email."%")
                ->orWhere("nombre_completo","like","%".$nombre_o_email."%");
        })->get();
    }

    public static function obtener_paises(){
        encriptar($this->datos["contrasena"])
    }



}
