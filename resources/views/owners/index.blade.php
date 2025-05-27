
@extends('layouts.app')

@section('content')
    <h1>Lista de Dueños</h1>
    <a href="{{ route('owners.create') }}">Crear nuevo dueño</a>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($owners as $owner)
                <tr>
                    <td>{{ $owner->nombre }}</td>
                    <td>{{ $owner->telefono }}</td>
                    <td>{{ $owner->direccion }}</td>
                    <td>
                        <a href="{{ route('owners.show', $owner) }}">Ver</a>
                        <a href="{{ route('owners.edit', $owner) }}">Editar</a>
                        <form action="{{ route('owners.destroy', $owner) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection