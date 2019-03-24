<?php

namespace App;

use App\decanato;
use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    //
    protected $table = 'escuelas';
    protected $primaryKey = 'cod'; //Codigo de la table Establecer la clave primaria de la base de datos
    //protected $incrementing = 'false'; //Como no auotincrementa la clave primaria, se establece false
    //protected $keyType = 'string'; //Como no es entera autoincremental la clave primaria, se menciona el tipo

    protected $fillable = ['nombre', 'director','decanato_cod'];


    //Relacion con el modelo de Decanato

    public function decanato()
    {
    	return $this->belongsTo('App\Decanato', 'decanato_cod'); 
    }



}
