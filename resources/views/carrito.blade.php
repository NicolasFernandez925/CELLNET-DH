@extends('layouts.app')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('css/main_styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/cart_styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/cart_responsive.css')}}">
@endsection

@section('nav')
     @include('partials.nav_general')
@endsection

@section('content')
     
	<!-- Cart -->

	<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">							
					@if($productosUser[0]->productos->count() != null)
						<div class="cart_container">
							<h4 class="mb-3 item-producto">{{$productosUser[0]->productos->count()}} item(s) en el carrito</h4>
							<hr>
							<div class="cart_title">Carrito de compras</div>
							<div class="cart_items">
								<ul class="cart_list">						
										@foreach ($productosUser[0]->productos as $producto)	
											<input type="hidden" value="{{$producto->id}}" id="id_producto">	
											<li class="cart_item clearfix">
												<div class="cart_item_image"> 
													<a href="{{ route('show.product',[$producto->id, str_slug($producto->modelo, '-') ]) }}">
														<img src="{{asset('images/imagenes-productos/'.$producto->imagen)}}" alt="">
													</a> 
												</div>
												<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
													<div class="cart_item_name cart_info_col">
														<div class="cart_item_title">Modelo</div>
													<div class="cart_item_text">{{$producto->modelo}}</div>
												</div>
												@if($producto->cantidad != 0)
												<div class="cart_item_quantity cart_info_col">
													<div class="cart_item_title">cantidad</div>
													<div class="input-group  cantidad">												
														<select class="custom-select " class="cant-prod"  id="inputGroupSelect01" name="cant-prod">
															<option selected>Cantidad...</option>
																@for ($i = 1; $i <= $producto->cantidad; $i++)																							  
																	<option value="{{$i}}" {{($producto->pivot->cantidad == $i) ? 'selected' : ''}}>{{$i}}</option>																	
																@endfor
														</select>
													</div>
												</div>
												@else
													<div class="cart_item_quantity cart_info_col">
														<div class="cart_item_title">cantidad</div>
															<p class="text-danger">No hay stock disponible</p>
													</div>
												@endif
												<div class="cart_item_price cart_info_col">
													<div class="cart_item_title">Precio</div>
														<div class="cart_item_text">$ {{$producto->precio}}</div>
													</div>
													<div class="cart_item_price cart_info_col">
														<div class="cart_item_title">Descuento</div>
														<div class="cart_item_text red">{{($producto->oferta) ? '%'. $producto->oferta : '-'}}</div>
													</div>
														<div class="cart_item_total cart_info_col">
														<div class="cart_item_title ">Sub Total</div>
														<div class="cart_item_text sub-total">${{($producto->oferta != 0) ? presentPrice($producto->precio,$producto->oferta ) * 
															$producto->pivot->cantidad : $producto->precio *  $producto->pivot->cantidad}}
														</div>
													</div>
													<div class="cart_item_total cart_info_col">
														<div class="cart_item_title"></div>
														<form action="{{route('cart.product.delete',$producto->id)}}" method="POST">
															{{ csrf_field() }}
															{{ method_field('DELETE') }}
														    <button class="btn-borrar" type="submit"><div class="cart_item_text"><i class="fas fa-trash-alt"></i></div></button>
														</form>
													</div>
												</div>
											</li>											
										@endforeach																															
								</ul>
							</div>						
							<!-- Order Total -->		
							<div class="order_total">
								<div class="order_total_content text-md-right">
									<div class="order_total_title">Total:</div>
									<div class="order_total_amount total-precio">$ {{$totalPriceProducts}}</div>
								</div>
							</div>								
							<div class="cart_buttons">
								<a class="btn-compra" href="{{route('checkout.show')}}">Realizar compra</a>
							</div>							
						</div>
						@else
							<img class="img-carrito" src="{{asset('images/carrito.png')}}" alt="">
							<p class="mt-4">No hay productos en el carrito <a class="no-product" href="{{route('shop')}}">Seguir comprando</a></p>						
					@endif				
				</div>
			</div>
		</div>
	</div>

	<a class="ir-arriba" >
		<span class="fa-stack">
		  <i class="fa fa-circle fa-stack-2x"></i>
		  <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
		</span>
	</a>
@endsection

@section('footer')
	
@endsection

@section('script')
	@include('partials.script');
	<script src="{{asset('js/custom.js')}}"></script>

	<script>
		//Por hacer un fetch 
		let productoId = document.querySelector('#id_producto');

	</script>

@endsection
