{{HTML::script('http://code.jquery.com/jquery-2.1.4.min.js');}}
{{HTML::script('js/restfulizer.js');}}

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
            {{$noticia ->titulo}} </a> - <a href="{{ route('noticias.destroy', $noticia->id) }}"
data-method="delete" rel="nofollow" data-confirm="¿Está seguro que desea eliminar la noticia?">Borrar</a>

        {{ Form::open(array('method'=>'DELETE','route'=>array('noticias.destroy', $noticia->id))) }}
        {{ Form::submit('Eliminar', array('class'=>'Clase boton')) }}
        {{ Form::close() }}
    </li>
@endforeach