<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        \App\Docente::create([
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
        ]);
        return redirect('/datoslaborales_docente/create')->with('confirmacion','store');
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
        return redirect('/docente')->with('confirmacion','cambio');
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
