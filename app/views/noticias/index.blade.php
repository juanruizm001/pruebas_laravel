@extends('layouts.master')

@section('cabecera')
    @parent

    {{ HTML::script('js/restfulizer.js'); }}
@stop

@section('content')

<?php $estado=Session::get('estado'); ?>
@if ($estado == 'salvar')
    <div class="alert alert-success">
        La noticia se guardó con éxito <br>
    </div>
@endif
@if ($estado == 'delete')
    <div class="alert alert-danger">
        La noticia fué eliminada <br>
    </div>
@endif

<h1>Listado de Noticias</h1>
<ul class="list-group">
    @foreach($noticias as $noticia)

        <li class="list-group-item">
            <a href="{{ route('noticias.show', $noticia->id) }}" title="">
                {{$noticia ->titulo}} </a>
            <a href="{{ route('noticias.destroy', $noticia->id) }}"
               data-method="delete" rel="nofollow" data-confirm="¿Está seguro que desea eliminar la noticia?" class="btn btn-danger btn-xs">Borrar</a>


            {{--{{ Form::open(array('method'=>'DELETE','route'=>array('noticias.destroy',$noticia->id))) }}
            {{ Form::submit('Eliminar',array('class'=>'Clase boton')) }}
            {{ Form::close() }}--}}

        </li>
    @endforeach
</ul>

@stop