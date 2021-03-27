<?php
namespace Directorio\Modelos;
use Illuminate\Database\Eloquent\Model;
class Usuario extends Model
{
    protected  $table = "users";
    protected $fillable = ["nombre_completo","identificacion","email","contraseña","contraseña"];
}