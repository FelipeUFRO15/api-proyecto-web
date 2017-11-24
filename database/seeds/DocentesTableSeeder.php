<?php

use Illuminate\Database\Seeder;

class DocentesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('docentes')->insert([
        	'nombre_docente' => 'Docente'.rand(10, 99),
        ]);
    }
}
