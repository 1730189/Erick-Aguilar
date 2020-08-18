@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{url('/productos/'. $productos->id)}}" method="post">
{{ csrf_field()}}
{{method_field('PATCH')}}

<div class="form-group">
<label class="control-label" for="Nombre">{{'Nombre'}}</label>
<input class="form-control" type="text" name="Nombre" id="Nombre" value="{{$productos -> Nombre}}">
</div>

<div class="form-group">
<label class="control-label" for="Descripcion">{{'Descripcion'}}</label>
<input class="form-control" type="text" name="Descripcion" id="Descripcion" value="{{$productos -> Descripcion}}">
</div>

<div class="form-group">
<label class="control-label" for="Precio_compra">{{'Precio Compra'}}</label>
<input class="form-control" type="text" name="Precio_compra" id="Precio_compra" value="{{$productos -> Precio_compra}}">
</div>

<div class="form-group">
<label class="control-label" for="Precio_venta">{{'Precio Venta'}}</label>
<input class="form-control" type="text" name="Precio_venta" id="Precio_venta" value="{{$productos -> Precio_venta}}">
</div>

<div class="form-group">
<label class="control-label" for="SKU">{{'SKU'}}</label>
<input class="form-control" type="text" name="SKU" id="SKU" value="{{$productos -> SKU}}">
</div>

<div class="form-group">
<label class="control-label" for="Re_order">{{'Re order'}}</label>
<input class="form-control" type="number" name="Re_order" id="Re_order" value="{{$productos -> Re_order}}">
</div>

<input class="btn btn-success" type="submit" value="Modificar">
<a class="btn btn-primary" href="{{url('productos')}}">Regresar</a>

</form>

</div>
@endsection