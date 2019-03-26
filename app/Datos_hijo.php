<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Docente;

class Datos_Hijo extends Model
{
    //
    protected $table = 'datos_hijos';
    protected $primaryKey = 'cedula'; //Codigo de la table Establecer la clave primaria de la base de datos
    public $incrementing = 'false'; //Como no auotincrementa la clave primaria, se establece false
    protected $keyType = 'string'; //Como no es entera autoincremental la clave primaria, se menciona el tipo

    protected $fillable = ['cedula','nombres', 'apellidos','fecha_nacimiento'];





    public function docentes()
    {
    	return $this->BelongsToMany('App\Docente');
    }
}