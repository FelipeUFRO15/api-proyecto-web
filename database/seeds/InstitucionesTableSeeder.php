<?php

use Illuminate\Database\Seeder;

class InstitucionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instituciones')->insert([
            'nombre_institucion' => 'Institución'.rand(10, 99),
        ]);
    }
}
