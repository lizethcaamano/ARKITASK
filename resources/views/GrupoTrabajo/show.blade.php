@extends('Templates.administrador')
@section('administrador_contenido')
    <center>
        <h1>Grupo de Proyecto</h1>
<h4>Codigo: </h4> {{$grupo->CodigoGrupo}}<br>

<div class="container">
<h4><strong>Fecha de Inicio: </h4>{{$grupo->FechaInicio}}</strong>
<h4><strong>Fecha de  Desactivacion:</h4> {{$grupo->FechaDesactivacion}}</strong>
</center>
</div>

@endsection
