<?php

use Illuminate\Database\Seeder;

class TipoUsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoUsuario = new \App\TipoUsuario();
        $tipoUsuario->tipo = "ADMIN";
        $tipoUsuario->save();
    }
}
