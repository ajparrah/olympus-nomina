<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatoshijoDocenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datoshijo_docente', function (Blueprint $table) {
            //Foraneas
            $table->string('ced_docente',25)->nullable(false);            
            $table->string('ced_hijo',25)->nullable(false);

            //Relacion
            $table->foreign('ced_docente')->references('cedula')->on('docentes');


            $table->foreign('ced_hijo')->references('cedula')->on('datos_hijo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datoshijo_docente');
    }
}
