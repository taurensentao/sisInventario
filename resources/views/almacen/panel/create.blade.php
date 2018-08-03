@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Panel</h3>
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
			{!!Form::open(array('url'=>'almacen/panel','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
			{{Form::token()}}
	<div class="row">
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="nombre">Nombre(*)</label>
				<input type="text" name="nombre" required values="{{ old('nombre')}}" class="form-control" placeholder="Nombre...">
			</div>
		</div>
		
		
		
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="descripcion">Descripción</label>
				<input type="text" name="descripcion" values="{{old('descripcion')}}" class="form-control" placeholder="Descripcion del Producto...">
			</div>
		</div>
		
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="imagen">Imagen</label>
				<input type="file" name="imagen" class="form-control">
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