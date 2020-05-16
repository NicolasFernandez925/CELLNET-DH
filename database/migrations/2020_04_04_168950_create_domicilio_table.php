<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomicilioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('provincia');
            $table->string('localidad');
            $table->integer('codigo_postal');
            $table->string('tipo_dni');
            $table->integer('nro_dni')->unique();
            $table->string('direccion');
            $table->integer('cod_area');
            $table->integer('telefono')->unique();
            $table->integer('nro_calle');
            $table->unsignedBigInteger('user_id'); 
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('domicilio');
    }
}
