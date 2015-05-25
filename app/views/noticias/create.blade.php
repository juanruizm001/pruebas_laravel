{{ Form::open(array('url'=>'noticias')) }}

    {{ Form::label('titulo', 'Titulo de la noticia') }}: {{ Form::text('titulo') }}<br>
    Contenido: {{ Form::text('contenido') }}<br>
    Fecha de Publicación: {{ Form::text('fechaPublicacion') }}<br>
    Publicado: {{ Form::text('activo') }}<br>
    Creado Por: {{ Form::text('idusuario') }}<br>
    <br>
    {{ Form::submit('Crear Noticia') }}

{{ Form::close() }}