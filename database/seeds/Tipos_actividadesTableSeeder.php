<?php

use Illuminate\Database\Seeder;

class Tipos_actividadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_actividades')->insert([
        	'nombre_tipo_actividad' => 'Tipo'.rand(10, 99),
        ]);
    }
}
