<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	//PAGINA PRINCIPAL
    public function principal(){

    	return view('principal');
    }

    //GESTION DE DATOS BASICOS
    public function registro(){
		return view('registro');
	}

    public function hijos(){
		return view('hijos');
	}

    public function hijosdetalles(){
		return view('hijosdetalles');
	}		

	public function registrof2(){
		return view('registrof2');
	}

	public function registrof3(){
		return view('registrof3');
	}


	public function escuelas(){
		return view('escuela');
	}

	public function bancos(){
		return view('banco');
	}

	

	//NOMINA DOCENTES
	public function prenomina(){
		return view('prenomina');
	}

	public function cargaprenomina(){
		return view('cargaprenomina');
	}

	public function modificarpre(){
		return view('modificarpre');
	}

	public function revisiondocentes(){
		return view('revisiondocentes');
	}

	public function cierredocentes(){
		return view('cierredocentes');
	}

	//NOMINA ESPECIAL
	public function prenominaespecial(){
		return view('prenominaespecial');
	}

	public function cargaprenominaespecial(){
		return view('cargaprenominaespecial');
	}

	public function modificarpreespecial(){
		return view('modificarpreespecial');
	}

	public function revisionespecial(){
		return view('revisionespecial');
	}

	public function cierreespecial(){
		return view('cierreespecial');
	}

	//REPORTE DOCENTE
	public function reportedocente(){
		return view('reportedocente');
	}

	//REPORTE ESPECIAL
	public function reporteespecial(){
		return view('reporteespecial');
	}


}
