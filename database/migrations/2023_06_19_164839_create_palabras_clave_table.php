<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePalabrasClaveTable extends Migration
{
    public function up()
    {
        Schema::create('palabras_clave', function (Blueprint $table) {
            $table->id();
            $table->string('keyword');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('palabras_clave');
    }
}
