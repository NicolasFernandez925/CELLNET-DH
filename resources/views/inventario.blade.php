@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/inventory_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
@endsection



@section('nav')
    <nav class="navbar navbar-expand-md navbar-light ">
            <div class="container">
			    <div class="top_bar_menu d-flex  ">
				    <div class="top_bar_contact_item d-none d-md-block"><div class="top_bar_icon "><img src="{{asset('images/phone.png')}}" alt=""></div>+54 11 26 35 70</div>
					<div class="top_bar_contact_item d-none d-md-block"><div class="top_bar_icon"><img src="{{asset('images/mail.png')}}" alt=""></div>cellNet@gmail.com</div>
				</div>
                    <ul class="navbar-nav  flex-row ml-auto">
						
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item ml-3">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbar-2" class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <span class="font-weight-bold"> Hola!, Admin {{ Auth::user()->name }}<i class="ml-2 far fa-user"></i> <span class="caret"></span>
                                </a>

                                <div class="" aria-labelledby="">
                                    <a class="cerrar-session" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                       
                    </ul>
                </div>
            </div>
        </nav>

		<!-- Top Bar -->

		<!-- Header Main -->

		<div class="header_main d-none">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="/"> <img class="img-logo" src="{{asset('images/logo-cellnet.png')}}" alt=""></a></div>
							
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="{{route('shop.search')}}" method="POST" class="header_search_form clearfix">
										{{ csrf_field() }}
										{{ method_field('POST') }}
										<input type="search" required="required" name="nombre" class="header_search_input" placeholder="Buscar productos...">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc"></span>							
												<ul class="custom_list clc"></ul>
											</div>								
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{asset('images/search.png')}}" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->

		<nav class="main_nav" id="navbar">
			<div class="container py-2">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
					
								  <a href="{{route('index')}}"> <img class="img-logo" src="{{asset('images/logo-cellnet.png')}}" alt=""></a>
									<div class="cat_burger ml-3"></div>
								</div>								
							</div>

							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="{{route('index')}}">Inicio<i class="fas fa-chevron-down"></i></a></li>
		
									<li class="hassubs">
										<a href="#">Mi cuenta<i class="fas fa-chevron-down"></i></a>
										<ul>
											@if(auth()->check() && auth()->user()->rol_id == 1)
												
													<li class="page_menu_item"><a href="{{route('inventario.show')}}">ADMINISTRADOR<i class="fa fa-angle-down"></i></a></li>
														
											@endif		
										</ul>
									</li>
								</ul>
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<!-- Menu -->

		<div class="page_menu">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="page_menu_content">
							
							<div class="page_menu_search">
								<form action="{{route('shop.search')}}" method="POST">
									{{ csrf_field() }}
									{{ method_field('POST') }}
									<input type="search" required="required" value="" name="nombre" id="nombre" class="page_menu_search_input" placeholder="Buscar productos...">
									<button type="submit" class="header_search_button trans_300 buscador-responsive" value="Submit"><img src="{{asset('images/search.png')}}" alt=""></button>
								</form>
							</div>
							<ul class="page_menu_nav">
					
							
								<li class="page_menu_item">
									<a href="{{route('index')}}">Home<i class="fa fa-angle-down"></i></a>
								</li>
						
								@if(auth()->check() && auth()->user()->rol_id == 1)
									<li class="page_menu_item has-children">
										<li class="page_menu_item"><a href="{{route('inventario.show')}}">ADMINISTRADOR<i class="fa fa-angle-down"></i></a></li>
						
									</li>
								@endif
							</ul>
							
							<div class="menu_contact">
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{asset('images/phone_white.png')}}" alt=""></div>+38 068 005 3570</div>
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{asset('images/mail_white.png')}}" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection

@section('content')
	<div class="container-fluid">
		@if(Session::has('statusProductDelete'))
			<div class="alert alert-success alert-dismissible fade show " role="alert">
				<strong class="message">{{Session::get('statusProductDelete')}}<i class="ml-2 far fa-check-circle"></i></strong>
				<button type="buttom" class="close" data-dismiss="alert" arial-label="close">
					<span aria-hidden="true">&times;</span>
				
				</button>
			</div>
		@endif
		@if(Session::has('statusProductAdd'))
			<div class="alert alert-success alert-dismissible fade show " role="alert">
				<strong class="message">{{Session::get('statusProductAdd')}}<i class="ml-2 far fa-check-circle"></i></strong>
				<button type="buttom" class="close" data-dismiss="alert" arial-label="close">
					<span aria-hidden="true">&times;</span>
			
				</button>
			</div>
		@endif
			@if(Session::has('statusEdit'))
			<div class="alert alert-success alert-dismissible fade show " role="alert">
				<strong class="message">{{Session::get('statusEdit')}}<i class="ml-2 far fa-check-circle"></i></strong>
				<button type="buttom" class="close" data-dismiss="alert" arial-label="close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		@endif
		<div class="menu-pan">
			<a href="{{route('index')}}">Home</a>
			<i class="fa fa-chevron-right breadcrumb-separator mr-1 ml-1"></i>
			<span>Inventario</span>							
		</div>
		<h2 class="py-5">Inventario de stock</h2>
		<div class="agregar-producto">
			<a class="agregar" href="{{route('producto.inventario.show')}}"><i class="fas fa-plus mr-3"></i>Agregar Producto</a>
		</div>
		<table class="table table-responsive table-bordered table-hover">
			<thead class="thead-dark">
			<tr>
				<th scope="col">id</th>
				<th scope="col">Modelo</th>
				<th scope="col">$Precio</th>
				<th scope="col">%Oferta</th>
				<th scope="col">Imagen</th>
				<th scope="col">Imagenes</th>
				<th scope="col">Descripcion</th>
				<th scope="col">Cantidad</th>
				<th scope="col">Marca</th>
				<th scope="col">Categoria</th>
				<th scope="col"></th>
				<th scope="col"></th>
	
			</tr>
			</thead>
			<tbody>
			
				@foreach($productos as $producto)
					<tr>		
						<td>{{$producto->id}}</td>
						<td>{{$producto->modelo}}</td>
						<td>{{$producto->precio}}</td>
						<td>{{$producto->oferta}}</td>
						<td><img class="img-product-inventari" src="{{asset('images/imagenes-productos/'.$producto->imagen)}}" alt=""></td>		
						<td>{{textSeeMore($producto->imagenes,10)}}</td>
						<td>{{textSeeMore($producto->descripcion,10)}}</td>
						<td>{{$producto->cantidad}}</td>
						<td>{{$producto->marca->nombre}}</td>
						<td>{{$producto->categoria->nombre}}</td>
						<td><a class="editar" href="{{route('producto.editar.inventario', $producto->id)}}"><i class="fas fa-pencil-alt"></i></a></td>
						<form action="{{route('producto.delete.inventario',$producto->id)}}" method="POST">
							{{ csrf_field() }}
							@method('DELETE')			
						 	<td><button class="eliminar" type="submit"><i class="fas fa-trash"></i></button> </td>
						</form>
					</tr>
				@endforeach
			</tbody>
		</table>

		<div class="links-product mt-5">
			{{ $productos->links() }}
		</div>
	</div>

	<a class="ir-arriba" >
		<span class="fa-stack">
		  <i class="fa fa-circle fa-stack-2x"></i>
		  <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
		</span>
	</a>
@endsection


@section('script')
	@include('partials.script');
	<script src="{{asset('js/custom.js')}}"></script>
@endsection
