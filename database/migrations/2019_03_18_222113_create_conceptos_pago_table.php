<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConceptosPagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conceptos_pago', function (Blueprint $table) {
            $table->increments('cod');
            $table->string('nombre', 64);          
            $table->string('descripcion', 256);
            $table->string('tipo_concepto');
            $table->string('unidad',64);
            $table->float('costo',8,2);
            $table->integer('porc_cant')->nullable();

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
        Schema::dropIfExists('conceptos_pago');
    }
}
