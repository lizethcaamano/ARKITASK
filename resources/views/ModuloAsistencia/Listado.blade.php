<h1>Asistencia de empleados</h1>

<table class="table">
    <thead>
        <tr>
            <th>Empleado</th>
            <th>Horario de Ingreso</th>
            <th>Horario de Salida</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($asistencias as $asistencia)

        <tr>
            <th>{{$asistencia -> IdUsuarioFK}}</th>
            <th>{{$asistencia-> FechaHoraIngreso}}</th>
            <th>{{$asistencia -> FechaHoraSalida}}</th>
            <th><a href="{{url('asistencia/'. $asistencia->IdAsistencia)}}">Detalles</a></th>
            <th><a href="{{url('asistencia/'. $asistencia->IdAsistencia.'/edit')}}">Editar</a></th>
        </tr>
        @endforeach
    </tbody>
    <a href="{{url('asistencia/create')}}">Crear asistencia</a>
