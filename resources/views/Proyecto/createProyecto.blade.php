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
  <input value="{{old('codigo')}}" name="codigo"  type="text" placeholder="" class="form-control input-md">
   <strong class="text-danger">{{$errors->first('codigo')}}</strong>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre Proyecto</label>
  <div class="col-md-4">
  <input value="{{old('nombre')}}" name="nombre"  type="text" placeholder="" class="form-control input-md">
   <strong>{{$errors->first('nombre')}}</strong>
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Gmail">Fecha Realizacion</label>
  <div class="col-md-4">
  <input value="{{old('fechar')}}" name="fechar"  type="date" placeholder="" class="form-control input-md" min="<?php echo date("Y-m-d");?>">
   <strong>{{$errors->first('fechar')}}</strong>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="Gmail">Fecha Entrega</label>  
  <div class="col-md-4">
  <input value="{{old('fechae')}}" name="fechae"  type="date" placeholder="" class="form-control input-md">
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
