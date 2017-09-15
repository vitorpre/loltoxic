<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 18/06/2017
 * Time: 23:39
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{
    protected $table = 'jogador';
    protected $primaryKey = 'idJogador';

    protected $fillable = ['tier', 'division', 'level', 'username'];

    public function denuncias()
    {
        return $this->hasMany('App\Denuncia', 'jogador_id');
    }


}