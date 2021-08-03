<!DOCTYPE html>
<html lang="ES">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="facebook-domain-verification" content="0ewq6p8aw2qo8gqbzwezsrra7e46v2" />
	<title>WAW!</title>
	<!-- Icono de la pagina web -->
    <link rel="shortcut icon" width="10" type="image/x-icon" href="{{ asset('assets/images/iconos/favicon.png') }}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<!-- MBOOSTRAP -->
	<link  rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css">
	
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/mdb.min.css') }}"> -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">

	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @livewireStyles
</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->

    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a><img style="width:35px" src="{{ asset('assets/images/peru.svg') }}"></a>
								</li>
							</ul>
						</div>
						 <div class="topbar-menu right-menu">
							<ul>
								@if(Route::has('login'))
									@auth
										@if(Auth::user()->utype == 'ADM')
											<li class="menu-item menu-item-has-children parent">
												<a class="link-direction dropdown-toggle px-3"><i><svg xmlns="http://www.w3.org/2000/svg" width="35" height="32" color="black" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
													<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
													<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
													</svg></i>
												</a>
												<ul class="submenu curency" >
													<li class="menu-item" >
														<a class="dropdown-item" title="ADMIN">{{Auth::user()->name}}</a>
													</li>
													<!-- <li class="menu-item" >
														<a class="dropdown-item" title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
													</li> -->
													<li class="menu-item">
														<a class="dropdown-item" title="Categorias" href="{{route('admin.categories')}}">Categorias</a>
													</li>
													<li class="menu-item">
														<a class="dropdown-item" title="Productos" href="{{route('admin.products')}}">Productos</a>
													</li>
													<li class="menu-item">
														<a class="dropdown-item" title="Manage Home Slider" href="{{route('admin.homeslider')}}">Administrar Sliders</a>
													</li>
													<li class="menu-item">
														<a class="dropdown-item" title="Manage Home Categorias" href="{{route('admin.homecategories')}}">Administrar Categorias en Promociones</a>
													</li>
													<li class="menu-item">
														<a class="dropdown-item" title="Sale Setting" href="{{route('admin.sale')}}">Configuracion de Oferta</a>
													</li>
													<li class="menu-item">
															<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
														</li>
													<form id="logout-form" method="POST" action="{{ route('logout') }}">
														@csrf
													</form>
												</ul>
											</li>
										@else
											<li class="menu-item menu-item-has-children parent">
												<a title="Mi Perfil" class="link-direction dropdown-toggle px-3"><i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" color="black" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
													<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
													<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
													</svg></i>
												</a>
												<ul class="submenu curency" >
													<li class="menu-item" >
														<a class="dropdown-item" title="USER">{{Auth::user()->name}}</a>
														<p>{{Auth::user()->email}}</p>
													</li>
													<li class="menu-item" >
														<a class="dropdown-item" title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
													</li>
													<li class="menu-item">
															<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
														</li>
													<form id="logout-form" method="POST" action="{{ route('logout') }}">
														@csrf
													</form>
												</ul>
											</li>
										@endif
									@else
										<li class="menu-item menu-item-has-children parent">
											<a class="link-direction dropdown-toggle px-3"><i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" color="black" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
												<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
												<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
												</svg>
											</i></a>
											<ul class="submenu curency">
												<li class="menu-item nav-item dropdown" >
													<a class="dropdown-item" title="Login" href="{{route('login')}}">Login</a>
												</li>
												<li class="menu-item nav-item dropdown">
													<a class="dropdown-item" title="Register" href="{{route('register')}}">Register</a>
												</li>
											</ul>
										</li>
									@endif
								@endif
							</ul>
						</div> 
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="/" class="link-to-home"><img src="{{ asset('assets/images/logoWAW.jpg') }}" width="200" alt="mercado"></a><br>
						</div>

						@livewire('header-search-component')

						<div class="wrap-icon right-section">
							@livewire('wishlist-count-component')
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div style="padding-left: -15px; padding-right: -15px;" class="nav-section header-sticky">
					<div style="padding-left: -15px; padding-right: -15px;" class="primary-nav-section">
						<div style="padding-left: -15px; padding-right: -15px;" class="container">
							<ul style="padding-left: -15px; padding-right: -15px;" class="nav primary clone-main-menu" id="mercado_main" data-menuname="Menu Principal" >
								<li class="menu-item">
									<a href="/" class="link-to-home"><img src="{{ asset('assets/images/logoWAW.jpg') }}" style="max-width:70px" alt="waw!"></a>
								</li>
								<li class="menu-item">
									<a href="/shop" class="link-term mercado-item-title dropdown-toggle px-3">Tienda</a>
									@livewire('menu-options-component')
								</li>
								<li class="menu-item">
									<a class="nav-link  waves-light active" href="/promociones" class="link-term mercado-item-title">Promociones</a>
								</li>
								<li class="menu-item">
									<a class="nav-link  waves-light active" href="/la-alpaca" class="link-term mercado-item-title">Alpaca</a>
								</li>
								<li class="menu-item">
									<a class="link-term mercado-item-title dropdown-toggle px-3">Colecciones</a>
									<ul class="submenu-item dropright">
										<li><a class="dropdown-item" href="/collections/handmade"><i class="fas fa-angle-right"></i> Hand Made</a></li>
										<li><a class="dropdown-item" href="/collections/waw-2021"><i class="fas fa-angle-right"></i> WAW | 2021</a></li>
										<li><a class="dropdown-item" href="/collections/eco"><i class="fas fa-angle-right"></i> Eco</a></li>
										<li><a class="dropdown-item" href="/collections/soft"><i class="fas fa-angle-right"></i> Soft</a></li>
										<li><a class="dropdown-item" href="/collections/alpaca-dorada"><i class="fas fa-angle-right"></i> Alpaca Dorada</a></li>
									</ul>
								</li>
								<li class="menu-item">
									<a href="/detras-de-la-marca" class="link-term mercado-item-title  dropdown-toggle px-3">Detras De La Marca</a>
									<ul class="submenu-item dropright">
										<li><a class="dropdown-item" href="/detras-de-la-marca#artesanos"><i class="fas fa-angle-right"></i> Artesanos</a></li>
										<li><a class="dropdown-item" href="/detras-de-la-marca#fibras-responsables"><i class="fas fa-angle-right"></i> Fibras Responsables</a></li>
										<li><a class="dropdown-item" href="/detras-de-la-marca#viviendo-nuestros-valores"><i class="fas fa-angle-right"></i> Viviendo Nuestros Valores</a></li>
									</ul>
								</li>
								<li class="menu-item">
									@livewire('cart-count-component')
								</li>						
							</ul>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</header>

    {{$slot}}

	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-shield" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h3 class="fc-name">Prendas de Calidad</h3>
								<p class="fc-desc">Con Fibra 100% Alpaca</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h3 class="fc-name">Garantia</h3>
								<p class="fc-desc">30 días de devolución de dinero</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h3 class="fc-name">Facilidad</h3>
								<p class="fc-desc">Siempre Pensando en Ustedes</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-info-circle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h3 class="fc-name">Soporte Personalido</h3>
								<p class="fc-desc">Nosotros tenemos soporte 24/7</p>
							</div>
						</li>
					</ul>
				</div>
			</div>

			<!--End function info-->

			<div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-md-5">
							<div class="wrap-footer-item">
								<h3 class="item-header">Contactanos</h3>
								<div class="item-content">
									<div class="wrap-vertical-nav">
										<ul>
											<li class="menu-item">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<a class="link-term">MZA. B LOTE. 28 URB. ASVEA - AREQUIPA / AREQUIPA / AREQUIPA</a>
											</li>
											<li class="menu-item">
												<i class="fa fa-phone" aria-hidden="true"></i>
												<a class="link-term">(+51) 966 444 888</a>
											</li>
											<li class="menu-item">
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<a class="link-term">Contact@wao.pe</a>
											</li>											
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-5">

							<div class="wrap-footer-item">
								<h3 class="item-header">Terminos Comerciales</h3>
								<div class="item-content">
									<div class="wrap-vertical-nav">
										<ul>
											<li class="menu-item"><a href="#" class="link-term">Terminos y Condiciones</a></li>
											<li class="menu-item"><a href="#" class="link-term">Envios</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-2">
							<div class="row">
								<div class="wrap-footer-item">
									<h3 class="item-header">Servicio al cliente</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="#" class="link-term">Cambio y devoluciones</a></li>
												<li class="menu-item"><a href="#" class="link-term">Libro de Reclamaciones Virtual</a></li>
								
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<br>


			<!-- Whatsapp plugin de chat Code -->
			<a class="appWhatsapp" target="_blank" href="https://api.whatsApp.com/send?phone=+51900989543&text=hola!&nbsp;con&nbsp;el&nbsp;encargado&nbsp;de&nbsp;WAW?">
				<img src="{{asset('assets/images/iconos/WhatsappImage.png')}}">
			</a>

			<!-- Messenger plugin de chat Code -->
			<div id="fb-root"></div>

			<!-- Your plugin de chat code -->
			<div id="fb-customer-chat" class="fb-customerchat">
			</div>

			<script>
				var chatbox = document.getElementById('fb-customer-chat');
				chatbox.setAttribute("page_id", "2687774734598412");
				chatbox.setAttribute("attribution", "biz_inbox");

				window.fbAsyncInit = function() {
					FB.init({
					xfbml            : true,
					version          : 'v11.0'
					});
			};

			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
			</script>

			<div class="row" style="align-items:center;">
				<div class="col-md-12 contenedor">
					<figure>
						<img src="{{ asset('assets/images/prueba/footer.jpg') }}" class="img-fluid" height="80" alt="la-alpaca"/>
						<div class="capa">
							<h3>CITE Textil Cámelidos || Arequipa</h3>
							<a href="https://alpacamarketplace.pe" target="_blank" class="link-to-home"><img src="{{ asset('assets/images/marca/Logo-Alpaca-MARKETPLACE.png') }}" width="80" alt="mercado"></a>
						</div>
					</figure> 
				</div>
			</div>



			<div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright 2021 © WAW! - Todos los Derechos Reservados</p>
					</div>
					<div class="coppy-right-item item-right">
						<div class="wrap-nav horizontal-nav">
							<ul>
								<!-- <li class="menu-item"><a href="about-us.html" class="link-term">Acerca de</a></li>								 -->
								<li class="menu-item"><a href="/contact" class="link-term">Contactanos</a></li>								
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		
	</footer>
	<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
	<!-- <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script> -->
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assets/js/functions.js') }}"></script>

	<!-- MBOOTSTRAP -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<!-- <script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script> -->
	<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/mdb.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/mdb.min.js.map') }}"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="{{asset('assets/js/zoom-image.js') }}"></script>
    <script src="{{asset('assets/js/main.js') }}"></script>

	<!-- Model Viewer -->

	<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
	
    @livewireScripts

	@stack('scripts')
</body>
</html>