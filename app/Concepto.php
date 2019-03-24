<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concepto extends Model
{
    protected $table = 'conceptos_pago';
    protected $primaryKey = 'cod'; //Codigo de la table Establecer la clave primaria de la base de datos
    //protected $incrementing = 'false'; //Como no auotincrementa la clave primaria, se establece false
    //protected $keyType = 'string'; //Como no es entera autoincremental la clave primaria, se menciona el tipo

    protected $fillable = ['nombre', 'descripcion','tipo_concepto', 'unidad','costo','porc_cant'];


    //Relacion con el modelo de Sede

}
