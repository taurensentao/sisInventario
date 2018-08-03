@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Producto</h3>
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
			{!!Form::open(array('url'=>'almacen/producto','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
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
				<label>Categoría</label>
				<select name = "categoria_id" class="form-control">
				 @foreach ($categorias as $cat)
				 	<option value="{{$cat->id}}">{{$cat->nombre}}</option>
				 @endforeach
				</select>
			</div>
		</div>		
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="codigo">Código(*)</label>
				<input type="text" name="codigo" required values="{{old('codigo')}}" class="form-control" placeholder="Código del producto...">
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="tamno">Cantidad(*)</label>
				<input type="text" name="tamano" required values="{{old('tamano')}}" class="form-control" placeholder="Stock del producto...">
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
				<label for="precio">Precio(*)</label>
				<input type="text" name="precio" values="{{old('precio')}}" class="form-control" placeholder="Precio del producto...">
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="imagen">Imagen (extensiones: jpeg,bmp,png.)</label>
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