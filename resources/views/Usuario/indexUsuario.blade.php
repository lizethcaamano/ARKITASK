@extends('Templates.administrador')
@section('administrador_contenido')
   
<center><h1 class="text-lefth">Lista de Usuarios</h1></center>
<!-- @if (session("mensaje_exito"))
    <div>
        <strong>
            {{ session("mensaje_exito") }}
        </strong>
    </div>
@endif -->
<table class="table table-dark">
    <thead>
        <tr class="table table-primary">
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Documento</th>
            <th>Fecha de Nacimiento</th>
            <th>Teléfono</th>
            <th>Imagen</th>
            <th >Detalles</th>
            <th>Actualizar</th>
            <th>Modificar estado</th>
        </tr>
    </thead>
    <tbody >
        @foreach($usuarios as $usuario )

        <tr>
          
            <td>{{ $usuario->Nombre}}</td>
            <td>{{ $usuario->Apellido}}</td>
            <td>{{ $usuario->Correo}}</td>
            <td>{{ $usuario->NumeroDocumento}}</td>
            <td>{{ $usuario->FechaNacimiento}}</td>
            <td>{{ $usuario->Telefono}}</td>
            <td>{{ $usuario->Imagen}}</td>
            <td><a class="btn btn-outline-secondary" href="{{ url('Usuario/'.$usuario->IdUsuario)}}">Ver Detalles </a></td>
           <td> <a class="btn btn-outline-info" href="{{ url('Usuario/'.$usuario->IdUsuario.'/edit')}}"> Actualizar </a></td>

           

        </tr>

        @endforeach
    </tbody>
</table>

 {{ $usuarios->links() }}

<a  Class = "btn btn-info " href="{{ url('Usuario/create') }}">Nuevo Usuario</a>

@endsection