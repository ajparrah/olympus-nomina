<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    //


    protected $table = 'sedes';
    protected $primaryKey = 'cod'; //Codigo de la table Establecer la clave primaria de la base de datos
    //protected $incrementing = 'false'; //Como no auotincrementa la clave primaria, se establece false
    //protected $keyType = 'string'; //Como no es entera autoincremental la clave primaria, se menciona el tipo

    protected $fillable = ['nombre', 'direccion'];


    //Relacion con Decanato

    public function decanatos()
    {
    	return $this->hasMany('App\Decanato');
    }

}
