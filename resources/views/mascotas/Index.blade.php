@extends('layouts.default')
@section('contenido')
<a href="{{route('mascotas.create')}}">
    <button>Agregar mascota</button>
</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mascotas as $mascota)
                <tr>
                    <td>{{ $mascota->nombre }}</td>
                    <td>{{ $mascota->precio }}</td>
                    <td>
                        <a href="{{route('mascotas.edit', $mascota->id)}}">
                            <button>Editar</button>
                        </a>
                        <form method="POST" action="{{route('mascotas.destroy', $mascota->id)}}">
                        @csrf
                        @method('DELETE')
                        <button>Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection