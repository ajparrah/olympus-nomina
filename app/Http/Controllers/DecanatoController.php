<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Decanato;

class DecanatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $decanatos = Decanato::with('sede')->orderby('cod', 'ASC')->paginate(10);
         return view('decanato.index', compact('decanatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sedes = \App\Sede::all(); //Variable que relaciona con el modelo, trae todo por el ::All

        return view('decanato.create', compact('sedes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\Decanato::create([
        'nombre' => $request['nombre'],
        'nombre_decano' => $request['decano'],
        'cod_sede' =>$request['cod_sede'],
        ]);
        return redirect('/decanato')->with('confirmacion','store');
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
    public function edit($cod)
    {
        $decanato = \App\Decanato::find($cod);
        $sedes = \App\Sede::all();

        //return view('sede.edit',compact('sedes'));

        return view('decanato.edit', ['decanato'=> $decanato], compact('sedes'));
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
        $decanato = \App\Decanato::find($cod);
        $decanato->fill($request->all());
        $decanato->save();
        return redirect('/decanato')->with('confirmacion','cambio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cod)
    {
        $decanato = \App\Decanato::destroy($cod);

        //$sede->delete();

        return redirect('/decanato')->with('confirmacion','cambio');
    }
}
