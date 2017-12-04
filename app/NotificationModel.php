<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificationModel extends Model
{
    protected $table="notification";
    protected $id="id";
    protected $primary="id";
    protected $fillables=['id','fechaNotificacion','tipo',	'visto','idSolicitud','idContenido',
	'idUsuarioOrigen','idUsuarioDestino'
	];

	


   
}
