<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    protected $primaryKey = 'id';

    protected $fillable = [
    	'nombre_usuario', 'email', 'password', 'institucion_id', 'url_foto_usuario',
    ];

    protected $hidden = [
    	'password',
    ];

    public function institucion() {
    	return $this->belongsTo('App\Institucion', 'institucion_id');
    }

    public function asignatura() {
        return $this->hasMany('App\Asignatura', 'usuario_id');
    }

    public $timestamps = false;
}
