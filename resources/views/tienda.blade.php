@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href={{asset('css/shop_styles.css')}}>
<link rel="stylesheet" type="text/css" href="{{asset('css/shop_responsive.css')}}">

@endsection

@section('nav')
     @include('partials.nav_general')
@endsection

@section('content')

<!-- Carousel -->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
	  <div class="carousel-item active">
	  <img class="d-block w-100" src="{{asset('images/carousel_tienda_1.jpg')}}" alt="First slide">
	  </div>
	  <div class="carousel-item">
		<img class="d-block w-100" src="{{asset('images/carousel_tienda_2.jpg')}}" alt="Second slide">
	  </div>
	  <div class="carousel-item">
		<img class="d-block w-100" src="{{asset('images/carousel_tienda_3.jpg')}}" alt="Third slide">
	  </div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="sr-only">Next</span>
	</a>
</div>

<!-- Shop -->

<div class="shop">	
		<div class="container">	
			<div class="row">
				<div class="col-lg-3 d-none d-lg-block">
					<!-- Shop Sidebar -->
					<div class="shop_sidebar">
						<div class="sidebar_section">
							<div class="menu-pan">
								<a href="{{route('index')}}">Home</a>
								<i class="fa fa-chevron-right breadcrumb-separator mr-1 ml-1"></i>
								<span>Shop</span>
								<i class="fa fa-chevron-right breadcrumb-separator mr-1 ml-1"></i>
								<span>{{request()->marca}}</span>
								<span>{{request()->categoria}}</span>							
							</div>
							<div class="sidebar_title">Categorias</div>
							<ul class="sidebar_categories">
								<li><a href="{{route('shop',['categoria'=> 'celular', 'id' => 1]) }}">Celular</a></li>
								<li><a href="{{route('shop',['categoria'=> 'tablet','id' => 2]) }}">Tablet</a></li>
							</ul>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_subtitle brands_subtitle">Marcas</div>
							<ul class="brands_list">
								
								@foreach ($datos['marcas'] as $marca)
									<li class="brand"><a href="{{route('shop',['marca'=> $marca->nombre,'id'=> $marca->id]) }}">{{$marca->nombre}}</a></li>
								@endforeach
								 <li class="brand"><a href="{{route('shop')}}">Ver todos</a></li>
							</ul>
						</div>
					</div>

				</div>

				<div class="col-lg-9">
					
					<!-- Shop Content -->

					<div class="shop_content">
						<div class="shop_bar clearfix">
						<h3 class="mb-5 title-shop">Tienda</h3>						
							<div class="shop_product_count  mr-2">Productos<span> {{$datos['countProductos']}}</span></div>			
							<div class="shop_sorting">								
								<ul>
									<li>
										<span class="sorting_text">Ordenar por: <i class="fas fa-chevron-down"></span></i>
										<ul>
										<a href="{{route('shop',['ordenar'=> 'nombre','id'=> 1]) }}"><li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>Nombre</li></a>
										<a href="{{route('shop',['ordenar'=> 'precio','id'=> 2]) }}"><li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>Precio</li></a>	
										</ul>
									</li>
								</ul>
							</div>
						</div>

						<div class="product_grid">
							<div class="product_grid_border"></div>

							<!-- Product Item -->
								
								@forelse($datos['productos'] as $producto)
								
									<div class="product_item is_new">
										<div class="product_border"></div>
									<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images/imagenes-productos/'.$producto->imagen)}}" alt=""></div>
										<div class="product_content">
											<div class="product_price product-shop">@if($producto->oferta != '') <span class="oferta-product">Oferta</span>$ {{presentPrice($producto->precio,$producto->oferta)}} @else $ {{$producto->precio}} @endif</div>
										<div class="product_name"><div><a href="{{ route('show.product',[$producto->id, str_slug($producto->modelo, '-') ]) }}" tabindex="0">{{textSeeMore($producto->modelo,16)}}</a></div></div>
										</div>
										<form action="{{route('cart.add.product',$producto->id)}}" method="POST">
											{{ csrf_field() }}
											{{ method_field('POST') }}
											<button type="submit"><div class="product_fav"><i class="fas fa-cart-plus"></i></i></div></button>
										</form>															
										<ul class="product_marks">
											<li class="product_mark product_discount">-{{$producto->oferta}}%</li>
										</ul>
										
									</div>
								@empty
									<p>No hay productos con esa búsqueda...</p>						
								@endforelse			
								
								
						</div>
						<!-- Shop Page Navigation -->
						<div class="container paginate-link">						
							    @if(!(request()->method() == 'POST'))
									{{ $datos['productos']->links() }}				
							  	@endif							  
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
						<h3 class="viewed_title">Productos destacados</h3>
						<div class="viewed_nav_container">
							<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
							<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
						</div>
					</div>

					<div class="viewed_slider_container">
						
						<!-- Recently Viewed Slider -->

						<div class="owl-carousel owl-theme viewed_slider">
						
							@foreach($productosTakeOrder as $producto)
						
							<!-- Recently Viewed Item -->
								<div class="owl-item">
									<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
										<div class="viewed_image"><img src="{{asset('images/imagenes-productos/'.$producto->imagen)}}" alt=""></div>
										<div class="viewed_content text-center">
											<div class="viewed_price">$ {{presentPrice($producto->precio,$producto->oferta)}}@if($producto->oferta != '')<span>{{$producto->precio}}@endif</div>
											<div class="viewed_name"><a href="{{ route('show.product',[$producto->id, str_slug($producto->modelo, '-') ]) }}">{{textSeeMore($producto->modelo,30)}}</a></div>
										</div>

										@if($producto->oferta != '')
											<ul class="item_marks">
												<li class="item_mark item_discount">-{{$producto->oferta}}%</li>
											</ul>
										@endif
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
	<script src="{{asset('js/shop_custom.js')}}"></script>
	
@endsection