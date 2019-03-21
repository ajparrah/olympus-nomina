<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Decanato extends Model
{
    
    protected $table = 'decanatos';
    protected $primaryKey = 'cod'; //Codigo de la table Establecer la clave primaria de la base de datos
    //protected $incrementing = 'false'; //Como no auotincrementa la clave primaria, se establece false
    //protected $keyType = 'string'; //Como no es entera autoincremental la clave primaria, se menciona el tipo

    protected $fillable = ['nombre', 'nombre_decano','cod_sede'];


    //Relacion con el modelo de Sede

    public function sede()
    {
    	return $this->belongsTo('App\Sede');
    }
}
