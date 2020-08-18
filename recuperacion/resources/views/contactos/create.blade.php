@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ url('/contactos')}}" class="form-horizontal" method="post">
{{ csrf_field() }}

<div class="form-group">
<label class="control-label" for="Nombre">{{'Nombre'}}</label>
<input class="form-control" type="text" name="Nombre" id="Nombre" value="">
</div>

<div class="form-group">
<label class="control-label" for="Apellido">{{'Apellido'}}</label>
<input class="form-control" type="text" name="Apellido" id="Apellido" value="">
</div>

<div class="form-group">
<label class="control-label" for="Correo">{{'Correo'}}</label>
<input class="form-control" type="email" name="Correo" id="Correo" value="">
</div>

<div class="form-group">
<label class="control-label" for="Telefono">{{'Telefono'}}</label>
<input class="form-control" type="text" name="Telefono" id="Telefono" value="">
</div>

<div class="form-group">
<label class="control-label" for="Direccion">{{'Direccion'}}</label>
<input class="form-control" type="text" name="Direccion" id="Direccion" value="">
</div>

<div class="form-group">
<label class="control-label" for="TIN">{{'TIN'}}</label>
<input class="form-control" type="text" name="TIN" id="TIN" value="">
</div>

<div class="form-group">
<label class="control-label" for="Compañia">{{'Compañia'}}</label>
<input class="form-control" type="text" name="Compañia" id="Compañia" value="">
</div>
<input class="btn btn-success" type="submit" value="Agregar">
<a class="btn btn-primary" href="{{url('contactos')}}">Regresar</a>

</form>

</div>
@endsection