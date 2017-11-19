<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apunte extends Model
{
    protected $table = 'apuntes';

    protected $primaryKey = 'id';

    protected $fillable = [
    	'titulo_apunte', 'contenido_apunte', 'fecha_apunte', 'asignatura_id',
    ];

    public function asignatura() {
    	return $this->belongsTo('App\Asignatura', 'asignatura_id');
    }

    public $timestamps = false;
}
