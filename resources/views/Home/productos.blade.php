@extends ('layouts.app')
@section ('content')


<div class="section">
    <div class="main main-raised" style="background-color: #FED0F5">
            <div style="background-color: #FED0F5" class="container">
		                    
       
		            	@if(Session::has('success'))
		            
		            	<div class="" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
											<i class="material-icons">clear</i>
										</button>
										<h4 class="modal-title">Aviso</h4>
									</div>
									<div class="modal-body">
										<p>
											Se han reservado con éxito sus productos, se le enviara un correo cuando se apruebe su pago.
										</p>
									</div>
									<div class="modal-footer">
										
										<a href="/productos" ><button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button></a>
									</div>
								</div>
	
		            		</div>
		            	</div>
		            	@endif
		            </div>
				 <div class="section">
     			 <div class="row">
       				 
			      <div class="col-md-12">
						
						
									
								<div class="col-md-3 mb-4">
									 	<div class="card">
					   						@include ('Home.category')
											@section ('slide')
											@endsection
										</div>

								</div>

			   						<div class="col-md-9">
			   						@foreach ($productos as $pro)
			   						
			   						 <div class="col-md-4">
			   						 				   							<div class="card card-blog " style="background-color: #FDE4F4">
			   								 <div class="card-image" style="background-color: #FF00A8;height: 400px; width: auto;">
			   									 <a href="#">
			   										 <img src="{{asset('imagenes/productos/'.$pro->imagen)}}" alt="{{ $pro->nombre}} " class="img-thumbnail" style="height: 400px; width: auto;">	
			   									 </a>
			   								 </div>

			   								 <div class="card-content" style="background-color: #FDE4F4"">
			   									 
			   										 <h4 class="category text-warning">Nombre del producto: {{$pro->nombre}}	</h4>
			   									
			   									 <h4 class="card-title">
			   										Descripción: {{ $pro->descripcion}}
			   									 </h4>
			   									 <div class="footer">
													 <div class="price-container">
													 	<span class="price"> Precio: &dollar; {{ $pro->precio}}</span>
														
													 </div>
													
			   										 <a  style="background: #6C3BD1" href="{{route('producto.addToCart',['id'=>$pro->id])}}" class= "btn btn-succes pull-right" role="button"> Agregar</a>
			   										  <p class="description">
				   											<span class="stock"> Cantidad {{ $pro->tamano}}</span>
				   									 </p>
			   									 </div>
			   							    </div>

			   							</div>
			   							</div>
			   					 					
			   						@endforeach  				
									 </div>
									  <div class="text-center">{{$productos->render()}} </div>	
					</div>
				</div></div>
	

 
@endsection
                        
  

    <!-- Scripts -->
  