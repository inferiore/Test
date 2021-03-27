<?php
use Illuminate\Database\Capsule\Manager as Db;

$database = new Db();

$database->addConnection([
    "driver"=>"mysql",
    "host"=>"remotemysql.com",
    "database"=>"HGNx5G28Sy",
    "username"=>"HGNx5G28Sy",
    "password"=>"t3aHzaIwac",
]);


$database->setAsGlobal();
$database->bootEloquent();

//
//DB_CONNECTION=mysql
//DB_HOST=fuengo-app-database-stag.cyvgasspkslu.us-east-1.rds.amazonaws.com
//DB_PORT=3306
//DB_DATABASE=fuengo-app-database-stag
//DB_USERNAME=admin
//DB_PASSWORD=lEdUB7Qr6wpmlg8

#DB_CONNECTION=mysql
#DB_HOST=remotemysql.com
#DB_PORT=3306
#DB_DATABASE=HGNx5G28Sy
#DB_USERNAME=HGNx5G28Sy
#DB_PASSWORD=t3aHzaIwac