<?php

namespace App\Http\Controllers;

use App\Models\Moneda;
use Illuminate\Http\Request;
use DB;

class MonedaController extends Controller
{
    public function index()
    {
        $monedas = DB::table('monedas')->paginate(5);

        return view('moneda.index', ['monedas' => $monedas]);
    }
    
    public function create()
    {
        return view('moneda.create');
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

        return redirect()->route('moneda.index')
        ->with('success','Moneda creada!');
    }
    
    public function show(Moneda $moneda)
    {
        return view('moneda.show',compact('moneda'));
    }
    
    public function edit(Moneda $moneda)
    {
        return view('moneda.edit',compact('moneda'));
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
  
        return redirect()->route('moneda.index')
                        ->with('success','Moneda editada!');
    }
    
    public function destroy(Moneda $moneda)
    {
        
        $moneda->delete();
  
        return redirect()->route('moneda.index')
                        ->with('success','Moneda borrada!');
    }
}
