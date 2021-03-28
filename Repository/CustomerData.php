<?php
namespace Directorio\Repositorio;

use Directorio\Modelos\Usuario;
use GuzzleHttp\Client;
class CustomerData {

    public static function bucar_usuario_por_contrasena_e_email($email,$contrasena){
        $usuario = Usuario::where("email",$email)
            ->where("contrasena",$contrasena)
            ->first();

        return is_null($usuario)?null:$usuario->toArray();
    }

    public static function buscar_por_email_o_nombre($nombre_o_email){
        return \Directorio\Modelos\Usuario::when(!is_null($nombre_o_email),function($query) use ($nombre_o_email){
            return $query->where("email","like","%".$nombre_o_email."%")
                ->orWhere("nombre_completo","like","%".$nombre_o_email."%");
        })->get();
    }

    public static function obtener_paises(){

        $cliente = new Client([
            // Base URI is used with relative requests
            'base_uri' => variables_de_ambiente("URL_COUNTRIES"),
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
        $paises = [];
        try {
            $paises = json_decode($cliente->request("get", "countries?limit=251")->getBody()->getContents(), true)["data"];

        }catch (\Exception $err){
            die("Imposible obtener pasies");
        }
        return $paises;
    }



}
