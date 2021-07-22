<!DOCTYPE html>
<html lang="ES">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WAW</title>	
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<!-- MBOOSTRAP -->
	<link  rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css">
	
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/mdb.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
	
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
									<a><img src="{{ asset('assets/images/peru.svg') }}" width="35"></a>
								</li>
							</ul>
						</div>
						 <div class="topbar-menu right-menu">
							<ul>
								<!-- <li class="menu-item lang-menu menu-item-has-children parent">
									<a title="English" href="#"><span class="img label-before"><img src="assets/images/lang-en.png" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu lang" >
										<li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="assets/images/lang-hun.png" alt="lang-hun"></span>Hungary</a></li>
										<li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="assets/images/lang-ger.png" alt="lang-ger" ></span>German</a></li>
										<li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="assets/images/lang-fra.png" alt="lang-fre"></span>French</a></li>
										<li class="menu-item" ><a title="canada" href="#"><span class="img label-before"><img src="assets/images/lang-can.png" alt="lang-can"></span>Canada</a></li>
									</ul>
								</li> -->
								<!-- <li class="menu-item menu-item-has-children parent" >
									<a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >
										<li class="menu-item" >
											<a title="Pound (GBP)" href="#">Pound (GBP)</a>
										</li>
										<li class="menu-item" >
											<a title="Euro (EUR)" href="#">Euro (EUR)</a>
										</li>
										<li class="menu-item" >
											<a title="Dollar (USD)" href="#">Dollar (USD)</a>
										</li>
									</ul>
								</li> -->

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
													<li class="menu-item" >
														<a class="dropdown-item" title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
													</li>
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
							<a href="/" class="link-to-home"><img src="{{ asset('assets/images/logoWAW.jpg') }}" width="100" alt="mercado"></a>
						</div>

						@livewire('header-search-component')

						<div class="wrap-icon right-section">
						<!-- <div class="wrap-icon-section minicart">
							<a href="/cart" class="link-direction">
								<i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" color="black" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
									<path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
									</svg>
								</i>
								<div class="left-info">
									<span class="index">4 items</span>
								</div>
							</a>
						</div> -->
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
							<ul style="padding-left: -15px; padding-right: -15px;" class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item">
									<a href="/" class="link-to-home"><img src="{{ asset('assets/images/logoWAW.jpg') }}" width="70" alt="waw"></a>
								</li>
								<li class="menu-item">
									<a href="/shop" class="link-term mercado-item-title dropdown-toggle px-3">TIENDA</a>
									<ul class="submenu-item">
										<li><a class="dropdown-item" href="/product-category/accesorios"><i class="fas fa-angle-right"></i> ACCESORIOS</a></li>
										<li><a class="dropdown-item" href="/product-category/mujeres"><i class="fas fa-angle-right"></i> MUJER</a></li>
										<li><a class="dropdown-item" href="/product-category/hombres"><i class="fas fa-angle-right"></i> HOMBRE</a></li>
										<li><a class="dropdown-item" href="/product-category/niños"><i class="fas fa-angle-right"></i> NIÑOS</a></li>
										<li><a class="dropdown-item" href="/product-category/casa"><i class="fas fa-angle-right"></i> CASA</a></li>
									</ul>
								</li>
								<li class="menu-item">
									<a class="nav-link  waves-light active show" href="/ofertas" class="link-term mercado-item-title">PROMOCIONES</a>
								</li>
								<li class="menu-item">
									<a class="nav-link  waves-light active show" href="/la-alpaca" class="link-term mercado-item-title">ALPACA</a>
								</li>
								<li class="menu-item">
									<a class="link-term mercado-item-title dropdown-toggle px-3">COLECCIONES</a>
									<ul class="submenu-item dropright">
										<li><a class="dropdown-item" href="/collections/handmade"><i class="fas fa-angle-right"></i> HANDMADE</a></li>
										<li><a class="dropdown-item" href="/collections/waw-2021"><i class="fas fa-angle-right"></i> WAW | 2021</a></li>
										<li><a class="dropdown-item" href="/collections/eco"><i class="fas fa-angle-right"></i> ECO</a></li>
										<li><a class="dropdown-item" href="/collections/soft"><i class="fas fa-angle-right"></i> SOTF</a></li>
										<li><a class="dropdown-item" href="/collections/alpaca-dorada"><i class="fas fa-angle-right"></i> ALPACA DORADA</a></li>
									</ul>
								</li>
								<li class="menu-item">
									<a href="/detras-de-la-marca" class="link-term mercado-item-title  dropdown-toggle px-3">DETRAS DE LA MARCA</a>
									<ul class="submenu-item dropright">
										<li><a class="dropdown-item" href="#"><i class="fas fa-angle-right"></i> ARTESANOS</a></li>
										<li><a class="dropdown-item" href="#"><i class="fas fa-angle-right"></i> FIBRAS RESPONSABLES</a></li>
										<li><a class="dropdown-item" href="#"><i class="fas fa-angle-right"></i> VIVIENDO NUESTROS VALORES</a></li>
									</ul>
								</li>
								<li class="menu-item">
									<a href="/cart" data-toggle="tooltip" data-placement="bottom" title="Carrito" class="link-direction">
										<i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="28" color="black" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
											<path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
											</svg>
											@if(Cart::count() > 0)
												<span style="margin-left:-10px;width: 15px;height: 15px;font-size:8px" class="badge badge-notification bg-danger">{{Cart::count()}}</span>
											@else
												<span style="margin-left:-10px;width: 16px;height: 15px;font-size:8px"  class="badge badge-notification bg-danger">0</span>
											@endif
										</i>
									</a>
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
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Free Shipping</h4>
								<p class="fc-desc">Free On Oder Over $99</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Garantia</h4>
								<p class="fc-desc">30 Days Money Back</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Safe Payment</h4>
								<p class="fc-desc">Safe your online payment</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Soporte</h4>
								<p class="fc-desc">We Have Support 24/7</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<!--End function info-->

			<div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-md-3">
							<div class="wrap-footer-item">
								<h3 class="item-header">Contactanos</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">45 Grand Central Terminal New York,NY 1017 United State USA</p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">(+123) 456 789 - (+123) 666 888</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">Contact@yourcompany.com</p>
											</li>											
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">

							<div class="wrap-footer-item">
								<h3 class="item-header">Terminos y Condiciones</h3>
								<div class="item-content">
									<div class="wrap-hotline-footer">
										<span class="desc">Call Us toll Free</span>
										<b class="phone-number">(+123) 456 789 - (+123) 666 888</b>
									</div>
								</div>
							</div>

							<div class="wrap-footer-item footer-item-second">
								<h3 class="item-header">Suscribete para ofertas</h3>
								<div class="item-content">
									<div class="wrap-newletter-footer">
										<form action="#" class="frm-newletter" id="frm-newletter">
											<input type="email" class="input-email" name="email" value="" placeholder="Enter your email address">
											<button class="btn-submit">Subscribe</button>
										</form>
									</div>
								</div>
							</div>

						</div>

						<div class="col-md-3">
							<div class="row">
								<div class="wrap-footer-item">
									<h3 class="item-header">Servicio al cliente</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="#" class="link-term">Cambio y devoluciones</a></li>
												<li class="menu-item"><a href="#" class="link-term">Libro de Reclamaciones</a></li>
												<li class="menu-item"><a href="#" class="link-term">Gift Certificates</a></li>
												<li class="menu-item"><a href="#" class="link-term">Affiliates</a></li>
												<li class="menu-item"><a href="#" class="link-term">Wish list</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md- col-xs-12">
							<div class="wrap-footer-item">
								<!-- <h3 class="item-header">We Using Safe Payments:</h3>
								<div class="item-content">
									<div class="wrap-list-item wrap-gallery">
										<img src="assets/images/payment.png" style="max-width: 260px;">
									</div>
								</div> -->
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
							<div class="wrap-footer-item">
								
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
							<!-- <h3 class="item-header">Social network</h3>
								<div class="item-content">
									<div class="wrap-list-item social-network">
										<ul>
											<li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div> -->
							</div>
						</div>

					</div>
				</div>

				<!-- <div class="wrap-back-link">
					<div class="container">
						<div class="back-link-box">
							<h3 class="backlink-title">Quick Links</h3>
							<div class="back-link-row">
								<ul class="list-back-link" >
									<li><span class="row-title">Mobiles:</span></li>
									<li><a href="#" class="redirect-back-link" title="mobile">Mobiles</a></li>
									<li><a href="#" class="redirect-back-link" title="yphones">YPhones</a></li>
									<li><a href="#" class="redirect-back-link" title="Gianee Mobiles GL">Gianee Mobiles GL</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Karbonn">Mobiles Karbonn</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Viva">Mobiles Viva</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Intex">Mobiles Intex</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Micrumex">Mobiles Micrumex</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Bsus">Mobiles Bsus</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Samsyng">Mobiles Samsyng</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Lenova">Mobiles Lenova</a></li>
								</ul>

								<ul class="list-back-link" >
									<li><span class="row-title">Tablets:</span></li>
									<li><a href="#" class="redirect-back-link" title="Plesc YPads">Plesc YPads</a></li>
									<li><a href="#" class="redirect-back-link" title="Samsyng Tablets" >Samsyng Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Qindows Tablets" >Qindows Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Calling Tablets" >Calling Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Micrumex Tablets" >Micrumex Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Lenova Tablets Bsus" >Lenova Tablets Bsus</a></li>
									<li><a href="#" class="redirect-back-link" title="Tablets iBall" >Tablets iBall</a></li>
									<li><a href="#" class="redirect-back-link" title="Tablets Swipe" >Tablets Swipe</a></li>
									<li><a href="#" class="redirect-back-link" title="Tablets TVs, Audio" >Tablets TVs, Audio</a></li>
								</ul>

								<ul class="list-back-link" >
									<li><span class="row-title">Fashion:</span></li>
									<li><a href="#" class="redirect-back-link" title="Sarees Silk" >Sarees Silk</a></li>
									<li><a href="#" class="redirect-back-link" title="sarees Salwar" >sarees Salwar</a></li>
									<li><a href="#" class="redirect-back-link" title="Suits Lehengas" >Suits Lehengas</a></li>
									<li><a href="#" class="redirect-back-link" title="Biba Jewellery" >Biba Jewellery</a></li>
									<li><a href="#" class="redirect-back-link" title="Rings Earrings" >Rings Earrings</a></li>
									<li><a href="#" class="redirect-back-link" title="Diamond Rings" >Diamond Rings</a></li>
									<li><a href="#" class="redirect-back-link" title="Loose Diamond Shoes" >Loose Diamond Shoes</a></li>
									<li><a href="#" class="redirect-back-link" title="BootsMen Watches" >BootsMen Watches</a></li>
									<li><a href="#" class="redirect-back-link" title="Women Watches" >Women Watches</a></li>
								</ul>

							</div>
						</div>
					</div>
				</div> -->

			</div>

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



			<div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright © 2021. All rights reserved</p>
					</div>
					<div class="coppy-right-item item-right">
						<div class="wrap-nav horizontal-nav">
							<ul>
								<li class="menu-item"><a href="about-us.html" class="link-term">Acerca de</a></li>								
								<li class="menu-item"><a href="/contact" class="link-term">Contactanos</a></li>
								<li class="menu-item"><a href="terms-conditions.html" class="link-term">Terms Comerciales</a></li>
								<li class="menu-item"><a href="return-policy.html" class="link-term">Servicio al Cliente</a></li>								
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
	<script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assets/js/functions.js') }}"></script>

	<!-- MBOOTSTRAP -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<!-- <script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script> -->
	<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/mdb.min.js') }}"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @livewireScripts

	@stack('scripts')
</body>
</html>