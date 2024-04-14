<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @php
        $studentName = "Richard Arboleda";
        $studentAge = 25;
    @endphp

    <!-- Imprimir variable php -->
    <h3>Bienvenido {{$studentName}}</h3>
    <p>tu edad es {{$studentAge}}</p>
</body>
</html>
