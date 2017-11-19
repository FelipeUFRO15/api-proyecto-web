<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $table = 'instituciones';

    protected $primaryKey = 'id';

    protected $fillable = [
    	'nombre_institucion',
    ];

    public function usuarios() {
    	return $this->hasMany('App\Usuario', 'institucion_id');
    }

    public $timestamps = false;
}
