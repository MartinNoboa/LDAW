<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            //declaracion de llaves foraneas
            //disponible es el juego por el que se oferta
            
            $table->foreignId('disponible');
            //oferta es el juego que se ofrece
            $table->foreignId('oferta');

            $table->foreign('disponible')->references('id')->on('games')
            ->nullable()
            ->onUpdate('cascade')
            ->onDelete('set null');
            
            $table->foreign('oferta')->references('id')->on('games')
            ->nullable()
            ->onUpdate('cascade')
            ->onDelete('set null');
            

            //llave foranea de la tabla estados
            $table->foreignId('status_id')
                ->nullable()
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('set null');
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
        Schema::dropIfExists('transactions');
    }
}
