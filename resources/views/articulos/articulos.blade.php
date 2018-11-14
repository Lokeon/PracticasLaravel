
<!-- /resources/views/articuslo/articulos.blade.php -->
@extends('layouts.app')

@section('contenido')
    <h2>Bienvenido a la web sobre articulos</h2>
    <a href=" {{route('insertar_articulo')}}" title="Añadir Articulo"> Añadir articulo </a>
    <p>Estos son los articulos publicados. </p>
@endsection  
