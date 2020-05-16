
	<!-- Newsletter -->

	<div class="newsletter mt-5">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="{{asset('images/send.png')}}" alt=""></div>
							<div class="newsletter_title">Suscribite a Newsletter</div>
							<div class="newsletter_text"><p>...Recibi todas nuestras ofertas.</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required" placeholder="Ingresa tu email">
								<button class="newsletter_button">Subscribite</button>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

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
						<div class="footer_title">Proximamente !</div>
						<ul class="footer_list">
							<li><a href="#">Computadoras & Notbooks</a></li>
							<li><a href="#">Camaras</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">TV & Audio</a></li>
							<li><a href="#">Y más ...</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Atención al cliente</div>
						<ul class="footer_list">
							<li><a href="{{route('myaccount.user.show')}}">Mi cuenta</a></li>
						<li><a href="{{route('faq.show')}}">FAQs</a></li>
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