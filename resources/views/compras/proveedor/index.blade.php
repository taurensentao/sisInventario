@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Proveedores<a href="proveedor/create"><button class= "btn btn-success">Nuevo</button></a></h3>
			@include('compras.proveedor.search')
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>ID</th>
						<th>Nombre</th>
						<th>Celular </th>
						<th>Correo</th>
						<th>Direccion</th>
						<th>Opciones</th>
					</thead>
					@foreach ($proveedores as $per)
					<tr>
						<td>{{ $per->id}}</td>
						<td>{{ $per->nombre}}</td>
						<td>{{ $per->celular}}</td>	
						<td>{{ $per->correo}}</td>
						<td>{{ $per->direccion}}</td>
						<td>
							<a href="{{URL::action('ProveedorController@edit',$per->id)}}"><button class="btn btn-info">Editar</button></a>
							<a href="" data-target="#modal-delete-{{$per->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>	
					</tr>
					@include('compras.proveedor.modal')
					@endforeach
				</table>
			</div>
			{{$proveedores->render()}} 
		</div>
	</div>	
@endsection 