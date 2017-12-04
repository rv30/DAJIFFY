<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="user";
    protected $fillable = ['nombre', 'userName', 'email', 'fechaNacimiento', 'genero', 'avatar', 'tipoUsuario', 'privado', 'activo', 'bloqueado'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function notification()
    {
        return $this->hasMany(NotificationModel::class, 'id');
    }
}
