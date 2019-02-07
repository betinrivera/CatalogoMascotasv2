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
                        <div class="alert alert-success alert-dismissible" style="margin-top: 20px">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i> Listo!</h4>
                        Success alert preview. This alert is dismissable.
                        </div>

                        <div class="alert alert-danger alert-dismissible" style="margin-bottom: 20px">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                        Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire
                        soul, like these sweet mornings of spring which I enjoy with my whole heart.
                        </div>

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
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#modalBorrar{{$mascota->id}}">
                                        
                                        <i class="fa fa-fw fa-trash"></i>Borrar
                                        
                                        </button>
                                        <div class="modal fade" id="modalBorrar{{$mascota->id}}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">No lo borres ueeee :c</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Seguro que quieres matar a {{$mascota->nombre}}?&hellip;</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                                                    <form method="POST" action="{{route('mascotas.destroy', $mascota->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-primary">Confirmar</button>
                                                    </form>
                                                </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                            </div>
                                        <!--<form method="POST" action="{{route('mascotas.destroy', $mascota->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-fw fa-trash"></i>Borrar</button>
                                        </form>-->
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
