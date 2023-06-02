@extends('layouts.base')

@section('content')
<div class="row">
	<div class="col-12">
		<div>
			<h2>Actualizar Productos</h2>
		</div>
		<div>
			<a href="{{route('productos.index')}}" class="btn btn-primary">Volver</a>
		</div>
	</div>

	@if ($errors->any())
	<div class="alert alert-danger mt-2">
		<strong>Oh no!</strong> Algo salió mal...<br><br>
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif

	<form action="{{route('productos.update', $producto)}}" method="POST">
		@csrf
		@method('PUT')
		<div class="row">
			
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2">
				<div class="form-group">
					<strong>Codigo:</strong>
					<input type="text" name="codigo" class="form-control" id="" placeholder="Escriba el codigo del producto" value="{{$producto->codigo}}">
				</div>
				<div class="form-group">
					<strong>Nombre:</strong>
					<input type="text" name="nombre" class="form-control" id="" placeholder="Escriba el nombre del producto" value="{{$producto->nombre}}">
				</div>
				<div class="form-group">
					<strong>Descripcion:</strong>
					<textarea class="form-control" style="height:150px" name="descripcion" placeholder="Descripción del producto" >{{$producto->descripcion}}</textarea>
				</div>
				<div class="form-group">
					<strong>Nombre del laboratorio:</strong>
					<input type="text" name="nom_lab" class="form-control" id="" placeholder="Escriba un nombre de contacto" value="{{$producto->nom_lab}}">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2">
				<div class="form-group">
					<strong>Estado:</strong>
					<select name="estado" id="" class="form-control" >
						<option value="null" @selected("null" == $producto->Estado)>Seleccione</option>
						<option value="1" @selected("1" == $producto->Estado)>Activo</option>
						<option value="0" @selected("0" == $producto->Estado)>Inactivo</option>
					</select>
				</div>
			</div>
			</div>
			
			
			<div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
				<button type="submit" class="btn btn-primary">Actualizar</button>
			</div>
		</div>
	</form>
</div>
@endsection