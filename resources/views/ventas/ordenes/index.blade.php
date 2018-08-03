@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Lista de órdenes<a href=""></a></h3>
			
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Nro de Orden</th>
						<th>Rut</th>
						<th>Nombre </th>
						<th>Apellido</th>
						<th>Dirección</th>
						<th>Email</th>
						<th>Comuna</th>
						<th>Región</th>
						<th>Teléfono
			
						<th>Total</th>
						<th>Estado</th>
					</thead>
					@foreach ($ordenes as $orden)
					<tr>
						<td>{{ $orden->id}}</td>
						<td>{{ $orden->rut}}</td>
						<td>{{ $orden->nombre}}</td>	
						<td>{{ $orden->apellido}}</td>
						<td>{{ $orden->address}}</td>
						<td>{{ $orden->email}}</td>
					
						<td>{{ $orden->comuna}}</td>
						<td>{{ $orden->region}}</td>
						<td>{{ $orden->telefono}}</td>
						<td>{{$orden->total}}</td>
						@if ($orden->estado==1)
						<td>Validado</td>
						@else
						<td>Sin validar</td>
						@endif
					 
					    <td>
							<a href="{{URL::action('OrdenController@edit',$orden->id)}}"><button class="btn btn-info">Validar</button></a>
						</td>	
					
					@endforeach
				</table>
				 {{$ordenes->render()}} 
			</div>

		</div>
	</div>	
@endsection 