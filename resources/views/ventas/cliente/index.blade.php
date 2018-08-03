@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Clientes <a href="cliente/create"><button class= "btn btn-success">Nuevo</button></a></h3>
			@include('ventas.cliente.search')
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>ID</th>
						<th>Nombre</th>
						<th>Apellido</th>''
						<th>Celular </th>
						<th>Correo</th>
						<th>Direccion</th>
						<th>Opciones</th>
					</thead>
					@foreach ($personas as $per)
					<tr>
						<td>{{ $per->id}}</td>
						<td>{{ $per->nombre}}</td>
						<td>{{ $per->apellido}}</td>
						<td>{{ $per->celular}}</td>	
						<td>{{ $per->correo}}</td>
						<td>{{ $per->direccion}}</td>
						<td>
							<a href="{{URL::action('ClienteController@edit',$per->id)}}"><button class="btn btn-info">Editar</button></a>
							<a href="" data-target="#modal-delete-{{$per->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>	
					</tr>
					@include('ventas.cliente.modal')
					@endforeach
				</table>
			</div>
			{{$personas->render()}} 
		</div>
	</div>	
@endsection 