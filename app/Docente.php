<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Datos_hijo;
class Docente extends Model
{
    protected $table = 'docentes';
    protected $primaryKey = 'cedula'; //Codigo de la table Establecer la clave primaria de la base de datos
    public $incrementing = 'false'; //Como no auotincrementa la clave primaria, se establece false
    protected $keyType = 'string'; //Como no es entera autoincremental la clave primaria, se menciona el tipo

    protected $fillable = ['cedula','nombres', 'apellidos','tlf_local','tlf_movil','direccion','email','sexo','fecha_nacimiento','edo_civil','carga_familiar','cantidad_hijos'];

//Relacion con Datos laborales

        public function datoslaborales_docente()
    {
        return $this->hasOne('App\Datoslaborales_docente');
    }
     
//Relacion con Hijos

        public function datos_hijos()
    {
        return $this->BelongsToMany('App\Datos_hijo','datos_hijo_docentes','ced_docente','ced_hijo'); 
    }
}
