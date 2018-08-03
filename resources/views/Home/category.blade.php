	

	  
					@foreach( $categoria as $cat )
						@if($cat->condicion==1)
                    	 <div data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></div>
               			@endif
               		@endforeach

				<!-- Wrapper for slides -->
			
	
								     
            @foreach($categoria as $category)
			
				@if($category->condicion==1)
						

								

									<div class="panel-heading" style="background-color: #6C3BD1"border: 2px solid #FF80DA;"role="tab" id="headingTwo">
										<h2 class="text-center"><a  style="color:white"role="button" href="{{route('productos.cat',$category->id)}}">
										{{$category->nombre}}
										</a></h2>
									</div>
								
									
								
							
       
				
					

				@endif
				@endforeach
           
 
	

	@yield('slide')