<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConceptoPagoDocenteNominaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concepto_pago_docente_nomina', function (Blueprint $table) {
            //Nativas
            $table->float('cant_pago',3,2);

            //Foraneas
            $table->string('ced_docente',25)->nullable(false);            
            $table->integer('cod_concepto_pago')->unsigned();
            $table->integer('cod_nomina')->unsigned();

            //Relacion
            $table->foreign('ced_docente')->references('ced_docente')->on('datoslaborales_docente');

            $table->foreign('cod_concepto_pago')->references('cod')->on('conceptos_pago');

            $table->foreign('cod_nomina')->references('cod')->on('nominas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concepto_pago_docente_nomina');
    }
}
