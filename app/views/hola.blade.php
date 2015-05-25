@extends('layouts.master')

@section('titulo')
    Bienvenidos a las pruebas de Laravel
@stop

@section('content')
    <h1>Bienvenidos</h1>
    <p>Este el el contenido de la vista</p>
@stop

@section('footer')
    @parent
    <p>Este es el pie de página de la vista</p>
@stop