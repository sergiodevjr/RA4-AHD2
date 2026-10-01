@extends('layouts.proyecto')

@section('contenido')
    <h1 class="h3 mb-3">Nuevo estudiante</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('estudiantes.store') }}" method="POST" class="card card-body">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Correo</label>
            <input type="email" name="correo" class="form-control" value="{{ old('correo') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Carrera</label>
            <input type="text" name="carrera" class="form-control" value="{{ old('carrera') }}" required>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
@endsection