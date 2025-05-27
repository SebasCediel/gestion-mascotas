@extends('layouts.app')

@section('content')
<div class="raza-container">
    <h1>Detalle de Raza</h1>

    <p><strong>ID:</strong> {{ $raza->id }}</p>
    <p><strong>Nombre:</strong> {{ $raza->nombre }}</p>
    <p><strong>Tipo:</strong> {{ $raza->tipo }}</p>

    <a href="{{ route('razas.index') }}" class="raza-btn raza-btn-primary">Volver al listado</a>
</div>
@endsection
