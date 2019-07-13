<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditoconsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditoconsumos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('idcredito');
            $table->integer('idinstituicao');
            $table->string('funcao');
            $table->string('contactogestor');
            $table->string('titularconta');
            $table->string('nrconta');
            $table->string('nomebanco');
            $table->string('urldeclaracaoservico');
            $table->string('urlbi');
            $table->string('urlextratobancario');
            $table->string('urloutro');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('creditoconsumos');
    }
}
