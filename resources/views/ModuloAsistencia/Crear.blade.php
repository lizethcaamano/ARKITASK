@extends('Templates.administrador')
@section('administrador_contenido')
<form method="POST" action="{{url('asistencia')}}">
@csrf


<div class=" offset-2 card  w-50 ">

    <!-- Form Name -->
    <h2 class="card-header text-center text-dark">Registre su Asistencia</h2>

    <div class="card-body">
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-6 control-label" >Nombre</label>
      <select name="empleado" class="form-control form-control-lg default-select">
        <option value="">Seleccione</option>
          @foreach ($empleados as $empleado)
          <option value="{{$empleado->IdUsuario}}">{{$empleado->Nombre}} {{$empleado->Apellido}}</option>
          @endforeach
      </select>
      <div class="col-md-4">
      <strong> {{ $errors->first('empleado') }} </strong>  
      </div>
    </div>


    <section class="form-row">
        <legend class="text-primary col-md-12">Horario de Ingreso</legend>
    <!-- Text input-->
    <div class="form-group col-md-6">
      <label class="col-md-6 control-label" for="textInput1">Fecha</label>
      <input value="{{old('fechaingreso')}}"  name="fechaingreso" type="date" placeholder="" class="form-control" min="<?php echo date("Y-m-d");?>">
    <div>
    <strong> {{ $errors->first('fechaingreso') }} </strong>  
    </div>
    </div>

    <div class="form-group col-md-6">
        <label class="col-md-6 control-label" for="textInput1">Hora</label>
        <input  value="{{old('horaingreso',  date ('H:i'))}}" name="horaingreso" type="time" placeholder="" class="form-control"  >
        <div>
    <strong> {{ $errors->first('horaingreso') }} </strong>  
    </div>
      </div>
    </section>

    <section class="form-row">
        <legend class="text-primary col-md-12">Horario de Salida</legend>
    <!-- Text input-->
    <div class="form-group col-md-6">
      <label class="control-label col-md-6" for="textInput1">Fecha</label>
      <input   value="{{old('fechasalida')}}" name="fechasalida" type="date" placeholder="" class="form-control">
      <div>
    <strong> {{ $errors->first('fechasalida') }} </strong>  
    </div>
    </div>

    <div class="form-group col-md-6">
        <label class="col-md-6 control-label" for="textInput1">Hora</label>
        <input   value="{{old('horasalida')}}" name="horasalida" type="time" placeholder="" class="form-control" >
        <div>
    <strong> {{ $errors->first('horasalida') }} </strong>  
    </div>
      </div>
    </section>

    </div><!-- fin card body -->
    <!-- Button -->
    <div class="form-group">
        <div class="card-footer">
        <button id="singlebutton" name="singlebutton" class="btn btn-primary col-md-12">Registrar</button>
        </div>
    </div>

</div> <!-- Fin card -->

</form>
@endsection
