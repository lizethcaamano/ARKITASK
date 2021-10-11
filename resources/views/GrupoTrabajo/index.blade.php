<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class="table table-primary">
        <thead>
            <tr>
                <th>Codigo Grupo </th>
                <th>Fecha de Inicio</th>
               <th>Fecha de desactivacion</th>
               <th>Ver detalles</th>
               <th>Actualizar</th>
             
               <th>Cambiar estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grupos as $grupo)
           
            <tr>
                <td>{{ $grupo->CodigoGrupo}} </td>
                <td>{{ $grupo->FechaInicio}} </td>
                <td>{{ $grupo->FechaDesactivacion}} </td>
                <td> </td>
                <td><a href="{{ url('Grupo/'.$grupo->IdGrupo)}}">Ver detalles</a></td>
                <td>  <a href="{{url('Grupo/'.$grupo->IdGrupo.'/edit' )}}">Actualizar</a></td>
         
                <td> </td>
                
   
       
            </td>
            </tr>
         
            @endforeach
        </tbody>
    </table>
    <a href="{{url('Grupo/create')}}" class="btn btn-primary">Nuevo Grupo</a>
</body>
</html>