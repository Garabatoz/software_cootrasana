<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('cedula',10);
            $table->string('nombre',15);
            $table->string('apellido',15);
            $table->string('fijo',10);
            $table->string('celular',10);
            $table->string('direccion',50);
            $table->string('municipio',20);
            $table->string('barrio',20);
            $table->date('fechanac');
            $table->string('email',25);
            $table->string('slug',45);
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
        Schema::dropIfExists('personas');
    }
}
