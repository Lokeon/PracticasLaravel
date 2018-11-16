
<!-- /resources/views/articulos/articulos.blade.php -->
@extends('layouts.app')

@section('contenido')
    <h2>Bienvenido a la web sobre articulos</h2>
    <a href=" {{route('insertar_articulo')}}" title="Añadir Articulo"> Añadir articulo </a>
    
    <p>Estos son los articulos publicados. </p>
    @foreach($articulos as $fila)
        <a href="{{route('un_articulo',['art' => $fila->id])}}" title="Ver Articulo">
                <h2> {{$fila->titulo}}</h2></a>
        <p> {{$fila->descripcion}} </p><br>
    @endforeach
    {{$articulos->render()}}
@endsection  

