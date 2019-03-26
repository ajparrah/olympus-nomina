<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datos_hijo;

class Datos_hijoController extends Controller
{
    //
        public function index()
    {
       $datos_hijos = Datos_hijo::with('docentes')->orderby('cedula', 'ASC')->paginate(10);
        return view('datos_hijo.index', compact('datos_hijos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docentes = \App\Docente::all(); //Variable que relaciona con el modelo, trae todo por el ::All

        return view('datos_hijo.create', compact('docentes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\Datos_hijo::create([
        'cedula' => $request['cedula'],
        'nombres' => $request['nombres'],
        'apellidos' => $request['apellidos'],
        'fecha_nacimiento' =>$request['fecha_nacimiento'],
        ]);
        return redirect('/datos_hijo')->with('confirmacion','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cedula)
    {
        $datos_hijo = \App\Datos_hijo::find($cedula);
        $docentes = \App\Docente::all();

        //return view('sede.edit',compact('sedes'));

        return view('datos_hijo.edit', ['datos_hijo'=> $datos_hijo], compact('docentes'));
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
        $datos_hijo = \App\Datos_hijo::find($cedula);
        $datos_hijo->fill($request->all());
        $datos_hijo->save();
        return redirect('/datos_hijo')->with('confirmacion','cambio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cedula)
    {
        $datos_hijo = \App\Datos_hijo::destroy($cod);

        //$sede->delete();

        return redirect('/datos_hijo')->with('confirmacion','cambio');
    }
}