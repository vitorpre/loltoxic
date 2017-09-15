<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new \App\Usuario();
        $usuario->login = "vitorpre";
        $usuario->senha = "123456";
        $usuario->tipo_usuario_id = "1";
        $usuario->save();
    }
}
