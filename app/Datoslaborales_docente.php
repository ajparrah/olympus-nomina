<?php

namespace App;
use App\docente;
use App\banco;
use Illuminate\Database\Eloquent\Model;

class Datoslaborales_docente extends Model
{
    //    
    protected $table = 'datoslaborales_docente';
    protected $primaryKey = 'ced_docente'; //Codigo de la table Establecer la clave primaria de la base de datos
    //protected $incrementing = 'false'; //Como no auotincrementa la clave primaria, se establece false
    //protected $keyType = 'string'; //Como no es entera autoincremental la clave primaria, se menciona el tipo

    protected $fillable = ['fecha_ingreso', 'nro_cuenta','estatus','grado_instruccion','tipo_cuenta','ced_docente','escalafon','cod_banco'];


    //Relacion con el modelo de Decanato

    public function docente()
    {
    	return $this->belongsTo('App\Docente', 'ced_docente'); 
    }


        public function banco()
    {
        return $this->belongsTo('App\Banco', 'cod_banco'); 
    }



}
