<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class SedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sedes = \App\Sede::All(); //Variable que relaciona con el modelo, trae todo por el ::All
        return view('sede.index', compact('sedes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sede.create');
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
        'nombre' => $request['nombre'],
        'direccion' => $request['direccion'],
        ];

        $validator = Validator::make($datosCampos, 
            [
            //'Nombre del campo'=> 'Validacion',
            //Ejemplo
            'nombre' => 'required',
            'direccion' => 'required'
            ]
        );

        //Acciones si pasa o no la validacion el formulario
        if( $validator->fails() )
        {
        //return redirect('Url');
            //EJEMPLO
            return redirect('/sede/create')->withErrors($validator)->withInput();
        }
        else
        {
            \App\Sede::create($datosCampos);
            return redirect('/sede')->with('confirmacion','cambio');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cod)
    {
        //return view('sede.show', compact('sedes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cod)
    {
        $sede = \App\Sede::find($cod);

        //return view('sede.edit',compact('sedes'));

        return view('sede.edit', ['sede'=> $sede]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cod)
    {
        $sede = \App\Sede::find($cod);
        $sede->fill($request->all());
        $sede->save();
        return redirect('/sede')->with('confirmacion','cambio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cod)
    {
        $sede = \App\Sede::destroy($cod);

        //$sede->delete();

        return redirect('/sede')->with('confirmacion','cambio');
    }
}
