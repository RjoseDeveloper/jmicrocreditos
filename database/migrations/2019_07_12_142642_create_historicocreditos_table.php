<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricocreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historicocreditos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_credito');
            $table->integer('modopagamento');
            $table->integer('ordem');
            $table->string('valorpago');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historicocreditos');
    }
}
