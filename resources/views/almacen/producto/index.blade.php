@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Productos <a href="producto/create"><button class= "btn btn-success">Nuevo</button></a></h3>
			@include('almacen.producto.search')
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>


						<th>ID</th>
						<th>Nombre</th>
						<th>Código</th>
						<th>Stock </th>
						<th>Categoria</th>
						<th>Descripcion</th>
						<th>Imagen </th>	
						<th>Precio</th>
						
						<th>Opciones</th>
					</thead>
					@foreach ($productos as $pro)
					<tr>
							@if($pro->visible === 1)
						<td>{{ $pro->id}}</td>
						<td>{{ $pro->nombre}}</td>
						<td>{{ $pro->codigo}}</td>
						<td>{{ $pro->tamano}}</td>	
						<td>{{ $pro->categoria}}</td>
						<td>{{ $pro->descripcion}}</td>
						<td>
							<img src="{{asset('imagenes/productos/'.$pro->imagen)}}" alt="{{ $pro->nombre}}" height="100px" width="100px" class="img-thumbnail"></img>	

						</td>
						<td>{{ $pro->precio}}</td>	
					
						@endif
						<td>
							<a href="{{URL::action('ProductoController@edit',$pro->id)}}"><button class="btn btn-info">Editar</button></a>
							<a href="" data-target="#modal-delete-{{$pro->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>	
					</tr>
					@include('almacen.producto.modal')
					@endforeach
				</table>
			</div>
			{{$productos->render()}} 
		</div>
		<div class="btn-group">
		<a href="#" class="btn btn-success">Importar</a>
		<button type="button" class="btn btn-info">Exportar</button>
		<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu" role="menu" id="export-menu">
			<li id="export-to-excel"><a href="{{URL::to('ex')}}">Exportar a Excel</a></li>
			<li class="divider"></li>
			<li ><a href="#">Otro</a></li>
		</ul>

	</div>
	</div>	
@endsection 