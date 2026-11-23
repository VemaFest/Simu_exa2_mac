@extends('layouts.app')
@section('contenido')
<h1>Libros registradas</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Nacimiento</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($libros as $libro)
        <tr>            
            <td>{{ $libro->id }}</td>
            <td>{{ $libro->dni }}</td>
            <td>{{ $libro->nombre }}</td>
            <td>{{ $libro->fecha_nacimiento->format('d/m/Y') }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="4">No hay registros</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
