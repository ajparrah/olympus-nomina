<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosHijoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_hijos', function (Blueprint $table) {
            $table->string('cedula', 25)->primary();
            $table->string('nombres', 64);          
            $table->string('apellidos', 64);          
            $table->date('fecha_nacimiento');  
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
        Schema::dropIfExists('datos_hijos');
    }
}
