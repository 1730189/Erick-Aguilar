@extends('layouts.app')

@section('content')

<div class="container">

<a href="{{url('productos/create')}}" class="btn btn-success">Agregar Producto</a>
<br/>
<br/>
<table class="table table-light table-hover">
    
    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio Compra</th>
            <th>Precio Venta</th>
            <th>SKU</th>
            <th>Codigo</th>
            <th>Re Order</th>
            <th>Acciones</th>
        </tr>
    </thead>
    
    <tbody>
    @foreach ($productos as $producto)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$producto->Nombre}}</td>
            <td>{{$producto->Descripcion}}</td>
            <td>{{$producto->Precio_compra}}</td>
            <td>{{$producto->Precio_venta}}</td>
            <td>{{$producto->SKU}}</td>
            <td>{{$producto->Codigo}}</td>
            <td>{{$producto->Re_order}}</td>
            <td>
            
            <a class="btn btn-warning" href="{{url('/productos/'.$producto->id.'/edit')}}">Editar</a>
            
             | 
            
            <form method="post" action="{{url('/productos/'.$producto->id)}}" style="display:inline">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('¿Borrar?');" class="btn btn-danger">Borrar</button>


            </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
@endsection