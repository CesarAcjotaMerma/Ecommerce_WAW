<main id="main">
		<div class="container">

			<!--MAIN SLIDE-->
			<div class="wrap-main-slide">
				<div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
					@foreach($sliders as $slider)
						<div class="item-slide">
							<img src="{{ asset('assets/images/sliders')}}/{{ $slider->image}}" height="30" alt="" class="img-slide">
							<div class="slide-info slide-1">
								<h2 class="f-title"><b>{{$slider->title}}</b></h2>
								<span class="subtitle">{{$slider->subtitle}}</span>
								<p class="sale-info">Preciasos: <span class="price">S/.{{$slider->price}}</span></p>
								<a href="{{$slider->link}}" class="btn-link">Ver</a>
							</div>
						</div>
					@endforeach
				</div>
			</div>

			<!-- POPUP -->
			<!-- <div class="popup">
					<div class="contentBox">
						<div class="close"></div>
						<div class="imgBx">
							<img src="{{ asset('assets/images/products/1626470161.jpg') }}" alt="">
						</div>
						<div class="modelContent">
							<div>
								<h3>OFERTAS FIESTAS PATRIAS</h3>
								<h2>80<sup>%</sup><span> Off</span></h2>
								<p>Tenemos los ultimos productos en ofertas gratis</p>
								<a type="submit" class="btn btn-danger" href="/shop">VER</a>
							</div>
						</div>
					</div>
			</div> -->

			<div class="popup">
				@foreach($popups as $popup)
					<div class="contentBox">
						<div class="close"></div>
						<div class="imgBx">
							<img src="{{ asset('assets/images/sliders') }}/{{$popup->image}}" alt="">
						</div>
						<div class="modelContent">
							<div>
								<h3>{{$popup->title}}</h3>
								<h2>80<sup>%</sup><span> Off</span></h2>
								<p>{{$popup->subtitle}}</p>
								<a type="submit" class="btn btn-danger" href="{{$popup->link}}">VER</a>
							</div>
						</div>
					</div>
				@endforeach
			</div>

			<!-- Model automatico -->

			<script>
				const popup = document.querySelector('.popup');
				const close = document.querySelector('.close');

				window.onload = function(){
					setTimeout(function(){
						popup.style.display = "flex"
					}, 5000)
				}
				close.addEventListener('click', () =>{
					popup.style.display = "none"
				})
			</script>

			<!--Product Categories-->
			<!-- <div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Product Categories</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="{{ asset('assets/images/fashion-accesories-banner.jpg') }}" width="1170" height="240" alt=""></figure>
					</a>
				</div>
			</div>		 -->

			<!--Latest Products-->
			<div class="wrap-show-advance-info-box style-1">
				<div style="text-align:center;color:white; margin:20px 0 20px 0;background-color:#f2f2f2;">
					<div style="padding:20px;color:black;">
						<h4 style=" font-weight:bold;" class="title">LAS MAS PRENDAS FINAS</h4>
						<h5>Detalle en nuestro proceso textil garantiza incomparable suavidad, alta resistencia y gran finura.</h5>
					</div>
				</div>

				<div class="wrap-show-advance-info-box style-2">
					<h3 class="title-box">Ultimas Prendas</h3>
					<div class="wrap-top-banner">
						<a href="#" class="link-banner banner-effect-2">
							<!-- <figure><img src="{{ asset('assets/images/fashion-accesories-banner.jpg') }}" width="1170" height="240" alt=""></figure> -->
						</a>
					</div>
				</div>	

				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">						
						<div class="tab-contents">
							<div class="tab-content-item active" id="digital_1a">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="3" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
									@foreach ($lproducts as $lproduct)
										<div class="product product-style-2 equal-elem ">
											<div class="product-thumnail">
												<a href="{{route('product.details',['slug'=>$lproduct->slug])}}" title="{{$lproduct->name}}">
													<figure><img src="{{ asset('assets/images/products')}}/{{$lproduct->image}}" width="800" height="800" alt="{{$lproduct->name}}"></figure>
												</a>
											</div>
											<div class="product-info">
												<a href="{{route('product.details',['slug'=>$lproduct->slug])}}" class="product-name"><span>{{$lproduct->name}}</span></a>
												<div class="wrap-price"><span class="product-price">S/.{{$lproduct->regular_price}}</span></div>
											</div>
										</div>
									@endforeach

								</div>
							</div>							
						</div>
					</div>
				</div>

				<div class="bg-image d-flex justify-content-center align-items-center" style="
					background-image: url('https://incalpacastores.com/images/background-alpacas.jpg');
					height: 30vh;filter: brightness(40%);color:#f2f2f2;
					">
					<div style="margin:20px 0 20px 0;color:#fff" class="row">
						<div  style="padding:10px;" class="col-sm-9 p-3 ">
							<!-- <h4 style=" font-weight:bold;">SABEMOS QUE AMAS LA FIBRA DE ALPACA</h4>
							<h5>SUSCRÍBETE Y RECIBE LAS ÚLTIMAS NOVEDADES Y PROMOCIONES</h5> -->
							
						</div>
						
						<div  style="padding:10px;" class="col-md-2">
							<!-- <label>VISITANOS: </label>
							<h2>Hola genuca</h2> -->
							<i class="icon-box-item"></i>
						</div>
				</div>
				</div>


				<div style="margin:20px 0 20px 0;" class="row">
					<div style="padding:20px;background-color:#f2f2f2;" class="col-md-4">
						<h4 style=" font-weight:bold;">PAGO SEGURO</h4>
						<h5>Revisar Terminos y condiciones</h5>
					</div>
					<div  style="padding:20px; background-color:#f2f2f2;" class="col-md-4">
						<h4 style=" font-weight:bold;">PRENDAS DE CALIDAD</h4>
						<h5>Revisar Terminos y condiciones</h5>
					</div>
					<div  style="padding:20px; background-color:#f2f2f2;" class="col-md-4">
						<h4 style=" font-weight:bold;">ASESORIA PERSONALIDO</h4>
						<h5>Revisar Terminos y condiciones</h5>
					</div>
				</div>
				
			</div>
		</div>
	</main>