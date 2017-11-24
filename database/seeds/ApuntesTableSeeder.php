<?php

use Illuminate\Database\Seeder;

class ApuntesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apuntes')->insert([
        	'titulo_apunte' => 'Apunte'.rand(10, 99),
        	'contenido_apunte' => 'Este apunte corresponde a una materia',
        	'fecha_apunte' => date('Y-m-d'),
        	'asignatura_id' => 1,
        ]);
    }
}
