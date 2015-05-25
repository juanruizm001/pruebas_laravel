<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>
        @section('titulo')
            Curso de Laravel 4.2.-
        @show

        @section('cabecera')
            <link rel="stylesheet" href="">
        @show
    </title>
</head>
<body>
    @yield('content')

    <hr>
    <footer>
        @yield('footer', 'Este es el contenido del pie de pagina')
    </footer>
</body>
</html>