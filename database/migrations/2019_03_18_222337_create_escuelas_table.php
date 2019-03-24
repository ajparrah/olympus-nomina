<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscuelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuelas', function (Blueprint $table) {
            $table->string('cod',5)->primary();
            $table->string('nombre', 64);
            $table->string('director', 64);
            $table->integer('decanato_cod')->unsigned();
            $table->timestamps();

            //RELACIONES
            $table->foreign('decanato_cod')->references('cod')->on('decanatos')
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
        Schema::dropIfExists('escuelas');
    }
}
