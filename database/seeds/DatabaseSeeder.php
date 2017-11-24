<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(InstitucionesTableSeeder::class);
        $this->call(UsuariosTableSeeder::class);
        $this->call(DocentesTableSeeder::class);
        $this->call(AsignaturasTableSeeder::class);
        $this->call(Tipos_actividadesTableSeeder::class);
        $this->call(ActividadesTableSeeder::class);
        $this->call(NotasTableSeeder::class);
        $this->call(ApuntesTableSeeder::class);
    }
}
