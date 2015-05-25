<?php $estado=\Illuminate\Support\Facades\Session::get('estado'); ?>

@if ($estado == 'ok')
La noticia se guardó con éxito <br>
@endif

@foreach($noticias as $noticia)

    <li>
        <a href="{{ route('noticias.show', $noticia->id) }}" title="">
            {{$noticia ->titulo}}</li>
        </a>
@endforeach