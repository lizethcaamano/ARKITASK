@extends('Templates.administrador')
@section('administrador_contenido')





<form method="POST"  action="{{url('proyecto') }}" class="form-horizontal">
 @csrf
 <fieldset>
<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Codigo de proyecto</label>
  <div class="col-md-4">
  <input value="{{old('codigoproyecto')}}" name="codigo"  type="text" placeholder="" class="form-control input-md">
   <strong class="text-danger">{{$errors->first('codigo')}}</strong>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre Proyecto</label>
  <div class="col-md-4">
  <input value="{{old('NombreProyecto')}}" name="nombre"  type="text" placeholder="" class="form-control input-md">
   <strong>{{$errors->first('nombre')}}</strong>
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
  <label class="col-md-4 control-label" for="Gmail">Fecha eNTREGA</label>  
>>>>>>> fbe5ae87513e3253ebf60be067110414d9be4948
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
