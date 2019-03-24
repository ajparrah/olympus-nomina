<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escalafon extends Model
{
    //   
       	 public function datoslaborales_docente()
    {
        return $this->hasOne('App\Datoslaborales_docente');
    }
     
    //Re
}
