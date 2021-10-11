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
                <th>Codigo </th>
                <th>Nombre</th>
               <th>Fecha de entrega</th>
             
               <th>Actualizar</th>
             
               <th>Cambiar estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyectos as $proyecto)
           
            <tr>
                <td>{{ $proyecto->CodigoProyecto}} </td>
                <td><a href="{{ url('proyecto/'.$proyecto->IdProyecto)}}" class="link-secondary">{{ $proyecto->NombreProyecto}}</a> </td>
                <td> </td>
                
                <td>  <a href="{{url('proyecto/'.$proyecto->IdProyecto.'/edit' )}}">Actualizar</a></td>
         
                <td> </td>
                
   
       
            </td>
            </tr>
         
            @endforeach
        </tbody>
    </table>
    <a href="{{url('proyecto/create')}}" class="btn btn-primary">Nuevo Proyecto</a>
</body>
</html>