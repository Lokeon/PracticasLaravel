
<!-- /resources/views/articuslo/nuevo.blade.php -->

@extends('layaouts.app')
@section('contenido')
    <h2>Insertar articulo</h2>
    <a href= "{{route('guardar_articulo')}}" title="Artículos"> Artículos </a>
<!-- FORMULARIO -->
    <form action="{{route('guarda_articulo')}}" method="POST">
    <!-- Para que LARAVEL permita hacer post , evita TokenMismatchException -->
    {{csrf_field()}}
    <label for="titulo">Título:</label><br />
    <input type="text" name="titulo" class="input" value="" /> <br /><br /> 
    <label for="descripcion">Descripcion:</label> <br />
