@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">Historial de Recepciones</h2>
        </div>
        <div>
            <a href="{{route('recepcion.create')}}" class="btn btn-primary">Registra nueva recepcion de Medicamentos</a>
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

    <div class="col-14 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>Fecha y Hora de recepcion</th>
                <th>Codigo del Producto</th>
                <td>Nombre del Producto</td>
                <th>Identificacion del Proveedor</th>
                <td>Nombre del proveedor</td>
                <th>Numero de factura</th>
                <th>Cantidad</th>
                <th>Lote</th>
                <th>Registro INVIMA</th>
                <th>Fecha de vencimiento</th>
                <th>Descripcion</th>
            </tr>
                   
            @foreach ($recepciones as $recepcion)
                    
            <tr>
                <td class="fw-bold">{{$recepcion->created_at}}</td>
                <td>{{$producto::find($recepcion->id_producto)->codigo}}</td>
                <td>{{$producto::find($recepcion->id_producto)->nombre}}</td>
                <td>{{$proovedor::find($recepcion->id_proovedor)->Num_id}}</td>
                <td>{{$proovedor::find($recepcion->id_proovedor)->Nombre}}</td>
                <td>{{$recepcion->num_fact}}</td>
                <td>{{$recepcion->cantidad}}</td>
                <td>{{$recepcion->lote}}</td>
                <td>{{$recepcion->reg_invima}}</td>
                <td>{{$recepcion->fecha_vencimiento}}</td>
                <td>{{$recepcion->descripcion}}</td>
            </tr>
                 

               
            @endforeach
        </table>
        {{$recepciones->links()}}
    </div>
</div>
@endsection