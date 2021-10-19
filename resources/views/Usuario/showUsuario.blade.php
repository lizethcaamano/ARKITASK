@extends('Templates.administrador')
@section('administrador_contenido')
<h1> {{$usuario->Nombre}} {{$usuario->Apellido}} </h1>

   
    
<h3><strong>  Correo: {{$usuario->Correo}}</strong></h3>
<h3><strong> Numero de documento: {{$usuario->NumeroDocumento}}</strong></h3>
<h3><strong>  Fecha de nacimiento: {{$usuario->FechaNacimiento}}</strong></h3>
<h3><strong>  Telefono: {{$usuario->Telefono}}</strong></h3>
<h3><strong>  {{$usuario->Imagen}}</strong></h3>

@endsection