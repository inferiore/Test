<?php
namespace Directorio\Librerias;
use Rakit\Validation\Validator;
use Directorio\Reglas\UniqueRule;


class Validador
{
    private static $traducciones = [
            'required' => ':attribute no debe ser nulo',
            'email' => 'El :attribute debe ser valido',
            'regex' => ':attribute debe tener al menos un numero',
            'min' => ':attribute debe tener minimo :min caracteres',
            'unique' => ':attribute ya fue seleccionado'

        ];
    private $validador;
    private $validacion;

    function __construct($pdo)
    {
        $validador = new Validator();
        $validador->addValidator('unique', new UniqueRule($pdo));
        $this->validador = $validador;

    }

    public function validar($data,$reglas){
        $this->validacion = $this->validador->validate($data,$reglas,self::$traducciones);
        return $this->validacion->fails();
    }

    public function errors(){

        return $this->validacion->errors();
    }



}