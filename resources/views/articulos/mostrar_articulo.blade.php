
<!-- /resources/views/articulos/mostrar_articulo.blade.php -->
@extends('layouts.app')

@section('contenido')
    <a href="{{route('articulos')}}" title="Ver todos los articulos"> </a>
    <p> Este es el articulo.</p>
    <h2>{{$articulo->titulo}}</h2>
    <h3> {{$articulo->descripcion}}</h3>
    <p>{{$articulo->cuerpo}}
@endsection