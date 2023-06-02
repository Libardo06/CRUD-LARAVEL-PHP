@extends('layouts.base')

@section('content')
<div class="row">
	<div class="col-12">
		<div>
			<h2>Editar Proveedor</h2>
		</div>
		<div>
			<a href="{{route('proovedores.index')}}" class="btn btn-primary">Volver</a>
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

	<form action="{{route('proovedores.update', $proovedores)}}" method="POST">
		@csrf
		@method('PUT')
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2">
				<div class="form-group">
					<strong>Tipo de Identificacion:</strong>
					
					<select name="Tipo_id" id="" class="form-control" placeholder="Tipo de identificacion">
						<option value="Cedula de ciudadania"  @selected("Cedula de ciudadania" == $proovedores->Tipo_id)>Cedula de ciudadania</option>
						<option value="NIT" @selected("NIT" == $proovedores->Tipo_id)>NIT</option>
						<option value="Cedula de Extranjeria" @selected("Cedula de Extranjeria" == $proovedores->Tipo_id)>Cedula de Extranjeria</option>
					</select>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2">
				<div class="form-group">
					<strong>Numero de identificacion:</strong>
					<input type="text" name="Num_id" class="form-control" id="" placeholder="Escriba su numero de identificacion" value="{{$proovedores->Num_id}}">
				</div>
				<div class="form-group">
					<strong>Nombre o razón social:</strong>
					<input type="text" name="Nombre" class="form-control" id="" placeholder="Escriba su nombre completo o razon social" value="{{$proovedores->Nombre}}">
				</div>
				<div class="form-group">
					<strong>Direccion:</strong>
					<input type="text" name="Direccion" class="form-control" id="" placeholder="Escriba su direccion" value="{{$proovedores->Direccion}}">
				</div>
				<div class="form-group">
					<strong>Nombre de contacto:</strong>
					<input type="text" name="Nom_con" class="form-control" id="" placeholder="Escriba un nombre de contacto" value="{{$proovedores->Nom_con}}">
				</div>
				<div class="form-group">
					<strong>Telefono:</strong>
					<input type="text" name="Tel" class="form-control" id="" placeholder="Escriba su numero de telefono ya sea movil o fijo" value="{{$proovedores->Tel}}">
				</div>
			</div>
			
			
			<div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
				<button type="submit" class="btn btn-primary">Actualizar</button>
			</div>
		</div>
	</form>
</div>
@endsection