<?php
namespace Directorio\Modelos;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Usuario extends Model
{
    protected  $table = "usuarios";
    protected $fillable = ["nombre_completo","identificacion","email","contrasena","pais"];
    public $timestamps = false;


}