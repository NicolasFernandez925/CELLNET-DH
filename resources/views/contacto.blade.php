@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href={{asset('css/checkout_style.css')}}>
<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
<script src="https://js.stripe.com/v3/"></script>

@endsection

@section('nav')
     @include('partials.nav_general')
@endsection

@section('content')


<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-8">
            @if(Session::has('message'))
				<div class="alert mb-5 w-100 alert-success alert-dismissible fade show text-center" role="alert">
					<strong class="message">{{Session::get('message')}}</strong>
					<button type="buttom" class="close" data-dismiss="alert" arial-label="close">
					    <span aria-hidden="true">&times;</span>
					</button>
				</div>					
            @endif	
            @if(count($errors) > 0)
                <div class="spacer"></div>
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="li-error">{!! $error !!}</li>
                        @endforeach
                    </ul>
                </div>
			@endif
			

            <div class="bg-login">
                <div class=""><h3 class="text-center title-login  pb-4">Mandanos un mensajito !</h3></div>

                <div class="mt-5">
                    <form method="POST" action="{{ route('send.contact') }}">
                        @csrf

                        <div class="form-group row mt-4">
                            <label for="text" class="col-12 col-md-8 offset-md-2">{{ __('Nombre ') }}</label>

                            <div class="col-12 col-md-8 offset-md-2">
                                <input id="nombre" type="text" placeholder="Ingresa tu nombre" class="form-control" name="nombre" value="{{ old('nombre') }}"  >

                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <label for="email" class="col-12 col-md-8 offset-md-2">{{ __('E-Mail ') }}</label>

                            <div class="col-12 col-md-8 offset-md-2">
                                <input id="email" type="email" placeholder="Ingresa el mail" class="form-control" name="email" value="{{ old('email') }}"  >

    
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <label for="mensaje" class="col-12 col-md-8 offset-md-2">{{ __('Dejanos un mensaje') }}</label>

                            <div class="col-12 col-md-8 offset-md-2">
                               <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn-form">
                                    {{ __('Enviar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection





@section('footer')
    
	<!-- Footer -->

	<footer class="footer">
		<div class="container">
            <div class="row ubicacion-container ">
              <div class="col-12 col-md-12">
                  <h3 class="mb-4">¿Donde nos podes encontrar?</h3>
                  <div class="mapa-ubicacion">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.989667667357!2d-58.394484384770394!3d-34.60442278045931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccac198206de7%3A0x31a4c79ffb528624!2sAv.%20Corrientes%20%26%20Av.%20Callao%2C%20C1042%20CABA!5e0!3m2!1ses-419!2sar!4v1588173996290!5m2!1ses-419!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                  </div>
              </div>
            </div>

			<div class="row mt-5">
				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a href="#">CellNet</a></div>
						</div>
						<div class="footer_phone">+54 11 28 05 70</div>
						<div class="footer_contact_text">
							<p>9 de julio y callao, CABA</p>
						</div>
						<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-google"></i></a></li>
								<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-2 offset-lg-2">
					<div class="footer_column">
						<div class="footer_title">Encuentra rápido</div>
						<ul class="footer_list">
							<li><a href="#">Computadoras & Notbooks</a></li>
							<li><a href="#">Camaras</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Smartphones & Tablets</a></li>
							<li><a href="#">TV & Audio</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Atención al cliente</div>
						<ul class="footer_list">
							<li><a href="#">Mi cuenta</a></li>
							<li><a href="#">FAQs</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col">				
					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
						<div class="copyright_content">
							Copyright &copy;<script>document.write(new Date().getFullYear())</script> CellNet | Todos los derechos reservados <i class="fa fa-heart" aria-hidden="true"></i> by <a class="created-design" href="https://www.digitalhouse.com/" target="_blank">Nicolas Fernandez</a>					
							</div>
						<div class="logos ml-sm-auto">
							<ul class="logos_list">
								<li><img class="tarjeta" src="{{asset('images/visa@2x.png')}}" alt=""></li>
								<li><img class="tarjeta" src="{{asset('images/mastercard@2x.png')}}" alt=""></li>
								<li><img class="tarjeta" src="{{asset('images/mercadopago@2x.png')}}" alt=""></li>
                                <li><img class="tarjeta" src="{{asset('images/rapipago@2x.png')}}" alt=""></li>
                                <li><img class="tarjeta" src="{{asset('images/pagofacil@2x.png')}}" alt=""></li>
							</ul>
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

@section('script')
   @include('partials.script');
	<script src="{{asset('js/custom.js')}}"></script>
@endsection



