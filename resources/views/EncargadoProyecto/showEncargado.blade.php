@extends('Templates.administrador')
@section('administrador_contenido')
<h1>Encargado de Proyecto: </h1>

   <string>  Fecha de inicio: {{$encargado->FechaInicio}}</string><br>
   <string> Fecha final: {{$encargado->FechaFinal}}</string><br>
   <string> Observaciones: {{$encargado->Observaciones}}</string>

@endsection
