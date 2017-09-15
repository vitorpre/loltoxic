<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 18/06/2017
 * Time: 23:39
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    protected $table = 'denuncia';
    protected $primaryKey = 'idDenuncia';

    protected $fillable = ['comentario', 'dataOcorrido', 'jogador_id', 'usuario_aprovador_id', 'status'];

    protected $dates = [
        'created_at',
        'updated_at',
        'dataOcorrido'
    ];

    public function jogador()
    {
        return $this->belongsTo('App\Jogador', 'jogador_id');
    }


}