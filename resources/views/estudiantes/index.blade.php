@extends('layouts.proyecto')

@section('contenido')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Estudiantes</h1>
        <a href="{{ route('estudiantes.create') }}" class="btn btn-primary">Nuevo estudiante</a>
    </div>

    <table class="table table-striped table-bordered bg-white">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Carrera</th>
                <th style="width: 180px;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($estudiantes as $estudiante)
                <tr>
                    <td>{{ $estudiante->id }}</td>
                    <td>{{ $estudiante->nombre }}</td>
                    <td>{{ $estudiante->correo }}</td>
                    <td>{{ $estudiante->carrera }}</td>
                    <td>
                        <a href="{{ route('estudiantes.edit', $estudiante) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('estudiantes.destroy', $estudiante) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('¿Eliminar este estudiante?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No hay registros todavía.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection