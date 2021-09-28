<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Detalles</title>
</head>
<h1>Encargado de Proyecto: </h1>
    {{$encargado->codigoEncargado}}
    {{$encargado->fechaInicio}}
    {{$encargado->fechaFinal}}
    {{$encargado->observaciones}}
    {{$encargado->codigousuariofk}}
    {{$encargado->codigoproyectofk}}
@endsection
</html>