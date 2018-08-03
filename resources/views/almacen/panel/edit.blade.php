@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Panel: {{$panel->nombre}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>				
			</div>
			@endif

			{!!Form::model($panel,['method'=>'PATCH','route'=>['panel.update',$panel->id]])!!}
			{{Form::token()}}
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" value="{{$panel->nombre}}" placeholder="Nombre...">
			</div>
			<div class="form-group">
				<label for="nombre">Descripcion</label>
				<input type="text" name="descripcion" class="form-control"  value="{{$panel->descripcion}}" placeholder="Descripcion...">
			</div>
			<div class="form-group">
						<label for="imagen">Imagen</label>
						<input type="file" name="imagen" class="form-control">
						@if ($panel->imagen!="")
						<img src="{{asset('imagenes/panel/'.$panel->imagen)}}" height="300px" width="300px">
						@endif
					</div>
							
				<div class="form-group">
					<button class="btn btn-prymary" type="submit">Guardar</button>
					<button class="btn btn-danger" type="reset">Cancelar</button>
				</div>
			</div>	
			</div>
			
			{!!form::close()!!}
		</div>		
	</div>
@endsection