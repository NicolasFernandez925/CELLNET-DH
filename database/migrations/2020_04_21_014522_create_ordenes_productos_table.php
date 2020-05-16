<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes_productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('producto_id')->nullable();         
            $table->unsignedBigInteger('orden_id')->nullable();
            $table->timestamps();

            $table->foreign('producto_id')->references('id')
                    ->on('productos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('orden_id')->references('id')->on('ordenes')
                    ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordenes_productos');
    }
}
