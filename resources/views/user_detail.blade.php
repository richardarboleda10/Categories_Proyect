<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detalle del usuario</h1>
    @if ($id == 1)
        <h3>ID del usuario: {{$id}}</h3>
    @else
        <h3>No se encontro el id del usuario</h3>
    @endif

</body>
</html>
