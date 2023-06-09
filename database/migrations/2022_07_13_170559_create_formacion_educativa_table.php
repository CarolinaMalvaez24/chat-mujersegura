<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormacionEducativaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formacion_educativa', function (Blueprint $table) {
            $table->id('id_formacion_educativa');
            $table->string('sabe_leer', 10);
            $table->string('sabe_escribir', 10);
            $table->unsignedBigInteger('id_escolaridad');
            $table->foreign('id_escolaridad')->references('id_escolaridad')->on('escolaridad');
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
        Schema::dropIfExists('formacion_educativa');
    }
}
