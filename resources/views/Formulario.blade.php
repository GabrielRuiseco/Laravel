<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('/css/app.css')}}">
    <title>Formulario</title>
</head>
<body>

<form action="/info" method="POST">
    @csrf
    <input type="text" name="nombre" id="nombre">
    <input type="text" name="ap_paterno" id="ap_paterno">
    <input type="text" name="ap_materno" id="ap_materno">
    <input type="submit" value="Enviar">
</form>

<main id="app">
    <example-component alumnos="{{$datos}}"></example-component>
</main>

<script src="{{ mix('/js/app.js')}}"></script>
</body>
</html>
