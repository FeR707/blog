<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nombre: {{$nombre}} {{$apellido}} {{$edad}}</h1>
    <h2>{{$elementos[0]}}</h2>
    <a href="{{route('saludo')}}">Vamos a saludas</a><br>

    @foreach ($elementos as $elemento)
        {{$elemento}}
        @if ($elemento == 45)
        <h2>Es un numero</h2>
        @else
        <h2>No es un numero</h2>
        @endif
        <hr>
    @endforeach
</body>
</html>