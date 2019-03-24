<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Escuela;
class EscuelaController extends Controller
{



	    public function index()
    {
        

        $escuelas = Escuela::with('decanato')->orderby('cod', 'ASC')->paginate(10);
         return view('escuela.index', compact('escuelas'));
      }
    //Variable que relaciona con el modelo, trae todo por el ::All
        


    public function create()
    {
        $decanatos = \App\Decanato::all(); //Variable que relaciona con el modelo, trae todo por el ::All
        return view('escuela.create', compact('decanatos'));
    }


        public function store(Request $request)
    {
        \App\Escuela::create([
        'nombre' => $request['nombre'],
        'director' => $request['director'],
        'decanato_cod' =>$request['decanato_cod'],
        ]);
        return redirect('/escuela')->with('confirmacion','store');
    }

        public function edit($cod)
    {
        $escuela = \App\Escuela::find($cod);
        $decanatos = \App\Decanato::all();
        //return view('sede.edit',compact('sedes'));

        return view('escuela.edit', compact('escuela','decanatos'));
    }

    public function update(Request $request, $cod)
    {
        $escuela = \App\Escuela::find($cod);
        $escuela->fill($request->all());
        $escuela->save();
        return redirect('/escuela')->with('confirmacion','cambio');
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
