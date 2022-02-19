<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('numinterno',4);
            $table->string('placa',6);
            $table->string('modelo',4);
            $table->string('marca',20);
            $table->string('clase',20);
            $table->string('tarjetaop',20);
            $table->date('vencrtm');
            $table->date('vencsoat');
            $table->date('vencpreopera');
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
        Schema::dropIfExists('vehiculos');
    }
}
