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


#DB_CONNECTION=mysql
#DB_HOST=remotemysql.com
#DB_PORT=3306
#DB_DATABASE=HGNx5G28Sy
#DB_USERNAME=HGNx5G28Sy
#DB_PASSWORD=t3aHzaIwac