<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;


class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = \App\Docente::All(); //Variable que relaciona con el modelo, trae todo por el ::All
        return view('docente.index', compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $datosCampos = [
        'cedula' => $request['cedula'],
        'nombres' => $request['nombres'],
        'apellidos' => $request['apellidos'],
        'tlf_local' => $request['tlf_local'],
        'tlf_movil' => $request['tlf_movil'],
        'direccion' => $request['direccion'],
        'email' => $request['email'],
        'sexo' => $request['sexo'],
        'fecha_nacimiento' => $request['fecha_nacimiento'],
        'edo_civil' => $request['edo_civil'],
        'carga_familiar' => $request['carga_familiar'],
        'cantidad_hijos' => $request['cantidad_hijos'],
        ];

        $validator = Validator::make($datosCampos, 
            [

            'cedula' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'tlf_local' => 'required',
            'tlf_movil' => 'required',
            'direccion' => 'required',
            'email' => 'required|email',
            'sexo' => 'required',
            'fecha_nacimiento' => 'required',
            'edo_civil' => 'required',
            'carga_familiar' => 'required',
            'cantidad_hijos' => 'required',
            ]
        );

        //Acciones si pasa o no la validacion el formulario
        if( $validator->fails() )
        {
            return redirect('/docente/create')->withErrors($validator)->withInput();
        }
        else
        {
            \App\Docente::create($datosCampos);
            return redirect('/datoslaborales_docente/create')->with('confirmacion','cambio');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cedula)
    {

        $docente =  \App\Docente::find($cedula);

        return view('docente.show', compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cedula)
    {
        $docente = \App\Docente::find($cedula);


        return view('docente.edit', ['docente'=> $docente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cedula)
    {
        $docente = \App\Docente::find($cedula);
        $docente->fill($request->all());
        $docente->save();
        return redirect('/datoslaborales_docente')->with('confirmacion','cambio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cedula)
    {
        $docente = \App\Docente::destroy($cedula);


        return redirect('/docente')->with('confirmacion','cambio');
    }
}
