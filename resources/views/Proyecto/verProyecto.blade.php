@extends('Templates.administrador')
@section('administrador_contenido')
   


<div class="container">
<h1>{{$proyecto->NombreProyecto}} </h1><br>
<h3><strong>Codigo:</h3> {{$proyecto->CodigoProyecto}}</strong><br><br>
<h3><strong>Fecha de Realizacion:</h3> {{$proyecto->FechaRealizacion}}</strong><br><br>
<h3><strong>Fecha de Entrega:</h3> {{$proyecto->FechaEntrega}}</strong><br><br>

<h3><strong>Estado:</h3> {{$proyecto->Estado}}</strong><br><br>
<h3><strong>Descripcion:</h3> {{$proyecto->Descripcion}}</strong><br><br>
</div>

@endsection
