<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userCommentsContent extends Model
{
    protected $table="userCommentsContent";
    protected $id="id";
    protected $primary="id";
    protected $fillable=['id','idUsuario','idContenido','comentario'];


public function user()
    {
        return $this->belongsTo(User::class, 'idUsuario');
    }

}
