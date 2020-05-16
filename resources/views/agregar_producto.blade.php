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
											<li class="page_menu_item"><a href="{{route('inventario.show')}}">ADMINISTRADOR<i class="fa fa-angle-down"></i></a></li>
																																	
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
								<li class="page_menu_item">
									<a href="{{route('inventario.show')}}">ADMINISTRADOR</a>
								</li>
					
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
    <div class="container">
	 	<div class="menu-pan">
			<a href="{{route('index')}}">Home</a>
			<i class="fa fa-chevron-right breadcrumb-separator mr-1 ml-1"></i>
			<a href="{{route('inventario.show')}}">Inventario</a>
            <i class="fa fa-chevron-right breadcrumb-separator mr-1 ml-1"></i>
			<span>Agregar</span>							
		</div>
		<div class="row">
			<div class="col-12">
            	<form action="{{route('producto.inventario.add')}}" method="POST" enctype="multipart/form-data" class="form-inventario">
					{{ csrf_field() }}	 
                    @include('partials/form',['modo' =>'crear']);
                </form>
            </div>
        </div>
    </div>
	 
@endsection


@section('script')
	@include('partials.script');
    
	<script src="{{asset('js/custom.js')}}"></script>
@endsection
