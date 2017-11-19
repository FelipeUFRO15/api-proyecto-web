<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'actividades';

    protected $primaryKey = 'id';

    protected $fillable = [
    	'nombre_actividad', 'descripcion_actividad', 'fecha_actividad', 'tipo_actividad_id', 'asignatura_id'
    ];

    public function tipo_actividad() {
    	return $this->belongsTo('App\Tipo_actividad', 'tipo_actividad_id');
    }

    public function asignatura() {
    	return $this->belongsTo('App\Asignatura', 'asignatura_id');
    }

    public function nota() {
    	return $this->hasOne('App\Nota', 'actividad_id');
    }

    public $timestamps = false;
}
