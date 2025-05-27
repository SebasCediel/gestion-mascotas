<?php

namespace App\Http\Controllers;

use App\Models\Raza;
use Illuminate\Http\Request;

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
            'nombre' => 'required|string|max:255',
        ]);
        Raza::create($request->all());
        return redirect()->route('razas.index')->with('success', 'Raza creada correctamente.');
    }

    public function show(Raza $raza)
    {
        return view('razas.show', compact('raza'));
    }

    public function edit(Raza $raza)
    {
        return view('razas.edit', compact('raza'));
    }

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