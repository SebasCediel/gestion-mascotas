@extends('layouts.app')

@section('content')
<div class="raza-container">
    <h1>Editar Raza</h1>

    <form action="{{ route('razas.update', $raza->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $raza->nombre) }}" required>

        <label for="tipo">Tipo:</label>
        <input type="text" id="tipo" name="tipo" value="{{ old('tipo', $raza->tipo) }}" required>

        <input type="submit" value="Actualizar">
    </form>

    <a href="{{ route('razas.index') }}" class="raza-btn raza-btn-primary">Volver al listado</a>
</div>
@endsection
