<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocenteTurnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docente_turno', function (Blueprint $table) {
            //Foraneas - Puente
            $table->string('ced_docente',25)->nullable(false);            
            $table->integer('cod_turno')->unsigned();
            

            //Relacion
            $table->foreign('ced_docente')->references('ced_docente')->on('datoslaborales_docente');

            $table->foreign('cod_turno')->references('cod')->on('turnos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docente_turno');
    }
}
