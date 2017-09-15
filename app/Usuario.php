<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 18/06/2017
 * Time: 23:39
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'idUsuario';

    protected $fillable = ['login', 'senha', 'tipo_usuario_id'];



}