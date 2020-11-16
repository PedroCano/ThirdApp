<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonedaController extends Controller
{
    public function index()
    {
        $monedas = DB::table('monedas')->paginate(5);

        return view('monedas.index', ['monedas' => $monedas]);
    }
    
    public function create()
    {
        return view('monedas.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'simbolo' => 'required',
            'pais' => 'required',
            'valor' => 'required',
            'fecha' => 'required',
        ]);        

        Moneda::create($request->all());

        return redirect()->route('monedas.index')
        ->with('success','Moneda creada!');
    }
    
    public function show(Moneda $moneda)
    {
        return view('monedas.show',compact('article'));
    }
    
    public function edit(Moneda $moneda)
    {
        return view('monedas.edit',compact('article'));
    }
    
    public function update(Request $request, Moneda $moneda)
    {
        $request->validate([
            'nombre' => 'required',
            'simbolo' => 'required',
            'pais' => 'required',
            'valor' => 'required',
            'fecha' => 'required',
        ]);

        $moneda->update($request->all());
  
        return redirect()->route('monedas.index')
                        ->with('success','Moneda editada!');
    }
    
    public function destroy(Moneda $moneda)
    {
        $moneda->delete();
  
        return redirect()->route('monedas.index')
                        ->with('success','Moneda borrada!');
    }
}
