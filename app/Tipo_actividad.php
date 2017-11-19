<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_actividad extends Model
{
    protected $table = 'tipos_actividades';

    protected $primaryKey = 'id';

    protected $fillable = [
    	'nombre_tipo_actividad',
    ];

    public function actividades() {
    	return $this->hasMany('App\Actividad', 'tipo_actividad_id');
    }

    public $timestamps = false;
}
