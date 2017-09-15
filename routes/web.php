<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('jogador', [
    'uses' => 'JogadorController@getJogador',
    'as' => 'publico.jogador'

]);

Route::get('cadastro/denuncia', [
    'uses' => 'DenunciaController@getDenunciarJogador',
    'as' => 'publico.cadastro.denuncia'

]);

Route::post('cadastro/executa/denuncia', [
    'uses' => 'DenunciaController@executarDenunciaJogador',
    'as' => 'cadastro.executa.denuncia'

]);

