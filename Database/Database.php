<?php
use Illuminate\Database\Capsule\Manager as Db;

$database = new Db();

$database->addConnection([
    "driver"=>variables_de_ambiente("DB_CONNECTION"),
    "host"=>variables_de_ambiente("DB_HOST"),
    "database"=>variables_de_ambiente("DB_DATABASE"),
    "username"=>variables_de_ambiente("DB_USERNAME"),
    "password"=>variables_de_ambiente("DB_PASSWORD"),
]);


$database->setAsGlobal();
$database->bootEloquent();
$pdo = $database->getConnection()->getPdo();

