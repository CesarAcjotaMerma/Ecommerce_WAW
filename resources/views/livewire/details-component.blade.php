<main id="main" class="main-site">
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
                        <div class="show" href="{{ asset('assets/images/products') }}/{{$product->image}}" wire:ignore>
                            <img src="{{ asset('assets/images/products') }}/{{$product->image}}" id="show-img">
                        </div>
                        @php
                            $images = explode(",",$product->images);
                        @endphp
                    
                        <div class="small-img">
                            <img src="{{ asset('assets/images/iconos/iconext.png') }}" class="icon-left" alt="{{$product->name}}" id="prev-img">
                            <div class="small-container">
                                <div id="small-img-roll">
                                    @foreach($images as $image)
                                        @if($image)
                                            <img src="{{ asset('assets/images/products') }}/{{$image}}" class="show-small-img" alt="{{$product->name}}"/>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/iconos/iconext.png') }}" class="icon-right" alt="{{$product->name}}" id="next-img">
                        </div>
                    </div>

                    <div class="detail-info">
                        <h2 class="product-name">{{$product->name}}</h2>
                        <div class="short-desc">
                            {{$product->short_description}}
                        </div>
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
                        <!-- <div class="widget mercado-widget stock-info in-stock filter-widget">
                            <div class="widget-content">
                            <p>Talla Disponible: </p>
                                <ul class="list-style inline-round ">
                                    @if($product->size == 'x-small')
                                        <li class="list-item"><a class="filter-link" href="#">X-S</a></li>
                                    @elseif($product->size == 'small')
                                        <li class="list-item"><a class="filter-link " href="#">S</a></li>
                                    @elseif($product->size == 'medium')
                                        <li class="list-item"><a class="filter-link " href="#">M</a></li>
                                    @elseif($product->size == 'large')
                                        <li class="list-item"><a class="filter-link " href="#">l</a></li>
                                    @elseif($product->size == 'x-large')
                                        <li class="list-item"><a class="filter-link " href="#">Xl</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div> -->
                        <div class="quantity">
                            <span>Cantidad:</span>
                            <div class="quantity-input">
                                <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" wire:model="qty">
                                <a class="btn btn-reduce" href="#" wire:click.prevent="decreseQuantity"></a>
                                <a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity"></a>
                            </div>
                        </div>
                        <div class="wrap-butons">
                            @if($product->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                                <a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->sale_price}})"><span style="font-size: 25px;"><i class="fas fa-cart-plus"></i></span></a>
                            @else
                                <a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"><span style="font-size: 25px;"><i class="fas fa-cart-plus"></i></span></a>
                            @endif
                            <!-- <a href="#" class="btn add-to-cart" >Agregar a Favoritos</a> -->
                        </div>
                    </div>
                    <div class="advance-info">
                        <div class="tab-control normal">
                            <a href="#description" class="tab-control-item active">Descripcion</a>
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
                        </div>
                    </div>
                </div>
            </div><!--end main products area-->

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                <div class="widget widget-our-services ">
                    <div class="widget-content">
                        <ul class="our-services">
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
        </div>
    </div>
</main>