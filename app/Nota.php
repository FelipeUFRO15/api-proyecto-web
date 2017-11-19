<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = 'notas';

    protected $primaryKey = 'id';

    protected $fillable = [
    	'nota', 'ponderacion', 'actividad_id',
    ];

    public function actividad() {
    	return $this->belongsTo('App\Actividad', 'actividad_id');
    }

    public $timestamps = false;
}
