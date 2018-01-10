<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class request extends Model
{
    protected $table="request";
    protected $id="id";
    protected $primary="id";
    protected $fillable=['id','estado','idUsuarioSolicitante','idUsuarioResponde'];
}
