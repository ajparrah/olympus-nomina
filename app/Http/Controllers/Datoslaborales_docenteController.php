<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datoslaborales_docente;
use Validator;

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
         
        $bancos = \App\Banco::all();
        return view('datoslaborales_docente.create', compact('docentes','bancos'));
        
    }


        public function store(Request $request)
    {

        $datosCampos = [
        'fecha_ingreso' => $request['fecha_ingreso'],
        'nro_cuenta' => $request['nro_cuenta'],
        'estatus' =>$request['estatus'],
        'escalafon' =>$request['escalafon'],
        'grado_instruccion' => $request['grado_instruccion'],
        'tipo_cuenta' => $request['tipo_cuenta'],
        'ced_docente' =>$request['ced_docente'],
        'cod_banco' =>$request['cod_banco'],   
        ];

        $validator = Validator::make($datosCampos, 
            [

            'fecha_ingreso' => 'required',
            'nro_cuenta' => 'required',
            'estatus' => 'required',
            'grado_instruccion' => 'required',
            'tipo_cuenta' => 'required',
            'ced_docente' => 'required',
            'escalafon' => 'required',
            'cod_banco' => 'required',
            ]
        );

        //Acciones si pasa o no la validacion el formulario
        if( $validator->fails() )
        {
            return redirect('/datoslaborales_docente/create')->withErrors($validator)->withInput();
        }
        else
        {
            \App\Datoslaborales_docente::create($datosCampos);
            return redirect('/datoslaborales_docente')->with('confirmacion','cambio');
        }

    }

        public function edit($ced_docente)
    {
        $datoslaborales_docente = \App\Datoslaborales_docente::find($ced_docente);
        $docentes = \App\Docente::all();
        
        $bancos = \App\Banco::all();
        //return view('sede.edit',compact('sedes'));
        return view('datoslaborales_docente.edit', compact('datoslaborales_docente','docentes','bancos'));
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
