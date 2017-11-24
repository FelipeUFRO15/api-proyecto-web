<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
        	'nombre_usuario' => 'Usuario'.rand(10, 99),
        	'email' => 'correo'.rand(10, 99).'@studyMail.com',
        	'password' => bcrypt('1234'),
        	'institucion_id' => 1,
        	'url_foto_usuario' => 'https://images.onlinelabels.com/images/clip-art/acspike/acspike_male_user_icon.png',
        ]);
    }
}
