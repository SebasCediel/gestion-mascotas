<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Raza;
use Illuminate\Http\Request;

class RazaController extends Controller
{
=======
use Illuminate\Http\Request;
use App\Models\Raza;

class RazaController extends Controller
{
    
>>>>>>> 6bbda65202589a38f8b261203bc4d6a9b26bdea2
    public function index()
    {
        $razas = Raza::all();
        return view('razas.index', compact('razas'));
    }

<<<<<<< HEAD
=======
   
>>>>>>> 6bbda65202589a38f8b261203bc4d6a9b26bdea2
    public function create()
    {
        return view('razas.create');
    }

<<<<<<< HEAD
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);
        Raza::create($request->all());
        return redirect()->route('razas.index')->with('success', 'Raza creada correctamente.');
    }

=======
    
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
>>>>>>> 6bbda65202589a38f8b261203bc4d6a9b26bdea2
    public function show(Raza $raza)
    {
        return view('razas.show', compact('raza'));
    }

<<<<<<< HEAD
=======
    /**
     * Show the form for editing the specified resource.
     */
>>>>>>> 6bbda65202589a38f8b261203bc4d6a9b26bdea2
    public function edit(Raza $raza)
    {
        return view('razas.edit', compact('raza'));
    }

<<<<<<< HEAD
    public function update(Request $request, Raza $raza)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);
        $raza->update($request->all());
        return redirect()->route('razas.index')->with('success', 'Raza actualizada correctamente.');
    }

    public function destroy(Raza $raza)
    {
        $raza->delete();
        return redirect()->route('razas.index')->with('success', 'Raza eliminada correctamente.');
    }
}
=======
    
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
>>>>>>> 6bbda65202589a38f8b261203bc4d6a9b26bdea2
