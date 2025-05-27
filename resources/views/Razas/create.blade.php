@extends('layouts.app')

@section('content')
<div class="raza-container">
    <h1>Crear Nueva Raza</h1>

    <form action="{{ route('razas.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre de la raza:</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>

        <label for="tipo">Tipo de mascota:</label>
        <input type="text" id="tipo" name="tipo" value="{{ old('tipo') }}" required>

        <input type="submit" value="Guardar">
    </form>

    <a href="{{ route('razas.index') }}" class="raza-btn raza-btn-primary">Volver al listado</a>
</div>
@endsection