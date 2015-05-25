<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Varias variables</h1>

<?php
echo "Su nombre es $nombre.<br>";
echo "Su apellido es $apellido.<br>";
echo "Su telefono es $telefono.<br>";
echo Session::get('mensaje');
?>
</body>
</html>