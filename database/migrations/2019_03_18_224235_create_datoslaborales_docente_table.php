<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatoslaboralesDocenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datoslaborales_docente', function (Blueprint $table) {
            //Nativas
            $table->date('fecha_ingreso');
            $table->string('nro_cuenta',25);
            $table->string('estatus',16);
            $table->string('grado_instruccion',25);
            $table->string('tipo_cuenta',16);
            $table->string('escalafon',16);

            $table->timestamps();

            //Foraneas
            $table->string('ced_docente',25)->nullable(false);            
            
            $table->string('cod_banco',25)->nullable(false);

            //Relacion
            $table->foreign('ced_docente')->references('cedula')->on('docentes')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('cod_banco')->references('cod')->on('bancos')
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
        Schema::dropIfExists('datoslaborales_docente');
    }
}
