@extends ('layouts.app')
@section('content')


		
			@if(Session::has('cart'))
				
<div class="section">
    <div class="main main-raised" style="background-color: #FED0F5">
            <div style="background-color: #FED0F5" class="container">
		                    <div class="col-md-12">
		                        <h2 style="color:#6C3BD1" class="text-center">CARRO DE COMPRAS</h2>
		                    </div>
		                    <div class="col-md-12 col-md-offset-0">
		                        <div class="table-responsive">
		                        <table class="table table-shopping">
		                            <thead>
		                                <tr>
		                                    <th style="color:#6C3BD1"class="text-center"></th>
		                                    <th style="color:#6C3BD1">Producto</th>
		                                    <th style="color:#6C3BD1"class="th-description">Descripción</th>
		                                    <th style="color:#6C3BD1"class="th-description"></th>
		                                    <th style="color:#6C3BD1"class="text-right">Precio</th>
		                                    <th style="color:#6C3BD1"class="text-right">Cantidad</th>
		                                    <th style="color:#6C3BD1"class="text-right">Acumulado</th>
		                                    <th></th>
		                                </tr>
		                                	

									
								
		                            </thead>
		                            <tbody>
		                            	@foreach ($products->items as $pro)
		                                <tr>
		                                	
		                                    <td>	
										
								
												
		                                        <div class="img-container">
		                                            <img src="{{asset('imagenes/productos/'.$pro['item']['imagen'])}}" alt="{{$pro['item']['imagen']}}"style="height: 100px; width: 100px; class="img-thumbnail">
		                                        </div>
		                                    </td>
		                                    <td  class="td-name">
		                                        <a style="color:#6C3BD1" href="#jacket">{{$pro['item']['nombre']}}</a>
		                                        <br />
		                                    </td>
		                                    <td style="color:#6C3BD1">{{$pro['item']['descripcion']}}
		                                    </td>
		                                    <td>
		                                       
		                                    </td>
		                                    <td style="color:#6C3BD1" class="td-number">
		                                        <small>&dollar;</small>{{$pro['item']['precio']}}
		                                    </td>
		                                    <td style="color:#6C3BD1" class="td-number">
		                                        {{$pro['qty']}}
		                                        <div class="btn-group">
		                                            <button style="background-color:#6C3BD1" class="btn btn-round btn-info btn-xs">  <a href="{{route('product.reduceByOne',['id'=>$pro['item']['id']])}}"><i class="material-icons" style="color:white">remove</i></a> </button>	
	                                            <button style="background-color:#6C3BD1" class="btn btn-round btn-info btn-xs"> <a href="{{route('product.add',['id'=>$pro['item']['id']])}}"><i style="color:white " 	class="material-icons">add</i></a> </button>
		                                        </div>
		                                    </td>
		                                    <td style="color:#6C3BD1" class="td-number">
		                                        <small>&dollar;</small>{{$pro['item']['precio']*$pro['qty']}}
		                                    </td>
		                                    <td class="td-actions">
		                                         <a href="{{route('product.remove',['id'=>$pro['item']['id']])}}"> <button type="button" rel="tooltip" data-placement="left" title="Remove item" class="btn btn-simple">
		                                            <i style="color:#6C3BD1" class="material-icons">close</i>
		                                        </button></a>
		                                    </td>
		                                </tr>
		                                @endforeach
		                                <tr>
<td></td><td></td><td></td><td></td><td></td>
		                                    <td class="text-right">
		                                    <h4 style="color:#6C3BD1">   Total</h4>
		                                    </td>
		                                    <td style="color:#6C3BD1;"  class="td-price">
		                                        <small>&dollar;</small>{{$totalPrice}}
		                                    </td>
		                                    
		                                </tr>
		                            </tbody>
		                        </table>
		                       <h4 class="text-center"> <td colspan="3" class="text-right"> <a href="{{route('checkout')}}" style="color: white" ><button style="background-color:#6C3BD1;"  type="button" class="btn btn-info btn-round">Checkout <i class="material-icons">keyboard_arrow_right</i></button></a></td></h4>

		                        </div>

		                    </div>
		             
		           
					
				
							
			@else
							
<div class="section">
    <div class="main main-raised" style="background-color: #FED0F5">
            <div style="background-color: #FED0F5" class="container">
		                    <div class="col-md-12">
		                        <h2 style="color:#6C3BD1" class="text-center">SU CARRO DE COMPRAS ESTá VACíO</h2>
		                    </div>
		                    <div class="col-md-12 col-md-offset-0">
		                        <div class="table-responsive">
		                        <table class="table table-shopping">
		                            <thead>
		                                <tr>
		                                    <th class="text-center"></th>
		                                    <th style="color:#6C3BD1">Producto</th>
		                                    <th style="color:#6C3BD1"class="th-description">Descripción</th>
		                                    <th style="color:#6C3BD1"class="th-description"></th>
		                                    <th style="color:#6C3BD1"class="text-right">Precio</th>
		                                    <th style="color:#6C3BD1"class="text-right">Cantidad</th>
		                                    <th style="color:#6C3BD1"class="text-right">Acumulado</th>
		                                    <th></th>
		                                </tr>

		                            </thead>
		                             <tbody>
		                            
		                                <tr>
		                                	
		                                  
		                                </tr>
		                                
		                                <tr>
<td></td><td></td><td></td><td></td><td></td>
		                                    <td class="text-right">
		                                    <h4 style="color:#6C3BD1">   Total</h4>
		                                    </td>
		                                    <td style="color:#6C3BD1" class="td-price">
		                                        <small>&dollar;</small>0
		                                    </td>
		                                    
		                                </tr>
		                            </tbody>
		                        </table>
		                       <h4 class="text-center"> <td colspan="3" class="text-right"> <a href="productos" style="color: white" ><button style="background-color:#6C3BD1; " type="button" class="btn btn-info btn-round">Ver Productos <i class="material-icons">keyboard_arrow_right</i></button></a></td></h4>
						
					</div>
			</div>

			@endif

			<div class="row">
					<div class="col-md-12">	
						<ul class="list-group">

							
						</ul>
					</div>
				</div>

</div></div>

@endsection