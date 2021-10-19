@extends('Templates.administrador')
@section('administrador_contenido')

<link rel="stylesheet" href="{{ asset ('css/proyecto.css')}}">
<!-- <link rel="stylesheet" href="{{ asset ('bootstrap4/css/bootstrap.min.css')}}">	  
      
      <link rel="stylesheet" href="{{ asset('jqueryUI/jquery-ui-1.12.1/jquery-ui.min.css')}}">  
        
      <link rel="stylesheet" href="{{ asset ('css.estilos.css')}}"> -->

<a href="{{url('proyecto/create')}}" class="btn btn-primary">Nuevo Proyecto</a>

<div class="container">
@foreach ($proyectos as $proyecto)


   
        <div class="card__perfil ">
            <div class="card__nombre">
               <CENTER> <h3>{{ $proyecto->NombreProyecto}}</h3></CENTER>
                <p> Codigo: {{ $proyecto->CodigoProyecto}}</p>
            </div>
            <hr>
            <div class="card__descripcion">
                <p>Fecha de entrega: {{ $proyecto->FechaEntrega}}</p>
                <p>Fecha de Realizacion: {{ $proyecto->FechaRealizacion}}</p>
                <p>Tipo de Proyecto: </p>
                <p>Estado: {{ $proyecto->Estado}}</p>
                
            </div>
            <hr>
            <div class="card__button">
            <a href="{{ url('proyecto/'.$proyecto->IdProyecto)}}">Ver detalles</a>
           
            </div>
          
        </div>
        @endforeach


          


<script src=" {{ asset ('jquery/jquery-3.3.1.min.js')}}"></script>	 	
    <script src=" {{ asset ('popper/popper.min.js')}}"></script>	 	 	
    <script src="{{ asset ('bootstrap4/js/bootstrap.min.js')}}"></script>   	
    <script src="{{ asset('jqueryUI/jquery-ui-1.12.1/jquery-ui.min.js')}}"></script>  
    <script src="{{ asset ('js/codigo.js')}}"></script> 	  

@endsection
