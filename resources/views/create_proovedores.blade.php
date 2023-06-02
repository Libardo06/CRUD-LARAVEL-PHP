@extends('layouts.base')

@section('content')
<div class="row">
	<div class="col-12">
		<div>
			<h2>Crear Proveedor</h2>
		</div>
		<div>
			<a href="{{route('proovedores.index')}}" class="btn btn-primary">Volver</a>
			<a href="{{route('productos.index')}}" class="btn btn-primary ml-2">Gestion de productos</a>
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

	<form action="{{route('proovedores.store')}}" method="POST">
		@csrf
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2">
				<div class="form-group">
					<strong>Tipo de Identificacion:</strong>
					
					<select name="Tipo_id" id="" class="form-control" placeholder="Tipo de identificacion">
						<option value="Cedula de ciudadania">Cedula de ciudadania</option>
						<option value="NIT">NIT</option>
						<option value="Cedula de Extranjeria">Cedula de Extranjeria</option>
					</select>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2">
				<div class="form-group">
					<strong>Numero de identificacion:</strong>
					<input type="number" name="Num_id" class="form-control" id="" placeholder="Escriba su numero de identificacion">
				</div>
				<div class="form-group">
					<strong>Nombre o razón social:</strong>
					<input type="text" name="Nombre" class="form-control" id="" placeholder="Escriba su nombre completo o razon social">
				</div>
				<div class="form-group">
					<strong>Direccion:</strong>
					<input type="text" name="Direccion" class="form-control" id="" placeholder="Escriba su direccion">
				</div>
				<div class="form-group">
					<strong>Nombre de contacto:</strong>
					<input type="text" name="Nom_con" class="form-control" id="" placeholder="Escriba un nombre de contacto">
				</div>
				<div class="form-group">
					<strong>Telefono:</strong>
					<input type="number" name="Tel" class="form-control" id="" placeholder="Escriba su numero de telefono ya sea movil o fijo">
				</div>
			</div>
			
			
			<div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
				<button type="submit" class="btn btn-primary">Crear</button>
			</div>
		</div>
	</form>
</div>
@endsection