<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('modelo'); 
            $table->integer('precio')->unsigned(); 
            $table->integer('oferta')->unsigned()->nullable(); 
            $table->string('imagen')->nullable(); 
            $table->text('imagenes')->nullable();
            $table->text('descripcion')->nullable();
            $table->integer('cantidad')->unsigned();
            $table->unsignedBigInteger('marca_id')->nullable();
            $table->unsignedBigInteger('categoria_id')->nullable();           
            $table->timestamps();
            $table->softDeletes(); //Columna para soft delete
        
            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
