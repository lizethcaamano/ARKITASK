<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
<h1>{{$proyecto->NombreProyecto}} </h1><br>

<div class="container">
<h3><strong>Codigo: {{$proyecto->CodigoProyecto}}</strong></h3>
<h3><strong>Fecha de Realizacion: {{$proyecto->FechaRealizacion}}</strong></h3>
<h3><strong>Fecha de Entrega: {{$proyecto->FechaEntrega}}</strong></h3>
<h3><strong>Estado: {{$proyecto->Estado}}</strong></h3></center>
</div>

</body>
</html>