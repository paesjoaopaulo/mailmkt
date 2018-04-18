<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailParaListasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_para_listas', function (Blueprint $table) {
            $table->integer('email_id')->unsigned();
            $table->integer('cliente_id')->unsigned();
            $table->timestamps();
            $table->foreign('email_id')->references('id')->on('emails');
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
        Schema::dropIfExists('email_para_listas');
    }
}
