<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datoslaborales_docente;

class Datoslaborales_docenteController extends Controller
{


	 //   public function index()
    //{
        
//    $escuelas = Escuela::with('decanato')->orderby('cod', 'ASC')->paginate(10);
    //     return view('escuela.index', compact('escuelas'));
    //  }
    //Variable que relaciona con el modelo, trae todo por el ::All
        


    public function create()
    {
        $docentes = \App\Docente::all(); //Variable que relaciona con el modelo, trae todo por el ::All
        $escalafones = \App\Escalafon::all(); 
        $bancos = \App\Banco::all();
        return view('datoslaborales_docente.create', compact('docentes','escalafones','bancos'));
    }


        public function store(Request $request)
    {
        \App\Datoslaborales_docente::create([
        'fecha_ingreso' => $request['fecha_ingreso'],
        'nro_cuenta' => $request['nro_cuenta'],
        'estatus' =>$request['estatus'],
        'grado_instruccion' => $request['grado_instruccion'],
        'tipo_cuenta' => $request['tipo_cuenta'],
        'ced_docente' =>$request['ced_docente'],        
        'cod_escalafon' => $request['cod_escalafon'],
        'cod_banco' =>$request['cod_banco'],   
        ]);
        return redirect('/docente')->with('confirmacion','store');
    }

        public function edit($ced_docente)
    {
        $datoslaborales_docente = \App\Datoslaborales_docente::find($ced_docente);
        $docentes = \App\Docente::all();
        //return view('sede.edit',compact('sedes'));

        return view('datoslaborales_docente.edit', compact('datoslaborales_docente','docentes'));
    }

    public function update(Request $request, $ced_docente)
    {
        $datoslaborales_docente = \App\Datoslaborales_docente::find($ced_docente);
        $datoslaborales_docente->fill($request->all());
        $datoslaborales_docente->save();
        return redirect('/docente')->with('confirmacion','cambio');
    }

    public function show($id)
    {
        //
    }

    public function destroy($cod)
    {
        $escuela = \App\Escuela::destroy($cod);

        //$sede->delete();

        return redirect('/escuela')->with('confirmacion','cambio');
    }


















    //
}
