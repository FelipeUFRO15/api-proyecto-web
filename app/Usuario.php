<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios';

    protected $primaryKey = 'id';

    protected $fillable = [
    	'nombre_usuario', 'email', 'password', 'institucion_id', 'url_foto_usuario',
    ];

    public function institucion() {
    	return $this->belongsTo('App\Institucion', 'institucion_id');
    }

    public function asignatura() {
        return $this->hasMany('App\Asignatura', 'usuario_id');
    }

    protected $hidden = [
        'password', 'remeber_token',
    ];
}
