@extends('layouts.base')

@section('content')
<div class="row">
	<div class="col-12">
		<div>
			<h2>Crear Productos</h2>
		</div>
		<div>
			<a href="{{route('productos.index')}}" class="btn btn-primary">Volver</a>
			<a href="{{route('proovedores.index')}}" class="btn btn-primary">Gestion de Proveedores</a>
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

	<form action="{{route('productos.store')}}" method="POST">
		@csrf
		<div class="row">
			
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2">
				<div class="form-group">
					<strong>Codigo:</strong>
					<input type="text" name="codigo" class="form-control" id="" placeholder="Escriba el codigo del producto">
				</div>
				<div class="form-group">
					<strong>Nombre:</strong>
					<input type="text" name="nombre" class="form-control" id="" placeholder="Escriba el nombre del producto">
				</div>
				<div class="form-group">
					<strong>Descripcion:</strong>
					<textarea class="form-control" style="height:150px" name="descripcion" placeholder="Descripción del producto"></textarea>
				</div>
				<div class="form-group">
					<strong>Nombre del laboratorio:</strong>
					<input type="text" name="nom_lab" class="form-control" id="" placeholder="Escriba un nombre de contacto">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2">
				<div class="form-group">
					<strong>Estado:</strong>
					<select name="estado" id="" class="form-control" >
						<option value="1">Activo</option>
						<option value="0">Inactivo</option>
					</select>
				</div>
			</div>
			</div>
			
			
			<div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
				<button type="submit" class="btn btn-primary">Crear</button>
			</div>
		</div>
	</form>
</div>
@endsection