<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 18/06/2017
 * Time: 23:39
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $table = 'tipo_usuario';
    protected $primaryKey = 'idTipoUsuario';

    protected $fillable = ['tipo'];



}