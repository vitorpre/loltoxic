<?php

namespace App\Http\Controllers;

use App\Jogador;
use Illuminate\Http\Request;

class JogadorController extends Controller
{
    public function getJogador(Request $request)
    {
        $this->validate($request, [
            'username' => 'required'
        ]);

        $jogador = Jogador::where("username", $request->input('username'))->first();


        return view('publico.jogador', ['jogador' => $jogador]);
    }
}
