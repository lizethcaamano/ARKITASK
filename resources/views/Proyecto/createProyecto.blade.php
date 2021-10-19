
@extends('Templates.administrador')
@section('administrador_contenido')



<div class="container">

<form method="POST"  action="{{url('proyecto') }}" class="form-horizontal">
 @csrf
 <fieldset>
<!-- Form Name -->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"><h4>Codigo de proyecto</h3></label>
  <div class="col-md-4">
  <input value="{{old('codigo')}}" name="codigo"  type="text" placeholder="" class="form-control input-lg">
   <strong class="text-danger">{{$errors->first('codigo')}}</strong>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"><h4>Nombre Proyecto</h4></label>
  <div class="col-md-4">
  <input value="{{old('nombre')}}" name="nombre"  type="text" placeholder="" class="form-control input-md">
   <strong class="text-danger">{{$errors->first('nombre')}}</strong>
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Gmail"><h4>Fecha Realizacion</h4></label>
  <div class="col-md-4">
  <input value="{{old('fechar')}}" name="fechar"  type="date" placeholder="" class="form-control input-md">
   <strong class="text-danger">{{$errors->first('fechar')}}</strong>
  </div>
</div>


<div class="form-group">



  <div class="col-md-4">
  <label class="col-md-4 control-label" for="Gmail"><h4>Fecha Entrega</h4></label>  
  <input value="{{old('fechae')}}" name="fechae"  type="date" placeholder="" class="form-control input-md">
   <strong class="text-danger">{{$errors->first('fechae')}}</strong>
  </div>

<br>
  <div class="col-md-4">
    <label for=""><h4>Descripcion (Opcional)</h4></label>
    <textarea name="descripcion" id="" cols="30" rows="10" class="form-control input-md"></textarea>
  </div>
</div>




<!-- Button -->

  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary">Guardar</button>
  </div>
</div>

</fieldset>
</form>
</div>

@endsection
