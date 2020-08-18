@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ url('/productos')}}" class="form-horizontal" method="post">
{{ csrf_field() }}

<div class="form-group">
<label class="control-label" for="Nombre">{{'Nombre'}}</label>
<input class="form-control" type="text" name="Nombre" id="Nombre" value="">
</div>

<div class="form-group">
<label class="control-label" for="Descripcion">{{'Descripcion'}}</label>
<input class="form-control" type="text" name="Descripcion" id="Descripcion" value="">
</div>

<div class="form-group">
<label class="control-label" for="Precio_Compra">{{'Precio Compra'}}</label>
<input class="form-control" type="text" name="Precio_Compra" id="Precio_Compra" value="">
</div>

<div class="form-group">
<label class="control-label" for="Precio_Venta">{{'Precio Venta'}}</label>
<input class="form-control" type="text" name="Precio_Venta" id="Precio_Venta" value="">
</div>

<div class="form-group">
<label class="control-label" for="SKU">{{'SKU'}}</label>
<input class="form-control" type="text" name="SKU" id="SKU" value="">
</div>

<div class="form-group">
<label class="control-label" for="Codigo">{{'Codigo'}}</label>
<input class="form-control" type="text" name="Codigo" id="Codigo" value="">
</div>

<div class="form-group">
<label class="control-label" for="Re_order">{{'Re_order'}}</label>
<input class="form-control" type="number" name="Re_order" id="Re_order" value="">
</div>
<input class="btn btn-success" type="submit" value="Agregar">
<a class="btn btn-primary" href="{{url('productos')}}">Regresar</a>

</form>

</div>
@endsection