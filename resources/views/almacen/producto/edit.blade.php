@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Producto: {{$producto->nombre}}</h3>
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
			{!!Form::model($producto,['method'=>'PATCH','route'=>['producto.update',$producto->id],'files'=>'true'])!!}
			{{Form::token()}}
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" required value="{{ $producto->nombre}}"" class="form-control">
					</div>
				</div>
			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12"> 
				<div class="form-group"> <label>Categoria</label>
					<select name="idcategoria" class="form-control">
			 		@foreach ($categorias as $cat) 
			 			@if ($cat->id==$producto->categoria_id) 
			 			<option value="{{$cat->id}}" selected>{{$cat->nombre}}</option> 
			 			@else 
			 			<option value="{{$cat->id}}">{{$cat->nombre}}</option> 
			 			@endif
					@endforeach 
					</select>
				</div> 
			</div>﻿	
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="codigo">Código</label>
						<input type="text" name="codigo" required value="{{$producto->codigo}}" class="form-control">
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="tamno">Cantidad</label>
						<input type="text" name="tamano" required value="{{$producto->tamano}}" class="	form-control">
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="descripcion">Descripción</label>
						<input type="text" name="descripcion" value="{{$producto->descripcion}}" class="form-control">
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="precio">Precio</label>
						<input type="text" name="precio" value="{{$producto->precio}}" class="form-control" >
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="imagen">Imagen</label>
						<input type="file" name="imagen" class="form-control">
						@if ($producto->imagen!="")
						<img src="{{asset('imagenes/productos/'.$producto->imagen)}}" height="300px" width="300px">
						@endif
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