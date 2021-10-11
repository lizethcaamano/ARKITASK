<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Proyectos</title>
</head>
<body>
=======
@extends('Templates.administrador')
@section('administrador_contenido')


>>>>>>> refs/remotes/origin/master



<form method="POST"  action="{{url('proyecto') }}" class="form-horizontal">
 @csrf
 <fieldset>
<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Codigo de proyecto</label>
  <div class="col-md-4">
<<<<<<< HEAD
  <input value="{{old('codigo')}}" name="codigo"  type="text" placeholder="" class="form-control input-md">
   <strong class="text-danger">{{$errors->first('codigo')}}</strong> 
=======
  <input value="{{old('codigoproyecto')}}" name="codigo"  type="text" placeholder="" class="form-control input-md">
   <strong class="text-danger">{{$errors->first('codigo')}}</strong>
>>>>>>> refs/remotes/origin/master
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre Proyecto</label>
  <div class="col-md-4">
<<<<<<< HEAD
  <input value="{{old('nombre')}}" name="nombre"  type="text" placeholder="" class="form-control input-md">
   <strong>{{$errors->first('nombre')}}</strong> 
=======
  <input value="{{old('NombreProyecto')}}" name="nombre"  type="text" placeholder="" class="form-control input-md">
   <strong>{{$errors->first('nombre')}}</strong>
>>>>>>> refs/remotes/origin/master
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Gmail">Fecha Realizacion</label>
  <div class="col-md-4">
  <input value="{{old('FechaRealizacion')}}" name="fechar"  type="date" placeholder="" class="form-control input-md">
   <strong>{{$errors->first('fechar')}}</strong>
  </div>
</div>


<div class="form-group">
<<<<<<< HEAD
  <label class="col-md-4 control-label" for="Gmail">Fecha Entrega</label>  
=======
<<<<<<< HEAD
  <label class="col-md-4 control-label" for="Gmail">Fecha Entrega</label>
=======
  <label class="col-md-4 control-label" for="Gmail">Fecha eNTREGA</label>  
>>>>>>> fbe5ae87513e3253ebf60be067110414d9be4948
>>>>>>> refs/remotes/origin/master
  <div class="col-md-4">
  <input value="{{old('FechaEntrega')}}" name="fechae"  type="date" placeholder="" class="form-control input-md">
   <strong>{{$errors->first('fechae')}}</strong>
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary">Guardar</button>
  </div>
</div>

</fieldset>
</form>


@endsection
