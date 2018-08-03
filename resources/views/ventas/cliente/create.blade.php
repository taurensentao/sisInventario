@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Cliente</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>				
			</div>
			@endif
		</div>
	</div>
			{!!Form::open(array('url'=>'ventas/cliente','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}
	<div class="row">
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" required values="{{ old('nombre')}}" class="form-control" placeholder="Nombre...">
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="apellido">Apellido</label>
				<input type="text" name="apellido" required values="{{ old('apellido')}}" class="form-control" placeholder="Apellido...">
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="celular">Celular</label>
				<input type="text" name="celular" values="{{ old('celular')}}" class="form-control" placeholder="Celular...">
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="correo">Correo</label>
				<input type="text" name="correo" values="{{ old('correo')}}" class="form-control" placeholder="Correo...">
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="direccion">Dirección</label>
				<input type="text" name="direccion" 	values="{{ old('direccion')}}" class="form-control" placeholder="Dirección...">
			</div>
		</div>
	</div>	
	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">				
			<div class="form-group">
				<button class="btn btn-prymary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
	</div>		
	{!!form::close()!!}
@endsection