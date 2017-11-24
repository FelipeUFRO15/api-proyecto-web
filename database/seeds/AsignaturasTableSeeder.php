<?php

use Illuminate\Database\Seeder;

class AsignaturasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asignaturas')->insert([
        	'nombre_asignatura' => 'Asignatura'.rand(10, 99),
        	'usuario_id' => 1,
        	'docente_id' => 1,
        ]);
    }
}
