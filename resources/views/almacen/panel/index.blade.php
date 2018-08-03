@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Imagenes del Panel <a href="panel/create"><button class= "btn btn-success">Nuevo</button></a></h3>
			@include('almacen.panel.search')
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>


						<th>ID</th>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Imagen </th>	
						<th>Visible</th>
						
					</thead>
					@foreach ($panels as $panel)
					<tr>
						<td>{{ $panel->id}}</td>
						<td>{{ $panel->nombre}}</td>
						<td>{{ $panel->descripcion}}</td>
						<td>

							<img src="{{asset('imagenes/panel/'.$panel->imagen)}}" alt="{{ $panel->nombre}}" onmouseover="this.width=500;this.height=400;" onmouseout="this.width=200;this.height=150;" width="200" height="150"  class="img-thumbnail"></img>	

						</td>
						
						@if($panel->condicion == 1)
						<td>Activo</td>
						@else
						<td>Inactivo</td>
						@endif
						<td>
							
							<a href="" data-target="#modal-delete-{{$panel->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>	
					</tr>
					@include('almacen.panel.modal')
					@endforeach
				</table>
			</div>
			{{$panels->render()}} 
		</div>
		
	</div>	
@endsection 