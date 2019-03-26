<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Docente;
<<<<<<< HEAD

class Datos_Hijo extends Model
{
    //
    protected $table = 'datos_hijos';
=======
class Datos_Hijo extends Model
{
    //
       protected $table = 'datos_hijos';
>>>>>>> c379e0f7610d73db0e29d6065352b01664d91090
    protected $primaryKey = 'cedula'; //Codigo de la table Establecer la clave primaria de la base de datos
    public $incrementing = 'false'; //Como no auotincrementa la clave primaria, se establece false
    protected $keyType = 'string'; //Como no es entera autoincremental la clave primaria, se menciona el tipo

    protected $fillable = ['cedula','nombres', 'apellidos','fecha_nacimiento'];





    public function docentes()
    {
    	return $this->BelongsToMany('App\Docente');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> c379e0f7610d73db0e29d6065352b01664d91090
