<nav class="navbar navbar-expand-md navbar-light ">
            <div class="container">
			    <div class="top_bar_menu d-flex  ">
				<div class="top_bar_contact_item d-none d-md-block ">

					<div class="conteudo">
					
						<ul class="__item">
						  <li><i class="far fa-bookmark mr-2"></i> <span>Envío Gratis</span> </li>
						  <li><i class="far fa-bookmark mr-2"></i><span>Comprá seguro</span></li>
						  <li><i class="far fa-bookmark mr-2"></i><span>En CELLNET</span></li>
						</ul>
					  </div>
				</div>

				</div>
                    <ul class="navbar-nav  flex-row ml-auto">
						
                        <!-- Authentication Links -->
                        @guest
							<li class="nav-item ">
								<i id="btn-search" class="fas fa-search"></i>				
							</li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><i class="far fa-user mr-2"></i>{{ __('Ingresar') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item ml-3">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Creá tu cuenta') }}</a>
                                </li>
                            @endif
						@else
							<li class="nav-item">
								<i id="btn-search" class="fas fa-search"></i>
								
							</li>
                            <li class="nav-item dropdown">
                                <a id="navbar-2" class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               <span class="font-weight-bold"> Hola!,@if(auth()->user()->rol_id == 1) Admin @endif</span>  {{ Auth::user()->name }}<i class="ml-2 far fa-user"></i> <span class="caret"></span>
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
		<div class="row">
			<div class="col-12 ">			
				<div class="search-container">					
					<form class="text-center" action="{{route('shop.search')}}" method="POST" class="">
						{{ csrf_field() }}
						{{ method_field('POST') }}
							
						<input type="search" class="input-search" required="required" name="nombre" class="" placeholder="Buscar productos...">
							
						<button class="button-search" type="submit" class="" value="Submit"><img src="{{asset('images/search.png')}}" alt=""></button>							
					</form>					
				</div>
			</div>
		</div>
		</div>
		


		<div class="cover"></div>
		<!-- Header Main -->

		<div class="header_main d-none d-md-block py-3 mt-3">
			<div class="container">
				<div class="row">	
					<!-- Wishlist -->
					<div class="col-lg-12 ">					
						<div class="cart_container d-flex flex-row align-items-center justify-content-end">
							<div class="cart_icon">
								<a href="{{route('cart.show')}}"><i class="fab fa-opencart"></i><div class="cart_count"><span>{{session('countProducts')}}</span></div></a>
							</div>
							<div class="cart_content">
								<div class="cart_text"><a href="{{route('cart.show')}}">Carrito</a></div>
									<div class="cart_price">$ {{session('priceTotal')}}</div>    
							</div>
						</div>				
					</div>
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->

		<nav class="main_nav menu"  id="navbar">
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
										<a href="#">Categorias<i class="fas fa-chevron-down"></i></a>
										<ul>
											
										<li><a href="{{route('shop',['categoria'=> 'celular', 'id' => 1]) }}">Celulares<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="{{route('shop',['categoria'=> 'tablet','id' => 2]) }}">Tablets<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="">Mi cuenta<i class="fas fa-chevron-down"></i></a>
										<ul>
											@if(auth()->check() && auth()->user()->rol_id == 1)
												<li>
													<a href="{{route('inventario.show')}}">ADMINISTRADOR<i class="fas fa-chevron-down"></i></a>
												
												</li>
											@endif		
											@if(auth()->check() && auth()->user()->rol_id == 2)
												<li>
													<a href="{{route('myaccount.user.show')}}">Mis datos<i class="fas fa-chevron-down"></i></a>
													
												</li>
											
											@endif										
										</ul>
									</li>
									
									<li><a href="{{route('shop')}}">Tienda<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="{{route('cart.show')}}">Carrito<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="{{url('/contacto')}}">Contacto<i class="fa fa-angle-down"></i></a></li>
									<li><a href="{{route('faq.show')}}">FAQ<i class="fa fa-angle-down"></i></a></li>
								
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
							<!-- Wishlist -->
							<div class="mt-3 ">
								<div class="wishlist_cart bg-cart d-flex flex-row align-items-center justify-content-end">
									<!-- Cart -->
									<div class="cart cart-responsive mt-3">
										<div class="cart_container d-flex flex-row align-items-center justify-content-end">
											<div class="cart_icon ">
												<a href="{{route('cart.show')}}"><i class="fab fa-opencart"></i><div class="cart_count"><span>{{session('countProducts')}}</span></div></a>
											</div>
											<div class="cart_content">
											<div class="cart_text"><a href="{{route('cart.show')}}">Carrito</a></div>
												<div class="cart_price">$ {{session('priceTotal')}}</div>    
											</div>
										</div>
									</div>
								</div>
							</div>
				
							<ul class="page_menu_nav mt-4">
					
							
								<li class="page_menu_item">
									<a href="{{route('index')}}">Home<i class="fa fa-angle-down"></i></a>
								</li>
			
								@if(auth()->check() && auth()->user()->rol_id == 1)	
										<li class="page_menu_item"><a href="{{route('inventario.show')}}">ADMINISTRADOR<i class="fa fa-angle-down"></i></a></li>
								@endif
								@if(auth()->check() && auth()->user()->rol_id == 2)
									<li class="page_menu_item"><a href="{{route('myaccount.user.show')}}">Mi cuenta<i class="fa fa-angle-down"></i></a></li>
							
							@endif
			
							</ul>
							
							<li class="page_menu_item"><a href="{{route('cart.show')}}">Mi carrito<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item"><a href="{{route('shop')}}">Tienda<i class="fa fa-angle-down"></i></a></li>
							<li  class="page_menu_item"><a href="{{url('/contacto')}}">Contacto<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item"><a href="{{route('faq.show')}}">FAQ<i class="fa fa-angle-down"></i></a></li>
							
							<div class="menu_contact">
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{asset('images/phone_white.png')}}" alt=""></div>+38 068 005 3570</div>
								<div class="menu_contact_item m-3"><div class="menu_contact_icon"><img src="{{asset('images/mail_white.png')}}" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>

		
