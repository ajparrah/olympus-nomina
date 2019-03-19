<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDecanatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decanatos', function (Blueprint $table) {
            $table->increments('cod');
            $table->string('nombre', 64);
            $table->string('nombre_decano', 64);

                        
            $table->integer('cod_sede')->unsigned();  

              
            //RELACIONES
            $table->foreign('cod_sede')->references('cod')->on('sedes')
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
        Schema::dropIfExists('decanatos');
    }
}
