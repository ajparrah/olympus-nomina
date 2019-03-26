<?php

namespace App\Http\Controllers;

use App\Concepto;
use Illuminate\Http\Request;
use Validator;

class ConceptoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conceptos = \App\Concepto::All(); //Variable que relaciona con el modelo, trae todo por el ::All
        return view('conceptos.index', compact('conceptos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conceptos.create');
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
        'descripcion' => $request['descripcion'],
        'tipo_concepto' => $request['tipo_concepto'],
        'unidad' => $request['unidad'],
        'costo' => $request['costo'],
        'porc_cant' => $request['porc_cant'],
        ];

        $validator = Validator::make($datosCampos, 
            [

            'nombre' => 'required',
            'descripcion' => 'required',
            'tipo_concepto' => 'required',
            'unidad' => 'required',
            'costo' => 'required',
            ]
        );

        //Acciones si pasa o no la validacion el formulario
        if( $validator->fails() )
        {
            return redirect('/conceptos/create')->withErrors($validator)->withInput();
        }
        else
        {
            \App\Concepto::create($datosCampos);
            return redirect('/conceptos')->with('confirmacion','cambio');
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
        $concepto = \App\Concepto::find($cod);

        //return view('sede.edit',compact('sedes'));

        return view('conceptos.edit', ['concepto'=> $concepto]);
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
        $concepto = \App\Concepto::find($cod);
        $concepto->fill($request->all());
        $concepto->save();
        return redirect('/conceptos')->with('confirmacion','cambio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cod)
    {
        $concepto = \App\Concepto::destroy($cod);

        //$sede->delete();

        return redirect('/conceptos')->with('confirmacion','cambio');
    }
}
