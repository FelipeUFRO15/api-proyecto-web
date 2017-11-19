<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table = 'asignaturas';

    protected $primaryKey = 'id';

    protected $fillable = [
    	'nombre_asignatura', 'usuario_id', 'docente_id',
    ];

    public function usuario() {
    	return $this->belongsTo('App\Usuario', 'usuario_id');
    }

    public function docente() {
    	return $this->belongsTo('App\Docente', 'docente_id');
    }

    public $timestamps = false;
}
