<?php
require 'vendor/autoload.php';

require 'Database/Database.php';
$usuarios = \Directorio\Modelos\Usuario::all();
var_dump($usuarios);
