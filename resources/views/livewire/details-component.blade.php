
<main id="main" class="main-site">
    <style>
        .regprice{
            font-weight: 300;
            font-size: 13px;
            color:white;
            text-decoration: line-through;
            padding-left: 10px;
        }
        .show{
            width: 400px;
            height: 400px;
            z-index:1000;
        }

        .small-img{
            width: 350px;
            height: 70px;
            margin-top: 10px;
            position: relative;
            left: 25px;
        }

        .small-img .icon-left, .small-img .icon-right{
            width: 10px;
            height: 14px;
            cursor: pointer;
            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto 0;
        }
        .small-img .icon-left{
            transform: rotate(180deg)
        }
        .small-img .icon-right{
            right: 0;
        }

        .small-img .icon-left:hover,
        .small-img .icon-right:hover{
            opacity: .5;
        }

        .small-container{
            width: 310px;
            height: 70px;
            overflow: hidden;
            position: absolute;
            left: 0;
            right: 0;
            margin: 0 auto;
        }
        .small-container div{
            width: 800%;
            position: relative;
        }

        .small-container .show-small-img{
            width: 70px;
            height: 70px;
            margin-right: 30px;
            cursor: pointer;
            float:left;
        }
        .small-container .show-small-img:last-of-type{
            margin-right: 15px;
        }
    </style>

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">Inicio</a></li>
                <li class="item-link"><span>Detalles</span></li>
            </ul>
        </div>
        
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                <div class="wrap-product-detail">
                    <div class="detail-media">

                    <!-- <div class="show" href="{{asset('assets/images/prueba/p4.png') }}">
                        <img src="{{asset('assets/images/prueba/p4.png') }}" id="show-img">
                    </div>

                    
                    <div class="small-img">
                        <img src="{{ asset('assets/images/iconos/iconext.png') }}" class="icon-left" alt="" id="prev-img">
                        <div class="small-container">
                        <div id="small-img-roll">
                            <img src="{{asset('assets/prueba/images/p4.png') }}" class="show-small-img" alt="">
                            <img src="{{asset('assets/images/prueba/p3.jpg') }}" class="show-small-img" alt="">
                            <img src="{{asset('assets/images/prueba/p6.jpg') }}" class="show-small-img" alt="">
                            <img src="{{asset('assets/images/prueba/p5.jpg') }}" class="show-small-img" alt="">
                            <img src="{{asset('assets/images/prueba/p2.jpg') }}" class="show-small-img" alt="">
                            <img src="{{asset('assets/images/prueba/p1.jpg') }}" class="show-small-img" alt="">
                        </div>
                        </div>
                        <img src="{{ asset('assets/images/iconos/iconext.png') }}" class="icon-right" alt="" id="next-img">
                    </div> -->
                        <div class="show" href="{{ asset('assets/images/products') }}/{{$product->image}}">
                            <img src="{{ asset('assets/images/products') }}/{{$product->image}}" id="show-img">
                        </div>
                        <!-- <li data-thumb="{{ asset('assets/images/products') }}/{{$product->image}}">
                            <figure  class="show">
                                <img id="show-img" src="{{ asset('assets/images/products') }}/{{$product->image}}" alt="{{$product->name}}" />
                            </figure>
                        </li> -->
                        @php
                            $images = explode(",",$product->images);
                        @endphp
                    
                        <div class="small-img">
                            <img src="{{ asset('assets/images/iconos/iconext.png') }}" class="icon-left" alt="" id="prev-img">
                            <div class="small-container">
                            @foreach($images as $image)
                                @if($image)
                                <div id="small-img-roll">
                                    <img src="{{ asset('assets/images/products') }}/{{$image}}" class="show-small-img" alt="{{$product->name}}"/>
                                </div>
                                @endif
                            @endforeach
                            </div>
                            <img src="{{ asset('assets/images/iconos/iconext.png') }}" class="icon-right" alt="" id="next-img">
                        </div>
                    </div>


                    <div class="detail-info">
                        <h2 class="product-name">{{$product->name}}</h2>
                        <div class="short-desc">
                            {{$product->short_description}}
                        </div>
                        <!-- <div class="wrap-social">
                            <a class="link-socail" href="#"><img src="{{ asset('assets/images/social-list.png') }}" alt=""></a>
                        </div> -->
                        @if($product->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                            <div class="wrap-price">
                                <span class="product-price">S/{{$product->sale_price}}</span>
                                <del><span class="product-price regprice">${{$product->regular_price}}</span></del>
                            </div>
                        @else
                            <div class="wrap-price"><span class="product-price">S/{{$product->regular_price}}</span></div>
                        @endif
                        <div class="stock-info in-stock">
                            <p class="availability">Disponibilidad: <b>{{$product->stock_status}}</b></p>
                            <p class="availability">Cantidad Disponible: <b>{{$product->quantity}}</b></p>
                        </div>
                        <div class="quantity">
                            <span>Cantidad:</span>
                            <div class="quantity-input">
                                <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >
                                
                                <a class="btn btn-reduce" href="#"></a>
                                <a class="btn btn-increase" href="#"></a>
                            </div>
                        </div>
                        <div class="wrap-butons">
                            @if($product->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                                <a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->sale_price}})">Agregar al Carrito</a>
                            @else
                                <a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">Agregar al Carrito</a>
                            @endif
                            <!-- <div class="wrap-btn">
                                <a href="#" class="btn btn-compare">Add Compare</a>
                                <a href="#" class="btn btn-wishlist">Add Wishlist</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="advance-info">
                        <div class="tab-control normal">
                            <a href="#description" class="tab-control-item active">descripcion</a>
                            <a href="#add_infomation" class="tab-control-item">Infomacion Adicional</a>
                            <!-- <a href="#review" class="tab-control-item">Reseñas</a> -->
                        </div>
                        <div class="tab-contents">
                            <div class="tab-content-item active" id="description">
                              {{$product->description}}
                            </div>
                            <div class="tab-content-item " id="add_infomation">
                                <table class="shop_attributes">
                                    <tbody>
                                        <tr>
                                            <th>Weight</th><td class="product_weight">1 kg</td>
                                        </tr>
                                        <tr>
                                            <th>Dimensions</th><td class="product_dimensions">12 x 15 x 23 cm</td>
                                        </tr>
                                        <tr>
                                            <th>Color</th><td><p>Black, Blue, Grey, Violet, Yellow</p></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- <div class="tab-content-item " id="review">
                                
                                <div class="wrap-review-form">
                                    
                                    <div id="comments">
                                        <h2 class="woocommerce-Reviews-title">01 review for <span>Radiant-360 R6 Chainsaw Omnidirectional [Orage]</span></h2>
                                        <ol class="commentlist">
                                            <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-20">
                                                <div id="comment-20" class="comment_container"> 
                                                    <img alt="" src="{{ asset('assets/images/author-avata.jpg') }}" height="80" width="80">
                                                    <div class="comment-text">
                                                        <div class="star-rating">
                                                            <span class="width-80-percent">Rated <strong class="rating">5</strong> out of 5</span>
                                                        </div>
                                                        <p class="meta"> 
                                                            <strong class="woocommerce-review__author">admin</strong> 
                                                            <span class="woocommerce-review__dash">–</span>
                                                            <time class="woocommerce-review__published-date" datetime="2008-02-14 20:00" >Tue, Aug 15,  2017</time>
                                                        </p>
                                                        <div class="description">
                                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>

                                    <div id="review_form_wrapper">
                                        <div id="review_form">
                                            <div id="respond" class="comment-respond"> 

                                                <form action="#" method="post" id="commentform" class="comment-form" novalidate="">
                                                    <p class="comment-notes">
                                                        <span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
                                                    </p>
                                                    <div class="comment-form-rating">
                                                        <span>Your rating</span>
                                                        <p class="stars">
                                                            
                                                            <label for="rated-1"></label>
                                                            <input type="radio" id="rated-1" name="rating" value="1">
                                                            <label for="rated-2"></label>
                                                            <input type="radio" id="rated-2" name="rating" value="2">
                                                            <label for="rated-3"></label>
                                                            <input type="radio" id="rated-3" name="rating" value="3">
                                                            <label for="rated-4"></label>
                                                            <input type="radio" id="rated-4" name="rating" value="4">
                                                            <label for="rated-5"></label>
                                                            <input type="radio" id="rated-5" name="rating" value="5" checked="checked">
                                                        </p>
                                                    </div>
                                                    <p class="comment-form-author">
                                                        <label for="author">Name <span class="required">*</span></label> 
                                                        <input id="author" name="author" type="text" value="">
                                                    </p>
                                                    <p class="comment-form-email">
                                                        <label for="email">Email <span class="required">*</span></label> 
                                                        <input id="email" name="email" type="email" value="" >
                                                    </p>
                                                    <p class="comment-form-comment">
                                                        <label for="comment">Your review <span class="required">*</span>
                                                        </label>
                                                        <textarea id="comment" name="comment" cols="45" rows="8"></textarea>
                                                    </p>
                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                    </p>
                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div><!--end main products area-->

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                <div class="widget widget-our-services ">
                    <div class="widget-content">
                        <ul class="our-services">

                            <!-- <li class="service">
                                <a class="link-to-service" href="#">
                                    <i class="fa fa-truck" aria-hidden="true"></i>
                                    <div class="right-content">
                                        <b class="title">Free Shipping</b>
                                        <span class="subtitle">On Oder Over $99</span>
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                    </div>
                                </a>
                            </li>

                            <li class="service">
                                <a class="link-to-service" href="#">
                                    <i class="fa fa-gift" aria-hidden="true"></i>
                                    <div class="right-content">
                                        <b class="title">Special Offer</b>
                                        <span class="subtitle">Get a gift!</span>
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                    </div>
                                </a>
                            </li>

                            <li class="service">
                                <a class="link-to-service" href="#">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                    <div class="right-content">
                                        <b class="title">Order Return</b>
                                        <span class="subtitle">Return within 7 days</span>
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                    </div>
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <!-- Categories widget-->

                <div class="widget mercado-widget widget-product">
                    <h2 class="widget-title">Populares</h2>
                    <div class="widget-content">
                        <ul class="products">
                            @foreach ($popular_products as $p_product)
                           
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="{{route('product.details', ['slug'=>$p_product->slug])}}" title="{{$p_product->name}}">
                                            <img src="{{ asset('assets/images/products') }}/{{$p_product->image}}" alt="{{$p_product->name}}">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a  href="{{route('product.details', ['slug'=>$p_product->slug])}}" title="{{$p_product->name}}" class="product-name"><span>{{$p_product->name}}</span></a>
                                        <div class="wrap-price"><span class="product-price">S/.{{$product->regular_price}}</span></div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div><!--end sitebar-->

            <div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wrap-show-advance-info-box style-1 box-in-site">
                    <h3 class="title-box">Productos relacionados</h3>
                    <div class="wrap-products">
                        <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >
                            @foreach ($related_products as $r_product)

                            
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="{{route('product.details', ['slug'=>$r_product->slug])}}" title="{{$r_product->name}}">
                                        <img src="{{ asset('assets/images/products') }}/{{$r_product->image}}" width="214" height="214" alt="{{$r_product->name}}">
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">new</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="{{route('product.details', ['slug'=>$r_product->slug])}}" class="product-name"><span>{{$r_product->name}}</span></a>
                                    <div class="wrap-price"><span class="product-price">S/.{{$r_product->regular_price}}</span></div>
                                </div>
                            </div>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

        </div><!--end row-->

    </div>

</main>

<script>
    var magnifying_area =  document.getElementById("magnifying_area");
    var magnifying_img =  document.getElementById("magnifying_img");

    var magnifying_area2 =  document.getElementById("magnifying_area2");
    var magnifying_img2 =  document.getElementById("magnifying_img2");

    magnifying_area.addEventListener("mousemove",function(event){
        clientX = event.clientX - magnifying_area.offsetLeft
        clientY = event.clientY - magnifying_area.offsetTop
        
        var mWidth = magnifying_area.offsetWidth
        var mHeight = magnifying_area.offsetHeight
        clientX = clientX / mWidth * 400
        clientY = clientY / mHeight * 60

        //magnifying_img.style.transform = 'translate(-50%,-50%) scale(2)'
        magnifying_img.style.transform = 'translate(-'+clientX+'%, -'+clientY+'%) scale(1.6)'
    })

    magnifying_area2.addEventListener("mousemove",function(event){
        clientX = event.clientX - magnifying_area2.offsetLeft
        clientY = event.clientY - magnifying_area2.offsetTop
        
        var mWidth = magnifying_area2.offsetWidth
        var mHeight = magnifying_area2.offsetHeight
        clientX = clientX / mWidth * 400
        clientY = clientY / mHeight * 60

        //magnifying_img.style.transform = 'translate(-50%,-50%) scale(2)'
        magnifying_img2.style.transform = 'translate(-'+clientX+'%, -'+clientY+'%) scale(1.6)'
    })

    magnifying_area.addEventListener("mouseleave",function(){
        magnifying_img.style.transform = 'translate(-50%,-50%) scale(1)'
    })

    magnifying_area2.addEventListener("mouseleave",function(){
        magnifying_img2.style.transform = 'translate(-50%,-50%) scale(1)'
    })
</script>