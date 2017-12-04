<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ContentModel extends Model
{

    protected $table="content";
    protected $id="id";
    protected $primary="id";
    protected $fillables=['id','contenido','tipo','visible','titulo','descripcionContenido','activo','idUsuario'
	];

	public function userFor()
    {
        return $this->hasOne(User::class, 'id');
    }
}
