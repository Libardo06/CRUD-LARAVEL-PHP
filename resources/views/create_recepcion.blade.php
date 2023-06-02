@extends('layouts.base')

@section('content')
<div class="row">
	<div class="col-12">
		<div>
			<h2>Registro de recepciones</h2>
		</div>
		<div>
			<a href="{{route('recepcion.index')}}" class="btn btn-primary">Volver al historial</a>
			<a href="{{route('home')}}" class="btn btn-primary">Menu principal</a>
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

	<form action="{{route('recepcion.store')}}" method="POST">
		@csrf
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2">
				<div class="form-group">
					<strong>Eliga el producto:</strong>
					
					<select name="id_producto" id="" class="form-control" placeholder="">
						<option value="NULL">Seleccione</option>
						@foreach ($productos as $producto)
						@if ($producto->Estado ==1)
						<option value="{{$producto->id}}">{{$producto->nombre}}</option>
						@endif
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2">
				<div class="form-group">
					<strong>Eliga el proovedor:</strong>
					
					<select name="id_proovedor" id="" class="form-control" placeholder="">
						<option value="NULL">Seleccione</option>
						@foreach ($proovedores as $proovedor)
						<option value="{{$proovedor->id}}">{{$proovedor->Nombre}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2">
				<div class="form-group">
					<strong>Numero de factura:</strong>
					<input type="text" name="num_fact" class="form-control" id="" placeholder="Escriba el numero de factura">
				</div>
				<div class="form-group">
					<strong>Cantidad:</strong>
					<input type="number" name="cantidad" class="form-control" id="" placeholder="Digite la cantidad a ingresar">
				</div>
				<div class="form-group">
					<strong>Lote:</strong>
					<input type="text" name="lote" class="form-control" id="" placeholder="Escriba el numero o codigo de lote">
				</div>
				<div class="form-group">
					<strong>Registro INVIMA:</strong>
					<input type="text" name="reg_invima" class="form-control" id="" placeholder="Escriba el numero de registro INVIMA">
				</div>
				<div class="form-group">
					<strong>Fecha de vencimiento:</strong>
					<input type="date" name="fecha_vencimiento" class="form-control" id="" placeholder="">
				</div>
				<div class="form-group">
					<strong>Descripcion:</strong>
					<input type="text" name="descripcion" class="form-control" id="" placeholder="Escriba la descripcion del producto recepcionado">
				</div>
			</div>
			
			
			<div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
				<button type="submit" class="btn btn-primary">Registrar recepcion</button>
			</div>
		</div>
	</form>
</div>
@endsection