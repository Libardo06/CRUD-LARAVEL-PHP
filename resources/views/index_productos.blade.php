@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">Administracion de Productos</h2>
       </div>
       <div>
        <a href="{{route('productos.create')}}" class="btn btn-primary">Crear Producto</a>
        <a href="{{route('home')}}" class="btn btn-primary">Menu principal</a>

    </div>

</div>

@if (Session::get('success'))
<div class="alert alert-success mt-2">
    <strong>{{Session::get('success')}}</strong><br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="col-12 mt-4">
    <table class="table table-bordered text-white">
        <tr class="text-secondary">
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Estado</th>
            <th>Nombre del laboratorio</th>
            <th>Cantidad en inventario</th>
            <th class="text-center">Acción</th>
        </tr>
        @foreach ($productos as $producto)
        <tr>
            <td class="fw-bold">{{$producto->codigo}}</td>
            <td>{{$producto->nombre}}</td>
            <td>
               {{$producto->descripcion}}
           </td>
           <td>
            @if ($producto->Estado == 1)
            <span class="badge bg-success fs-6">Activo</span>
            @else 
            <span class="badge bg-warning fs-6">Inactivo</span>
            @endif
        </td>
        <td>{{$producto->nom_lab}}</td>
        <td>{{$producto->cantidad}}</td>

        <td>
            <a href="{{route('productos.edit', $producto)}}" class="btn btn-warning " >Editar</a>

            <form action="{{route('productos.destroy',$producto)}}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </td>
        @endforeach    
    </tr>
</table>
</div>
</div>
@endsection