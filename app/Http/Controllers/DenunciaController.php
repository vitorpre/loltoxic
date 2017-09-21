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
            'dataOcorrido' => 'required',
//	    'g-recaptcha-response' => 'required|captcha' necessita ssl
        ]);

        $jogador = Jogador::where("username", $request->input('jogador'))->first();

        $denuncia = new Denuncia();
        $denuncia->comentario = $request->input('comentario');
        $denuncia->dataOcorrido = $request->input('dataOcorrido');
        $denuncia->status = 1;

        $jogador->denuncias()->save($denuncia);

        return view('welcome', [])->with('success', "Denuncia Feita!");
    }
    
    public function listagemUltimasDenuncias()
    {
	$denuncias = Denuncia::where("status", 1)->orderBy("created_at")->get();
	
	return view('publico.aprovacao.denuncia', ['denuncias' => $denuncias]);
    }
    
    public function aprovarDenuncia(Request $request,$denuncia_id)
    {
	$denuncia = Denuncia::find($denuncia_id);

	$denuncia->status = $request->ehAprovar;

	$denuncia->save();

	return $denuncia;
    }
}
