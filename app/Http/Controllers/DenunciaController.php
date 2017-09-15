<?php

namespace App\Http\Controllers;

use App\Denuncia;
use App\Jogador;
use Illuminate\Http\Request;

class DenunciaController extends Controller
{



    public function getDenunciarJogador(Request $request)
    {
        /*
        $this->validate($request, [
            'username' => 'required'
        ]);

        $jogador = Jogador::where("username", $request->input('username'))->first();
        */



        return view('publico.cadastro.denuncia', []);
    }

    public function executarDenunciaJogador(Request $request)
    {

        $this->validate($request, [
            'jogador' => 'required',
            'dataOcorrido' => 'required'
        ]);

        $jogador = Jogador::where("username", $request->input('jogador'))->first();

        $denuncia = new Denuncia();
        $denuncia->comentario = $request->input('comentario');
        $denuncia->dataOcorrido = $request->input('dataOcorrido');
        $denuncia->status = 1;

        $jogador->denuncias()->save($denuncia);

        return view('welcome', [])->with('success', "Denuncia Feita!");
    }
}
