<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class request extends Model
{
    protected $table="request";
    protected $id="id";
    protected $primary="id";
    protected $fillables=['id','estado','idUsuarioSolicitante','idUsuarioResponde'];
}
