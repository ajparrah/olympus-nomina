<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datoslaborales_docente;

class Datoslaborales_docenteController extends Controller
{


	  public function index()
    {
        
        $datoslaborales_docentes = Datoslaborales_docente::with('docente')->orderby('ced_docente', 'ASC')->paginate(10);
         return view('datoslaborales_docente.index', compact('datoslaborales_docentes'));
      }
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
        return redirect('/datoslaborales_docente')->with('confirmacion','store');
    }

        public function edit($ced_docente)
    {
        $datoslaborales_docente = \App\Datoslaborales_docente::find($ced_docente);
        $docentes = \App\Docente::all();
        $escalafons = \App\Escalafon::all();
        $bancos = \App\Banco::all();
        //return view('sede.edit',compact('sedes'));

        return view('datoslaborales_docente.edit', compact('datoslaborales_docente','docentes','escalafons','bancos'));
    }

    public function update(Request $request, $ced_docente)
    {
        $datoslaborales_docente = \App\Datoslaborales_docente::find($ced_docente);
        $datoslaborales_docente->fill($request->all());
        $datoslaborales_docente->save();
        return redirect('/datoslaborales_docente')->with('confirmacion','cambio');
    }

    public function show($ced_docente)
    {
        //
         $datoslaborales_docente = \App\Datoslaborales_docente::find($ced_docente);
          return view('datoslaborales_docente.show', compact('datoslaborales_docente'));
    }

    public function destroy($ced_docente)
    {
       $datoslaborales_docente = \App\Datoslaborales_docente::destroy($ced_docente);

        //$sede->delete();

        return redirect('/datoslaborales_docente')->with('confirmacion','cambio');
    }


















    //
}
