@extends('layouts.app')

@section('content')
<div class="raza-container">
    <h1>Listado de Razas</h1>

    <a href="{{ route('razas.create') }}" class="raza-btn raza-btn-success">Crear Nueva Raza</a>

    <table>
        <thead>
            <tr>
                <th>Nombre de la raza</th>
                <th>Tipo de mascota</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($razas as $raza)
                <tr>
                    <td>{{ $raza->nombre }}</td>
                    <td>{{ $raza->tipo }}</td>
                    <td>
                        <a href="{{ route('razas.show', $raza->id) }}" class="raza-btn raza-btn-primary">Ver</a>
                        <a href="{{ route('razas.edit', $raza->id) }}" class="raza-btn raza-btn-warning">Editar</a>
                        <form action="{{ route('razas.destroy', $raza->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="raza-btn raza-btn-danger" onclick="return confirm('¿Seguro que quieres eliminar esta raza?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection