<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\Owner;
use App\Models\Raza;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function index()
    {
        $mascotas = Mascota::with(['owner', 'raza'])->get();
        return view('mascotas.index', compact('mascotas'));
    }

    public function create()
    {
        $owners = Owner::all();
        $razas = Raza::all();
        return view('mascotas.create', compact('owners', 'razas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'edad' => 'required|integer',
            'especie' => 'required|string|max:255',
            'owner_id' => 'required|exists:owners,id',
            'raza_id' => 'required|exists:razas,id',
        ]);
        Mascota::create($request->all());
        return redirect()->route('mascotas.index')->with('success', 'Mascota creada correctamente.');
    }

    public function show(Mascota $mascota)
    {
        return view('mascotas.show', compact('mascota'));
    }

    public function edit(Mascota $mascota)
    {
        $owners = Owner::all();
        $razas = Raza::all();
        return view('mascotas.edit', compact('mascota', 'owners', 'razas'));
    }

    public function update(Request $request, Mascota $mascota)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'edad' => 'required|integer',
            'especie' => 'required|string|max:255',
            'owner_id' => 'required|exists:owners,id',
            'raza_id' => 'required|exists:razas,id',
        ]);
        $mascota->update($request->all());
        return redirect()->route('mascotas.index')->with('success', 'Mascota actualizada correctamente.');
    }

    public function destroy(Mascota $mascota)
    {
        $mascota->delete();
        return redirect()->route('mascotas.index')->with('success', 'Mascota eliminada correctamente.');
    }
}