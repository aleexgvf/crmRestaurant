@extends('master')

@section('contenido')

<form action="{{url('/guardarEncargado')}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">

<div>
	<b><label for="nombre"> Nombre de la bebida: </label></b>
	<input type="text" class="form-control" name="nombre" required> 
</div>
<hr>
<div>
	<label for="descripcion"> Descripción: </label>
	<input type="text" class="form-control" name="descripcion" required>
</div>
<hr>
<div>
	<label for="costo"> Costo: </label>
	<input type="text" class="form-control" name ="costo" required>
</div>
<hr>
<div>
   	<button type="submit" class="btn btn-primary"> Registrar</button>
    <a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
</div>
</form>

@stop