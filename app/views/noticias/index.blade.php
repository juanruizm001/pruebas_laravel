<?php $estado=\Illuminate\Support\Facades\Session::get('estado'); ?>

@if ($estado == 'salvar')
    La noticia se guardó con éxito <br>
@endif
@if ($estado == 'delete')
    La noticia fué eliminada <br>
@endif

@foreach($noticias as $noticia)

    <li>
        <a href="{{ route('noticias.show', $noticia->id) }}" title="">
            {{$noticia ->titulo}} </a>  -
    {{ Form::open(array('method'=>'DELETE','route'=>array('noticias.destroy', $noticia->id))) }}
    {{ Form::submit('Eliminar', array('class'=>'Clase boton')) }}
    {{ Form::close() }}
    </li>
@endforeach