<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class BancoController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bancos = \App\Banco::All(); //Variable que relaciona con el modelo, trae todo por el ::All
        return view('banco.index', compact('bancos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banco.create');
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
        'cod' => $request['cod'],
        'nombre' => $request['nombre'],
        'contacto' => $request['contacto'],
        'descripcion' => $request['descripcion'],
        ];

        $validator = Validator::make($datosCampos, 
            [

            'cod' => 'required',
            'nombre' => 'required',
            'contacto' => 'required',
            'descripcion' => 'required'
            ]
        );

        //Acciones si pasa o no la validacion el formulario
        if( $validator->fails() )
        {
            return redirect('/banco/create')->withErrors($validator)->withInput();
        }
        else
        {
            \App\Banco::create($datosCampos);
            return redirect('/banco')->with('confirmacion','cambio');
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

        $banco =  \App\Banco::find($cod);

        return view('banco.show', compact('banco'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cod)
    {
        $banco = \App\Banco::find($cod);


        return view('banco.edit', ['banco'=> $banco]);
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
        $banco = \App\Banco::find($cod);
        $banco->fill($request->all());
        $banco->save();
        return redirect('/banco')->with('confirmacion','cambio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cod)
    {
        $banco = \App\Banco::destroy($cod);


        return redirect('/banco')->with('confirmacion','cambio');
    }
}
