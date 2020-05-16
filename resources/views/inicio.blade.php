
@extends('layouts.app')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('css/main_styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
@endsection

@section('nav')
     @include('partials.nav_general')
@endsection

@section('content')

	<!-- Banner -->

	<div class="banner_2">
	<div class="banner_2_background" style="background-image:url({{asset('images/banner_2_background.jpg')}})"></div>
		<div class="banner_2_container">
			<div class="banner_2_dots"></div>
			<!-- Banner 2 Slider -->

			<div class="owl-carousel owl-theme banner_2_slider">

				<!-- Banner 2 Slider Item -->
				<div class="owl-item banner">
					<div class="banner_2_item">
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col-lg-4 col-md-6 fill_height">
									<div class="banner_2_content">
										<div class="banner_2_category">Celulares</div>
										<div class="banner_2_title">Samsung Galaxy Z Flip</div>
										<div class="banner_2_text">La pantalla de 6.7 pulgadas tiene una relación de aspecto 22:8, con una resolución de 2636 x 1080 pixels, perforada para alojar la cámara frontal. Además está protegida por un vidrio ultra delgado, más durable que el plástico que protege la pantalla del Galaxy Fold.
											
									</div>
										<div class="button banner_2_button"><a href="{{route('shop')}}">Ver más</a></div>
									</div>
									
								</div>
								<div class="col-lg-8 col-md-6 fill_height">
									<div class="banner_2_image_container">
									<div class="banner_2_image "><img class="img-1-banner" src="{{asset('images/ng_rotado_1.png')}}" alt=""></div>
									</div>
								</div>
							</div>
						</div>			
					</div>
				</div>

				<!-- Banner 2 Slider Item -->
				<div class="owl-item">
					<div class="banner_2_item">
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col-lg-4 col-md-6 fill_height">
									<div class="banner_2_content">
										<div class="banner_2_category">Celulares</div>
										<div class="banner_2_title">Samsung A10s</div>
										<div class="banner_2_text">Pantalla grande para grandes experiencias
										6.2 pulgadas de pantalla HD+ TFT para un teléfono que te encantará ver. Ya sea que te gusten las comedias o los MMORPGs, la pantalla Infinity-V del Galaxy A10s cambia la forma en que los experimentas al ponerte en la acción. Mirá hasta dónde le lleva la experiencia en la pantalla de corte en V.</div>
										<div class="button banner_2_button"><a href="{{route('shop')}}">Ver más</a></div>
									</div>
									
								</div>
								<div class="col-lg-8 col-md-6 fill_height">
									<div class="banner_2_image_container">
									<div class="banner_2_image"><img class="img-1-banner-2"  src="{{asset('images/samsung_galaxy_a10s_negro.png')}}" alt=""></div>
									</div>
								</div>
							</div>
						</div>			
					</div>
				</div>


			</div>
		</div>
	</div>

	<!-- Characteristics -->

	<div class="characteristics d-none d-md-block">
		<div class="container">
			<div class="row">

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
					<div class="char_icon"><img src="{{asset('images/char_1.png')}}" alt=""></div>
						<div class="char_content">
							<div class="char_title">Envíos Gratis</div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
					<div class="char_icon"><img src="{{asset('images/char_2.png')}}" alt=""></div>
						<div class="char_content">
							<div class="char_title">Cambios</div>
							<div class="char_subtitle"></div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
					<div class="char_icon"><img src="{{asset('images/char_3.png')}}" alt=""></div>
						<div class="char_content">
							<div class="char_title">Todas las tarjetas</div>
							<div class="char_subtitle"></div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
					<div class="char_icon"><img src="{{asset('images/char_4.png')}}" alt=""></div>
						<div class="char_content">
							<div class="char_title">Ofertas</div>
							<div class="char_subtitle"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Deals of the week -->

	<div class="deals_featured">
		<div class="container">
			<div class="row">
				<div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
					
					<!-- Featured -->
					<div class="featured">
						<div class="tabbed_container">
							<div class="tabs">
								<ul class="clearfix">
									<li class="active">Productos</li>
								</ul>
								<div class="tabs_line"><span></span></div>
							</div>

							<!-- Product Panel -->
							<div class="product_panel panel active">
								<div class="featured_slider slider">

									<!-- Slider Item 	 -->

									@foreach($productos as $producto)	
											
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images/imagenes-productos/'.$producto->imagen)}}" alt=""></div>
												<div class="product_content">
													
												<div class="product_price discount "> @if($producto->oferta != '')<span class="price-ahora">Ahora</span> @endif $ {{presentPrice($producto->precio,$producto->oferta)}}</div>
													<div class="product_name"><div><a href="{{ route('show.product',[$producto->id, str_slug($producto->modelo, '-') ]) }}">{{$producto->modelo}}</a></div></div>
													<div class="product_extras">
														
														<form action="{{route('cart.add.product',$producto->id)}}" method="POST">
															{{ csrf_field() }}
															{{ method_field('POST') }}
															<button type="submit" class="product_cart_button">Añadir al carrito</button>
														</form>
													
													</div>
												</div>
												@if($producto->oferta != '')
												<ul class="product_marks">
													<li class="product_mark product_discount">-{{$producto->oferta}}%</li>
													<span class="price-antes">Antes</span>
													<span class="descuento">$ {{ number_format($producto->precio)}}</span>
												</ul>
												@endif
											</div>
										</div>
										
									@endforeach
									


								</div>

								<div class="featured_slider_dots_cover"></div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

		<!-- Recently Viewed -->

	<div class="viewed">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="viewed_title_container">
						<h3 class="viewed_title">Celulares en oferta</h3>
						<div class="viewed_nav_container">
							<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
							<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
						</div>
					</div>

					<div class="viewed_slider_container">
						
						<!-- Recently Viewed Slider -->

						<div class="owl-carousel owl-theme viewed_slider">
							
							<!-- Recently Viewed Item -->
							@foreach($ofertasProduct as $producto)
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="{{asset('images/imagenes-productos/'.$producto->imagen)}}" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$ {{presentPrice($producto->precio,$producto->oferta)}}<span>{{$producto->precio}}</span></div>
										<div class="viewed_name"><a href="{{ route('show.product',[$producto->id, str_slug($producto->modelo, '-') ]) }}">{{textSeeMore($producto->modelo,35)}}</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-{{$producto->oferta}}%</li>
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

	<!-- Brands -->

	<div class="brands">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="brands_slider_container">
						
						<!-- Brands Slider -->

						<div class="owl-carousel owl-theme brands_slider">
							
						<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('images/brands_1.jpg')}}" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('images/brands_2.jpg')}}" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('images/brands_3.jpg')}}" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('images/brands_4.jpg')}}" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('images/brands_5.jpg')}}" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('images/brands_6.jpg')}}" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('images/brands_7.jpg')}}" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('images/brands_8.jpg')}}" alt=""></div></div>

						</div>
						
						<!-- Brands Slider Navigation -->
						<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
						<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

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
	<script src="{{asset('js/custom.js')}}"></script>

@endsection




 