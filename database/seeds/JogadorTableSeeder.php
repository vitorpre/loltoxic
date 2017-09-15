<?php

use Illuminate\Database\Seeder;

class JogadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jogador = new \App\Jogador();
        $jogador->username = "presutti";
        $jogador->tier = "PLATINUM";
        $jogador->division = "V";
        $jogador->level = 30;
        $jogador->save();

    }
}
