<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocenteEscuelaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docente_escuela', function (Blueprint $table) {
            //Foraneas - Puente
            $table->string('ced_docente',25)->nullable(false);            
            $table->integer('cod_escuela')->unsigned();
            $table->timestamps();

            //Relacion
            $table->foreign('ced_docente')->references('ced_docente')->on('datoslaborales_docente');

            $table->foreign('cod_escuela')->references('cod')->on('escuelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docente_escuela');
    }
}
