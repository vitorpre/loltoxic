<?php

use Illuminate\Database\Seeder;

class DenunciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $denuncia = new \App\Denuncia();
        $denuncia->comentario = "Tóxico, infantil, noob!";
        $denuncia->dataOcorrido = '2017-07-04';
        $denuncia->jogador_id = 2;
        $denuncia->usuario_aprovador_id = 2;
        $denuncia->status = 1;
        $denuncia->save();
    }
}
