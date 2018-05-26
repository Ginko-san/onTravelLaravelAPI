<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaseosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paseos', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name', 100);
            $table->date('fecha');
            $table->string('localizacion', 50);
            $table->float('latitud', 17, 14);
            $table->float('longitud', 17, 14);
            $table->string('telefono', 9);
            $table->string('website', 50)->nullable();
            $table->text('descripcion')->nullable();
            $table->text('imagen')->nullable(); // Imagen en base64
            $table->float('costo', 11, 2);
            $table->unsignedInteger('categoria_id');
            $table->foreign('categoria_id')
                  ->references('id')->on('categorias')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('paseos');
    }
}
