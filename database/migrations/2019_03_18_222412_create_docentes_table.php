<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->string('cedula', 25)->primary();
            $table->string('nombres', 64);          
            $table->string('apellidos', 64);
            $table->string('tlf_local', 64);
            $table->string('tlf_movil', 64);          
            $table->string('direccion', 264);
            $table->string('email',64);
            $table->string('sexo', 64);          
            $table->date('fecha_nacimiento');
            $table->string('edo_civil', 64);          
            $table->integer('carga_familiar');
            $table->integer('cantidad_hijos'); 
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docentes');
    }
}
