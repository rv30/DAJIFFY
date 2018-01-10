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

	public function user()
    {
        return $this->belongsTo(User::class, 'idUsuario');
    }

    public function likes()
    {
    	return $this->hasMany(userLikesContent::class,'idContenido');
    }
    public function comments()
    {
        return $this->hasMany(userCommentsContent::class,'idContenido');
    }
}
