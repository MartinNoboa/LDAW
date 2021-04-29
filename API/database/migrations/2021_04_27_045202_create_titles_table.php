<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('edicion');
            $table->string('version')->nullable();
            $table->boolean('aprobado');
            $table->text('descripcion');
            /* 
            * Path para la imagen 
            * Es nullable porque no se sabe que tan extenso sera el registro de un nuevo titulo (si incluira imagen o no)
            * Habra una "stock" image en caso que sea nulo para que no haya problema al recuperar la informacion de la BD
            */
            $table->text('path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('titles');
    }
}
