<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'docentes';

    protected $primaryKey = 'id';

    protected $fillable = [
    	'nombre_docente',
    ];

    public function asignaturas() {
    	return $this->hasMany('App\Asignatura', 'asignatura_id');
    }

    public $timestamps = false;
}
