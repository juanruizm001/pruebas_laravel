<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('css/bootstrap.min.css'); }}

    <!-- Custom styles for this template -->
    {{ HTML::style('css/estilos.css'); }}

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
{{ Form::open(array('url'=>'validarlogin','class'=>'form-signin')); }}

        <h2 class="form-signin-heading">Por favor ingrese:</h2>
        {{ Form::email('email', null, array('placeholder'=>'Ingrese el email', 'class'=>'form-control', 'maxlength'=>30, 'required'=>'true', 'autofocus'=>'true')); }}
        {{ Form::password('password', array('placeholder'=>'Ingrese su contraseña', 'class'=>'form-control', 'required'=>'true')); }}
        {{ Form::checkbox('recordar', 'remember-me', null, array('class'=>'check')); }}
        {{ Form::label('Recuerdeme'); }}

        {{ Form::submit('Ingresar', array('class'=>'btn btn-lg btn-primary btn-block')); }}
{{ Form::close(); }}

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
{{ HTML::script('js/ie10-viewport-bug-workaround.js'); }}
</body>
</html>
