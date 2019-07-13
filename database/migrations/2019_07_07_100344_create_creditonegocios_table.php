<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditonegociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditonegocios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('testemunha1');
            $table->integer('id_credito');
            $table->string('testemunha2');
            $table->text('bem');
            $table->string('urldeclaracao');
            $table->timestamps();
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
        Schema::dropIfExists('creditonegocios');
    }
}
