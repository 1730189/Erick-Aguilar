@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{url('/contactos/'. $contactos->id)}}" method="post">
{{ csrf_field()}}
{{method_field('PATCH')}}

<div class="form-group">
<label class="control-label" for="Nombre">{{'Nombre'}}</label>
<input class="form-control" type="text" name="Nombre" id="Nombre" value="{{$contactos -> Nombre}}">
</div>

<div class="form-group">
<label class="control-label" for="Apellido">{{'Apellido'}}</label>
<input class="form-control" type="text" name="Apellido" id="Apellido" value="{{$contactos -> Apellido}}">
</div>

<div class="form-group">
<label class="control-label" for="Correo">{{'Correo'}}</label>
<input class="form-control" type="email" name="Correo" id="Correo" value="{{$contactos -> Correo}}">
</div>

<div class="form-group">
<label class="control-label" for="Telefono">{{'Telefono'}}</label>
<input class="form-control" type="text" name="Telefono" id="Telefono" value="{{$contactos -> Telefono}}">
</div>

<div class="form-group">
<label class="control-label" for="Direccion">{{'Direccion'}}</label>
<input class="form-control" type="text" name="Direccion" id="Direccion" value="{{$contactos -> Direccion}}">
</div>

<div class="form-group">
<label class="control-label" for="TIN">{{'TIN'}}</label>
<input class="form-control" type="text" name="TIN" id="TIN" value="{{$contactos -> TIN}}">
</div>

<div class="form-group">
<label class="control-label" for="Compañia">{{'Compañia'}}</label>
<input class="form-control" type="text" name="Compañia" id="Compañia" value="{{$contactos -> Compañia}}">
</div>
<input class="btn btn-success" type="submit" value="Modificar">
<a class="btn btn-primary" href="{{url('contactos')}}">Regresar</a>

</form>

</div>
@endsection