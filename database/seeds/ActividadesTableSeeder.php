<?php

use Illuminate\Database\Seeder;

class ActividadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actividades')->insert([
        	'nombre_actividad' => 'Actividad'.rand(10, 99),
        	'descripcion_actividad' => 'Esta actividad se realizará algún día',
        	'fecha_actividad' => date('Y-m-d'),
        	'tipo_actividad_id' => 1,
        	'asignatura_id' => 1,
        ]);
    }
}
