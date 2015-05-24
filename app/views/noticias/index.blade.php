@foreach($noticias as $noticia)

    <li>
        <a href="{{ route('noticias.show', $noticia->id) }}" title="">
            {{$noticia ->titulo}}</li>
        </a>
@endforeach