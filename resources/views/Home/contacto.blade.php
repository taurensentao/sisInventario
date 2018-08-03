@extends ('layouts.app')
@section('content')
    	<div class="section">
	<div class="main main-raised" style="background-color: #FED0F5">
			<div style="background-color: #FED0F5" class="container">
       

       			
     			 <div class="row">
       				 
			        <div class="col-md-8 order-md-1">
			          <h2 style="color:#6C3BD1" class="text-center mb-3">Envianos un Mensaje</h2>
			          <form action="{{route('checkout')}}" method="post" id="checkout-form">
			            <div class="row">
				              <div class="col-md-6 mb-3">
				              	<div class="form-group">
				                <label style="color:#6C3BD1"  for="firstName" >Nombre (*)</label>
				                <input style =" background-color:white ; border: 2px solid #FF80DA;" type="text" class="form-control" id="firstName" name="nombre"placeholder="" value="" required>
				               </div>
             				  </div>
            				 <div class="col-md-6 mb-3">
            				 	<div class="form-group">
				                <label style="color:#6C3BD1" for="apellido">Apellido (*)</label>
				                <input name="apellido" style ="  background-color:white ;border: 2px solid #FF80DA;" type="text" class="form-control" id="apellido" placeholder="" value="" required>
				                </div>
				              </div>
          			  </div>
          			        <div class="row">
          			        	<div class="col-md-6 mb-3">
				              <div class="form-group">
					              <label style="color:#6C3BD1" for="email">Dirección de correo electrónico(*) </label>
					              <input name="email" style ="  background-color:white ;border: 2px solid #FF80DA;" type="email" class="form-control" id="email" placeholder="you@example.com">
					              </div>
					          </div>
            				 <div class="col-md-6 mb-3">
            				 	<div class="form-group">
				                <label style="color:#6C3BD1" for="telefono">Telefono (*)</label>
				                <input name="telefono" style =" background-color:white ; border: 2px solid #FF80DA;" type="text" class="form-control" id="telefono" placeholder="" value="" required>
				                </div>
				              </div>
          			  		</div>

			       		<div class="form-group">
								<label style="color:#6C3BD1" for="mensaje">Tu mensaje</label>
								<textarea  style =" background-color:white ; border: 2px solid #FF80DA"name="message" class="form-control" id="message" rows="6"></textarea>
							</div>
			           
			            <hr class="mb-4">
			            <button style="background-color:#6C3BD1" class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
			            {{csrf_field()}}

         			 </form>
        			</div>
        			<div class="col-md-4 order-md-2 mb-4 ">
        				
	          				<h4 class="text-center" class="d-flex justify-content-between align-items-center mb-3" >
	           				 <span  style="color:#6C3BD1" > Información de contactos</span>
				            
				          	</h4>
				         	 <ul class="list-group mb-3">
				         	 
					            <li class="list-group-item d-flex justify-content-between lh-condensed">

		              				<div>
					                <i class="material-icons">phone<h6 class="my-0">09 8534 3622</h6></i>
					               
					              </div>
					              
					            </li>

					            <li class="list-group-item d-flex justify-content-between lh-condensed">

		              				<div>
					                <i class="material-icons">email <h6 class="my-0">n.araos.c@gmail.com</h6></i>
					               
					              </div>
					              
					            </li>
					               <li class="list-group-item d-flex justify-content-between lh-condensed">

		              				<div>
		              				<button href="facebook" class="btn btn-just-icon btn-round btn-facebook">
                                        <i class="fa fa-facebook"></i>
                                    
					                 
					               </button>
					               <h8><a href="facebook"></h8>https://www.facebook.com/Mamasecretarica/</a></h8
					                <h6 class="my-0"></h6>
					              </div>
					              
					            </li>
					     
					         
				          </ul>


        			</div>
        		</div></div></div>
@endsection