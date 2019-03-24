<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    protected $table = 'bancos';
    protected $primaryKey = 'cod'; //Codigo de la table Establecer la clave primaria de la base de datos
    public $incrementing = 'false'; //Como no auotincrementa la clave primaria, se establece false
    protected $keyType = 'string'; //Como no es entera autoincremental la clave primaria, se menciona el tipo

    protected $fillable = ['cod','nombre','contacto', 'descripcion']; 


        public function datoslaborales_docente()
    {
        return $this->hasOne('App\Datoslaborales_docente');
    }
    
}
