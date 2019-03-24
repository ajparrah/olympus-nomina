<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocenteModalidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docente_modalidad', function (Blueprint $table) {
            //Foraneas - Puente
            $table->string('ced_docente',25)->nullable(false);            
            $table->integer('cod_modalidad')->unsigned();
            $table->timestamps();

            //Relacion
            $table->foreign('ced_docente')->references('ced_docente')->on('datoslaborales_docente');

            $table->foreign('cod_modalidad')->references('cod')->on('modalidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docente_modalidad');
    }
}
