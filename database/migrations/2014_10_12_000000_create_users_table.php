<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
	    $table->string('login')->unique();
            $table->string('email')->unique();
            $table->string('password');
	    $table->unsignedInteger('tipo_usuario_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
	    
//	    $table->foreign('tipo_usuario_id')->references('idTipoUsuario')->on('tipo_usuario');
        });
	
	Schema::table('users', function($table) {
	    $table->foreign('tipo_usuario_id')->references('idTipoUsuario')->on('tipo_usuario');
	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
