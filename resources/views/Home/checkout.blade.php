@extends('layouts.app')
@section ('content')


<div class="section">
    <div class="main main-raised" style="background-color: #FED0F5">
            <div style="background-color: #FED0F5" class="container">
		                    <div class="col-md-12">
       
       			 
     		
       			 <div class="section">
     			 <div class="row">
       				 
			        <div class="col-md-8 order-md-1">
			          <h2 style="color:#6C3BD1" class="mb-3">Dirección de Envio</h2>
			          <form action="{{route('checkout')}}" method="post" id="checkout-form">
			            <div class="row">
				              <div class="col-md-6 mb-3">
				              	<div class="form-group">
				                <label style="color:#6C3BD1" for="firstName" >Nombre (*)</label>
				                <input style ="background-color: white;  border: 2px solid #FF80DA;" type="text" class="form-control" id="firstName" name="nombre"placeholder="" value="" required>
				               </div>
             				  </div>
            				 <div class="col-md-6 mb-3">
            				 	<div class="form-group">
				                <label style="color:#6C3BD1" for="apellido">Apellido (*)</label>
				                <input name="apellido" style ="background-color: white;   border: 2px solid #FF80DA;" type="text" class="form-control" id="apellido" placeholder="" value="" required>
				                </div>
				              </div>
          			  </div>
          			        <div class="row">
				              <div class="col-md-6 mb-3">
				              	<div class="form-group">
				                <label  style="color:#6C3BD1"for="rut" >Rut (*)</label>
				                <input name="rut" style ="background-color: white;   border: 2px solid #FF80DA;" type="text" class="form-control" id="rut" placeholder="" value="" required>
				                </div>
             				  </div>
            				 <div class="col-md-6 mb-3">
            				 	<div class="form-group">
				                <label style="color:#6C3BD1" for="telefono">Teléfono (*)</label>
				                <input name="telefono" style ="background-color: white;   border: 2px solid #FF80DA;" type="text" class="form-control" id="telefono" placeholder="" value="" required>
				                </div>
				              </div>
          			  </div>

			            <div class="mb-3">
			              <div class="form-group">
			              <label style="color:#6C3BD1" for="email">Dirección de correo electrónico(*) </label>
			              <input name="email" style ="background-color: white;   border: 2px solid #FF80DA;" type="email" class="form-control" id="email" placeholder="you@example.com">
			              </div>
			              <div style="color:#6C3BD1"class="invalid-feedback">
			               Por favor ingrese su Correo Electrónico.
			              </div>
			            </div>
			              <div class="mb-3">
			              <div class="form-group">
			              <label for="address">Dirección (*)</label>
			              <input name="address" style ="background-color: white;   border: 2px solid #FF80DA;" type="text" class="form-control" id="address" placeholder="Ejemplo #0123" required>
			              </div>
			              <div style="color:#6C3BD1" class="invalid-feedback">
			               Por favor ingrese el nombre y numero de la calle.
			              </div>
			            </div>
			            <div class="mb-3">
			              <div class="form-group">
			              <label style="color:#6C3BD1" for="addresopt">Dirección 2  <span style="color:#6C3BD1" class="text-muted">(Optional)</span></label>
			              <input name="addresopt" style ="background-color: white;   border: 2px solid #FF80DA;" type="text" class="form-control" id="addresopt" placeholder="Ejemplo2 #0123" >
			              </div>
			            </div>

			           
			            <div class="row">
				              <div class="col-md-6 mb-3">
				              	<div class="form-group">
				                <label style="color:#6C3BD1" for="region" >Región (*)</label>
				                <input name="region" style ="background-color: white;   border: 2px solid #FF80DA;" type="text" class="form-control" id="region" placeholder="" value="" required>
				                </div>
				                <div class="invalid-feedback">
				                 
				                </div>
             				  </div>
            				 <div class="col-md-6 mb-3">
            				 	<div class="form-group">
				                <label style="color:#6C3BD1" for="comuna">Comuna (*)</label>
				                <input name="comuna" style ="background-color: white;   border: 2px solid #FF80DA;" type="text" class="form-control" id="comuna" placeholder="" value="" required>
				                </div>
				                <div class="invalid-feedback">
				                 
				                </div>
				              </div>
				              
				              
          			    </div>
		       
    
			           
			            <hr class="mb-4">
			            <button style="background: #EE0C6C" class="btn btn-primary btn-lg btn-block" type="submit">RESERVAR</button>
			            {{csrf_field()}}

         			 </form>
        			</div>
        			<div class="col-md-4 order-md-2 mb-4">
	          				<h4 class="d-flex justify-content-between align-items-center mb-3" >
	           				 <span style="color:#6C3BD1" class="text-muted">Detalle de la Compra</span>
				            
				          	</h4>
				         	 <ul class="list-group mb-3">
				         	 	@foreach ($products->items as $pro)
					            <li class="list-group-item d-flex justify-content-between lh-condensed">

		              				<div>
					                <h6 style="color:#6C3BD1" class="my-0">Nombre del Producto:{{$pro['item']['nombre']}} <span class="badge">{{$pro['qty']}}</span></h6>
					                <small style="color:#6C3BD1" class="text-muted">Descripcion: {{$pro['item']['descripcion']}}</small>
					              </div>
					              <span style="color:#6C3BD1" class="text-muted">{{$pro['price']}}</span>
					            </li>
					            @endforeach
					            <li class="list-group-item d-flex justify-content-between">
					              <span style="color:#6C3BD1" >Total &dollar;</span>
					              <strong style="color:#6C3BD1">{{$total}}</strong>
					            </li>
				          </ul>

        			</div>
				</div>
				</div>
			</div>
		</div>
</div>


@endsection	