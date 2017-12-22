<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ContentModel extends Model
{

    protected $table="content";
    protected $id="id";
    protected $primary="id";
    protected $fillable=['id','content','tipo','visible','titulo','descripcionContenido','activo','idUsuario'
	];

	public function userFor()
    {
        return $this->hasOne(User::class, 'id');
    }
}
