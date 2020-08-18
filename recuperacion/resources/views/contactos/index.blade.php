@extends('layouts.app')

@section('content')

<div class="container">

<a href="{{url('contactos/create')}}" class="btn btn-success">Agregar Contacto</a>
<br/>
<br/>
<table class="table table-light table-hover">
    
    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>TIN</th>
            <th>Compañia</th>
            <th>Acciones</th>
        </tr>
    </thead>
    
    <tbody>
    @foreach ($contactos as $contacto)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$contacto->Nombre}} {{$contacto->Apellido}}</td>
            <td>{{$contacto->Correo}}</td>
            <td>{{$contacto->Telefono}}</td>
            <td>{{$contacto->Direccion}}</td>
            <td>{{$contacto->TIN}}</td>
            <td>{{$contacto->Compañia}}</td>
            <td>
            
            <a class="btn btn-warning" href="{{url('/contactos/'.$contacto->id.'/edit')}}">Editar</a>
            
             | 
            
            <form method="post" action="{{url('/contactos/'.$contacto->id)}}" style="display:inline">
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