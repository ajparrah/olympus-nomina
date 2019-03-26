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
        Schema::create('datoshijos_docentes', function (Blueprint $table) {
            $table->increments('cod');
            //Foraneas
            $table->string('ced_docente',25)->nullable(false);            
            $table->string('ced_hijo',25)->nullable(false);
            $table->timestamps();

            //Relacion
            $table->foreign('ced_docente')->references('cedula')->on('docentes')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('ced_hijo')->references('cedula')->on('datos_hijos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datoshijos_docentes');
    }
}
