@extends('layouts.default')
@section('contenido')
@section('titulo','Mascotas Betin')
@section('subtitulo', 'Las mascotas mas erizas xddxd')
@section('titulo_pagina', 'MascotasBetin | Lista de Mascotas')


<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Tabla de lista de mascotas</h3>
            </div>
            <div class="box-body">
                <a href="{{route('mascotas.create')}}">
                    <button class="btn-primary">Agregar mascota</button>
                </a>
                    <table class="table">
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
                                    <td>$ {{ $mascota->precio }}.00 Mxn</td>
                                    <td>
                                        <a class="btn btn-primary"href="{{route('mascotas.edit', $mascota->id)}}">
                                            <i class="fa fa-fw fa-edit"></i>
                                            Editar
                                        </a>
                                        <form method="POST" action="{{route('mascotas.destroy', $mascota->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-fw fa-trash"></i>Borrar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endsection
            </div>
        </div>
    </div>
</div>
