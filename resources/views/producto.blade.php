@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/product_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/product_responsive.css')}}">

@endsection

@section('css-extra')

@endsection

@section('nav')
     @include('partials.nav_general')
@endsection


@section('content')

<!-- Single Product -->

<div class="single_product">
		<div class="container">
			<div class="menu-pan">
			<a href="{{route('index')}}">Home</a>
				<i class="fa fa-chevron-right breadcrumb-separator mr-1 ml-1"></i>
				<span><a href="{{route('shop')}}">Shop</a></span>
				<i class="fa fa-chevron-right breadcrumb-separator  mr-1 ml-1"></i>
				<span>{{textSeeMore($producto->modelo,18)}}</span>
			</div>
			<div class="row">

				<!-- Images -->
			
				<div class="col-lg-2 order-lg-1 order-2">
					<ul class="image_list">
					@foreach(json_decode($producto->imagenes, true) as $img)
						<li data-image="{{asset('images/imagenes-productos/'.$img)}}"><img src="{{asset('images/imagenes-productos/'.$img)}}" alt=""></li>
					@endforeach
					
					</ul>
				</div>		
				<!-- Selected Image -->
				<div class="col-lg-5 order-lg-2 order-1">
					<div class="image_selected"><img src="{{asset('images/imagenes-productos/'.$producto->imagen)}}" alt=""></div>
				</div>
				

				<!-- Description -->
				<div class="col-lg-5 order-3">
					<div class="product_description">
						<div class="product_category">{{$producto->categoria->nombre}}</div>
						<div class="product_name-view">{{$producto->modelo}}</div>
						<div class="product_text"><p></p></div>
						<div class="order_info flex-row">
							<form action="{{route('cart.add.product',$producto->id)}}" method="POST">
								{{ csrf_field() }}
								{{ method_field('POST') }}
								
								<div class="clearfix mb-3" style="z-index: 1000;">
									<!-- Product Quantity -->
									<div class="product_cantidad">
										<span>Cantidad: </span>				
										<div class="input-group  cantidad">											
											<select class="custom-select " name="cantidad" id="inputGroupSelect01" >
												<option value="1">Cantidad</option>
												@for ($i = 1; $i <= $producto->cantidad; $i++)										  
												    <option value="{{$i}}">{{$i}}</option>
												@endfor
											</select>
											@if( $producto->cantidad == 0 )
												<p class="text-danger no-stock">No hay stock</p>
											@endif
										</div>								
									</div>
								</div>
								@if($producto->oferta != '')
									<div class="mt-3 price-before">Precio anterior <div class="product_price-desc">$ {{number_format($producto->precio)}}</div></div>
									<span class="mr-2 text-price-preset">Precio en efectivo</span>
									<div class="product_price">	$ {{presentPrice($producto->precio,$producto->oferta)}}</div>
								@else
									<span class="mr-2 text-price">Precio </span>
									<div class="product_price">	$ {{$producto->precio}}</div>	
								@endif
						
								<div class="button_container">
									@if($producto->cantidad == 0)
									<button type="button" class="button cart_button" data-toggle="popover" title="{{textSeeMore($producto->modelo,18)}}" data-content="No hay productos en stock">Añadir al carrito</button>
									@else

									<button type="submit" class="button cart_button">Añadir al carrito</button>	
									@endif
								</div>
								
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Description producto-->

	<section class="info-producto py-5">
		<div class="container">
			<div class="row">
				<div class="col col-lg-12">
					<div class="card">
						<div class="card-header">
							<h3 class="mt-4 mb-4 title-descripcion">Descripción</h3>		
							<p class="text-descripcion">{{$producto->descripcion}}</p>
						</div>
						<div class="col-12 col-lg-12 pt-2">		
						<h3 class="mt-5 mb-3  title-tecnicas">Características técnicas</h3>				
							<div class="row py-4">								
								<div class="col-12 col-lg-6 caract-tecnicas">
									<div class="grup-tec border mb-1">
										<img src="{{asset('')}}" alt="">
										<p class="titulo-caract">Display:</p>
										<p class="ml-3">{{$producto->caracteristicas[0]->display}}</p>
									</div>
									<div class="grup-tec border  mb-1">
										<img src="{{asset('')}}" alt="">
										<p class="titulo-caract">Cámara:</p>
										<p class="ml-3">{{$producto->caracteristicas[0]->camara}}</p>
									</div>
									<div class="grup-tec border mb-1">
										<img src="{{asset('')}}" alt="">
										<p class="titulo-caract">Procesador:</p>
										<p class="ml-3">{{$producto->caracteristicas[0]->procesador}}</p>
									</div>	
									<div class="grup-tec border mb-1">
										<img src="{{asset('')}}" alt="">
										<p class="titulo-caract">Sistema operativo:</p>
										<p class="ml-3">SO: {{$producto->caracteristicas[0]->sistema_operativo}}</p>
									</div>								
								</div>
								<div class="col-12 col-lg-6 caract-tecnicas">
									<div class="grup-tec border mb-1">
										<img src="{{asset('')}}" alt="">
										<p class="titulo-caract">Memoria:</p>
										<p class="ml-3">Memoria -{{$producto->caracteristicas[0]->memoria}}</p>
									</div>
									<div class="grup-tec border  mb-1">
										<img src="{{asset('')}}" alt="">
										<p class="titulo-caract">Cámara secundaria:</p>
										<p class="ml-3">{{$producto->caracteristicas[0]->camara_secundaria}}</p>
									</div>
									<div class="grup-tec border mb-1">
										<img src="{{asset('')}}" alt="">
										<p class="titulo-caract">Memoria ram:</p>
										<p class="ml-3">{{$producto->caracteristicas[0]->memoria_ram}}</p>
									</div>			
									<div class="grup-tec border mb-1">
										<img src="{{asset(' ')}}" alt="">
										<p class="titulo-caract">Batería:</p>
										<p class="ml-3">Beteria: {{$producto->caracteristicas[0]->bateria}}</p>
									</div>							
								</div>						
							</div>
							
						</div>					
					</div>
				</div>
			</div>				
		</div>
	</section>

	<!-- Recently Viewed -->

	<div class="viewed">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="viewed_title_container">
						<h3 class="viewed_title">Productos destacados</h3>
						<div class="viewed_nav_container">
							<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
							<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
						</div>
					</div>

					<div class="viewed_slider_container">
						
						<!-- Recently Viewed Slider -->

						<div class="owl-carousel owl-theme viewed_slider">
							
							<!-- Recently Viewed Item -->
							@foreach($randomProduct as $producto)
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="{{asset('images/imagenes-productos/'.$producto->imagen)}}" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$ {{presentPrice($producto->precio,$producto->oferta)}}@if($producto->oferta != '')<span>{{$producto->precio}}@endif</div>
										<div class="viewed_name"><a href="{{ route('show.product',[$producto->id, str_slug($producto->modelo, '-') ]) }}">{{textSeeMore($producto->modelo,40)}}</a></div>
									</div>
									<ul class="item_marks">
									    @if($producto->oferta != '')
											<li class="item_mark item_discount">-{{$producto->oferta}}%</li>
										@endif
										<li class="item_mark item_new">Nuevo</li>
									</ul>
								</div>
							</div>
							@endforeach

						</div>
					</div>
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
	@include('partials.footer')
@endsection

@section('script')
	@include('partials.script');
	<script src="{{asset('js/product_custom.js')}}"></script>
<script>
	$(function () {
	$('[data-toggle="popover"]').popover()
  })
</script>
@endsection
