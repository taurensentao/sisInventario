@extends ('layouts.app')
  
@section ('content')


	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<div class="carousel slide" data-ride="carousel">

				<!-- Indicators -->
				<ol class="carousel-indicators">
					@foreach( $paneles as $panel )
                     <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                  	@endforeach
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					  @foreach( $paneles as $panel )
					<div class="item {{ $loop->first ? ' active' : '' }}">
						<div class="page-header"  style="background-size: cover; background-position: 50% 50%;  width:100% ; height:600px;">
							<img src="{{asset('imagenes/panel/'.$panel->imagen)}}" style="width:100%; height:600px;">

							<div class="container">
								<div class="row">
									<div class="col-md-6 text-left">
										<h1 class="title"></h1>
										<h4>{{ $panel->descripcion}}</h4>
										<br />

									</div>
								</div>
							</div>
				        </div>

					</div>
					  @endforeach

				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
					<i class="material-icons">keyboard_arrow_left</i>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
					<i class="material-icons">keyboard_arrow_right</i>
				</a>
			</div>
		</div>

    


                <!-- Indicators -->
             


	 <div id="cards" class="cd-section">
		    	<div class="section-gray">
		    		<!--     *********    BLOG CARDS     *********      -->

		    		<div class="cards">

		    			<div class="container">
		        			<div class="title">
		            			<h2>Nuevos Productos</h2>
		    			
		        			</div>
		    				<div class="row">
		    		<div class="col-md-12">
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
		    				</div>
		    			</div>

		    		</div>
	</div>



<footer class="footer footer-black" style="color:#6F2385">
						<div class="container">

							<div class="content">
								<div class="row">
									<div class="col-md-4">
										<h5>About Us</h5>
										<p>"Bienvenidos a Mamá Secret" nuestra tienda online se dedica a la venta de sostenes de lactancia, poleras, collares, vestidos, polerón, entre otras cositas. </p>
									</div>

									<div class="col-md-4">
										<h5>Contactos</h5>
										<div class="social-feed">
											<div class="feed-line">
												<i class="fa fa-envelope"></i>
												<p>n.araos.c@gmail.com</p>
											</div>
											<div class="feed-line">
												<i class="fa fa-facebook"></i>
												<p>https://www.facebook.com/Mamasecretarica/</p>
											</div>
											<div class="feed-line">
											<i class="material-icons">
											settings_cell
											</i>
												<p>Teléfono: 09 8534 3622</p>
											</div>
										</div>
									</div>

									
							</div>


						

							<div class="copyright pull-right">
								Copyright &copy; <script>document.write(new Date().getFullYear())</script>Mamá Secret 
							</div>
						</div>
					</footer>
@endsection