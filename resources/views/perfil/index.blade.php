@extends('layouts.app')
@section ('content')
<div class="section">
    <div class="main main-raised" style="background-color: #FED0F5">
            <div style="background-color: #FED0F5" class="container">
		                    <div class="col-md-12">

		<div class="col-md-12 col-md-offset-0">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					  <div class="col-md-12">
		                        <h2 style="color:#6C3BD1" class="text-center">SUS DATOS</h2>
		                    </div>
					<thead>
						<th style="color:white; background-color:#6C3BD1;border: 2px solid #FF80DA">ID</th>
						<th style="color:white; background-color:#6C3BD1;border: 2px solid #FF80DA">Nombre</th>
						<th style="color:white; background-color:#6C3BD1;border: 2px solid #FF80DA">Apellido</th>
						
						<th style="color:white; background-color:#6C3BD1;border: 2px solid #FF80DA">Correo</th>
					
					
					</thead>
					
					<tr>
						<td style="color:#6C3BD1; background-color:white ; border: 2px solid #FF80DA"><b>{{ Auth::user()->id}}</b></td>
						<td style="color:#6C3BD1; background-color:white ; border: 2px solid #FF80DA"><b>{{ Auth::user()->name}}</b></td>
						<td style="color:#6C3BD1; background-color:white ; border: 2px solid #FF80DA"><b>{{ Auth::user()->apellido}}</b></td>
						
						<td style="color:#6C3BD1; background-color:white ; border: 2px solid #FF80DA"><b>{{ Auth::user()->email}}</b></td>
					</tr>
				</table>
					
		    </div>           
		                    <div class="col-md-12 col-md-offset-0">
		                        <div class="table-responsive">
		                        <table class="table table-shopping">
		                            <thead>
		                                <tr>
		                                  
		                                    <th style="color:white; background-color:#6C3BD1;border: 2px solid #FF80DA">Nro de Orden</th>
		                                    <th style="color:white; background-color:#6C3BD1;border: 2px solid #FF80DA"class="text-right">rut</th>
		                                    
		                                    <th style="color:white; background-color:#6C3BD1;border: 2px solid #FF80DA"class="text-center">Dirección</th>
		                                    <th style="color:white; background-color:#6C3BD1;border: 2px solid #FF80DA"class="text-right">Comuna</th>
		                                    <th style="color:white; background-color:#6C3BD1;border: 2px solid #FF80DA"class="th-descriptiont">Región</th>
		                                    <th style="color:white; background-color:#6C3BD1;border: 2px solid #FF80DA"class="text-right">Teléfono</th>
		                                       <th style="color:white; background-color:#6C3BD1;border: 2px solid #FF80DA"class="text-right">Estado</th>
		                                    <th style="color:white; background-color:#6C3BD1;border: 2px solid #FF80DA"class="text-right">Total</th>
		                                </tr>

		                            </thead>
		                              <div class="col-md-12">
		                       		 <h2 style="color:#6C3BD1" class="text-center">HISTORIAL DE PEDIDOS</h2>
		                  			  </div>
		                             <tbody>

		                            	@foreach ($ordenes as $orden)
										@if ($orden->email==Auth::user()->email)
										<tr>
											
											<th style="color:#6C3BD1; background-color:white ; border: 2px solid #FF80DA"class="text">{{ $orden->id}}</th>
											<th  style="color:#6C3BD1; background-color:white ; border: 2px solid #FF80DA"class="text-right">{{ $orden->rut}}</th>
											
											<th  style="color:#6C3BD1; background-color:white ; border: 2px solid #FF80DA"class="text-right">{{ $orden->address}}</th>
										
										
											<th  style="color:#6C3BD1; background-color:white ; border: 2px solid #FF80DA"class="text-right">{{ $orden->comuna}}</th>
											<th  style="color:#6C3BD1; background-color:white ; border: 2px solid #FF80DA">{{ $orden->region}}</th>
											<th  style="color:#6C3BD1; background-color:white ; border: 2px solid #FF80DA"class="text-right">{{ $orden->telefono}}</th>
											
											@if ($orden->estado==1)
											<th  style="color:#6C3BD1; background-color:white ; border: 2px solid #FF80DA"class="text-right">Validado</th>
											@else
											<th  style="color:#6C3BD1; background-color:white ; border: 2px solid #FF80DA"class="text-right">Sin validar</th>
											@endif
										 	<th  style="color:#6C3BD1; background-color:white ; border: 2px solid #FF80DA"class="text-right" >{{$orden->total}}</th>
										    
										</tr>
										@endif
										@endforeach
		                               
		                                
		                                
		                            </tbody>
		                        </table>
		                      
						
								</div>
							</div>



			

		</div></div></div>
				<!-- END MENU -->
@endsection