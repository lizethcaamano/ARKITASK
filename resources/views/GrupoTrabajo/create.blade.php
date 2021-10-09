<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
</head>
<body>



<form method="POST"  action="{{url('Grupo') }}" class="form-horizontal">
 @csrf
 <fieldset> 
<!-- Form Name -->
<legend>Crear grupos de trabajo</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Codigo de grupo</label>  
  <div class="col-md-4">
  <input value="{{old('CodigoGrupo')}}" name="codigo"  type="text" placeholder="" class="form-control input-md">
    <strong class="text-danger">{{$errors->first('codigo')}}</strong>  -->
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Fecha de inicio</label>  
  <div class="col-md-4">
  <input value="{{old('FechaInicio')}}" name="inicio"  type="date" placeholder="" class="form-control input-md">
  <strong>{{$errors->first('inicio')}}</strong>  -->
  </div>
</div>



<!-- Text input-->



<div class="form-group">
  <label class="col-md-4 control-label" >Fecha desactivacion</label>  
  <div class="col-md-4">
  <input value="{{old('FechaDesactivacion')}}" name="desactivacion"  type="date" placeholder="" class="form-control input-md">
   <strong>{{$errors->first('desactivacion')}}</strong> -->
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


</body>
</html>