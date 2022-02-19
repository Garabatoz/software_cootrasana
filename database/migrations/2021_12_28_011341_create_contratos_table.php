<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->datetime('fexpedicion');
            $table->string('consecutivo',5);
            $table->unsignedBigInteger('servicio_id');
            $table->unsignedBigInteger('cliente_id');
            $table->decimal('tarifa',8,2);
            $table->date('fsalida');
            $table->date('fregreso');
            $table->string('origen',20);
            $table->string('destino',20);
            $table->string('nombreResponsable',40);
            $table->string('cedulaResponsable',10);
            $table->string('contactoResponsable',10);
            $table->longText('observaciones');
            $table->integer('nrobebes');
            $table->integer('nroniños');
            $table->integer('nroadultos');
            $table->integer('nromayores');
            $table->integer('nroincapac');
            $table->integer('totalpasajeros');
            $table->string('listapasajeros')->nullable();
            $table->integer('nrovehiculos');
            $table->string('slug',45)->nullable();
            $table->string('contratofirmado',100)->nullable();
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade');
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
        Schema::dropIfExists('contratos');
    }
}
