<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    public static $columns = [

    	'id','nombre','correo','contrasenia','fechaNacimiento',
    	'genero','avatar','portada','tipoUsuario','privado','activo',
    	'bloqueado','idCiudad'
    ];
}
