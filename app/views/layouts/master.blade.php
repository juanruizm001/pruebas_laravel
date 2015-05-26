<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>
        @section('titulo')
            Curso de Laravel 4.2.-
        @show
    </title>

    {{ HTML::style('css/bootstrap.min.css'); }}
    {{ HTML::script('http://code.jquery.com/jquery-2.1.4.min.js'); }}
        @section('cabecera')
            {{ HTML::style('css/estilos.css'); }}
            <link rel="stylesheet" href="">
        @show

        {{ HTML::script('js/bootstrap.min.js'); }}

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]>{{ HTML::script('js/ie8-responsive-file-warning.js'); }}<![endif]-->

        {{ HTML::script('js/ie-emulation-modes-warning.js'); }}


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        {{ HTML::script('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'); }}
        {{ HTML::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js'); }}
        <![endif]-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            @yield('content')
        </div>


        <footer class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <hr>
            @yield('footer', 'Este es el contenido del pie de pagina')
        </footer>
    </div>
</div>




</body>
</html>