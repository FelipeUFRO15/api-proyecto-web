<?php

use Illuminate\Database\Seeder;

class NotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas')->insert([
        	'nota' => rand(0, 7),
        	'ponderacion' => rand(5, 100),
        	'actividad_id' => 1,
        ]);
    }
}
