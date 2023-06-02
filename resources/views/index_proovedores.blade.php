@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">Administracion de Proveedores</h2>
        </div>
        <div>
            <a href="{{route('proovedores.create')}}" class="btn btn-primary">Crear proveedor</a>
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
                <th>Tipo de identificación</th>
                <th>Numero de identificación</th>
                <th>Nombre o razón social</th>
                <th>Direccion</th>
                <th>Nombre de contacto</th>
                <th>celular de contacto</th>
                <th>Acciones</th>
            </tr>
            @foreach ($proovedores as $proovedor)

            <tr>
                <td class="fw-bold">{{$proovedor->Tipo_id}}</td>
                <td>{{$proovedor->Num_id}}</td>
                <td>
                    {{$proovedor->Nombre}}
                </td>
                <td>
                    {{$proovedor->Direccion}}
                </td>
                <td>{{$proovedor->Nom_con}}</td>
                <td>{{$proovedor->Tel}}</td>
                <td>
                    <a href="{{route('proovedores.edit', $proovedor)}}" class="btn btn-warning">Editar</a>

                    <form action="{{route('proovedores.destroy',$proovedor)}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {{$proovedores->links()}}
    </div>
</div>
@endsection