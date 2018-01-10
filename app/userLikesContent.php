<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userLikesContent extends Model
{
  
    protected $table="userLikesContent";
    protected $id="id";
    protected $primary="id";
    protected $fillable=['id','idUsuario','idContenido'];
}
