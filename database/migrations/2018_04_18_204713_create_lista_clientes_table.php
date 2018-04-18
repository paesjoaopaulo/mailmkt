<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_clientes', function (Blueprint $table) {
            $table->integer('lista_id')->unsigned();
            $table->integer('cliente_id')->unsigned();
            $table->timestamps();
            $table->foreign('lista_id')->references('id')->on('listas');
            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lista_clientes');
    }
}
