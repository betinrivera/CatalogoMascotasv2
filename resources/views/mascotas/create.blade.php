@extends('layouts.default')
@section('contenido')
@section('titulo','Mascotas Betin')
@section('subtitulo', 'Las mascotas mas erizas xddxd')
@section('titulo_pagina', 'MascotasBetin | Agregar Mascotas')

    <form action="{{route('mascotas.store')}}" method="post">
    @csrf
        <label>Especie</label>
        <select name="especie"required>
            <option disable selected value="">Elige una especie</option>
            @foreach($especies as $especie)
            <option value="{{$especie->id}}">{{$especie->nombre}}</option>
             @endforeach
        </select>
        <br/><br/>
        <label>Nombre</label>
        <input  required type="text" name="nombre" placeholder="Nombre de la mascota">
        <br/><br/>
        <label>Precio</label>
        <input required type="text" name="precio" placeholder="Precio de la mascota">
        <br/><br/>
        <label>Fecha de nacimiento</label>
        <input required type="date" name="nacimiento">
        <br/><br/>
        <button required type="submit">Crear nueva mascota</button>
    </form>
    @endsection