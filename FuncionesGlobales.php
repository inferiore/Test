<?php
function variables_de_ambiente($clave,$valor_por_defecto = null){
    $dotenv = Dotenv\Dotenv::createMutable(__DIR__);
    $env = $dotenv->safeLoad();
    return (isset($env[$clave]))?$env[$clave]:$valor_por_defecto;
}
