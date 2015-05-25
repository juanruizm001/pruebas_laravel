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

{{--
Trabajo con variables
{{ $nombrevariable }}
{{{ $nombrevariable }}} <!-- Escapa los caracteres para prevenir injeccion sql -->
@{{ $nombrevariable }} <!-- Escapa los caracteres para prevenir injeccion sql -->
{{ time() }}
{{{ $name or 'Valor por defecto' }}}
{{{ isset($name) ? $name : 'Valor por defecto' }}}

@foreach($a as $b)
    ...
@endforeach

@if($a == 1)
    ...
@else
    ...
@endif

@unless(Auth::check())
    Usted no está logeado.
@endunless
--}}
