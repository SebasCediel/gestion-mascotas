<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Raza;

class RazaController extends Controller
{
    
    public function index()
    {
        $razas = Raza::all();
        return view('razas.index', compact('razas'));
    }

   
    public function create()
    {
        return view('razas.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
        ]);
    
        Raza::create($request->all());
        return redirect()->route('razas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Raza $raza)
    {
        return view('razas.show', compact('raza'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Raza $raza)
    {
        return view('razas.edit', compact('raza'));
    }

    
    public function update(Request $request, Raza $raza)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
        ]);
    
        $raza->update($request->all());
        return redirect()->route('razas.index');
    }

    
    public function destroy(Raza $raza)
    {
        $raza->delete();
        return redirect()->route('razas.index');
    }
}
