<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">Inicio</a></li>
                <li class="item-link"><span>Carrito</span></li>
            </ul>
        </div>
        <div class=" main-content-area">

            <div class="wrap-iten-in-cart">
                @if(Session::has('success_mesasge'))
                    <div class="alert alert-success">
                        <strong>Success</strong> {{Session::get('success_mesasge')}}
                    </div>
                @endif
                @if(Cart::instance('cart')->count() > 0)
                <h3 class="box-title">Products Name</h3>
                <ul class="products-cart">
                    @foreach (Cart::instance('cart')->content() as $item)
                        <li class="pr-cart-item">
                            <div class="product-image">
                                <figure><img src="{{ ('assets/images/products') }}/{{$item->model->image}}" alt="{{$item->model->name}}"></figure>
                            </div>
                            <div class="product-name">
                                <a class="link-to-product" href="{{route('product.details', ['slug'=>$item->model->slug])}}">{{$item->model->name}}</a>
                            </div>
                            <div class="price-field produtc-price"><p class="price">S./{{$item->model->regular_price}}</p></div>
                            <div class="quantity">
                                <div class="quantity-input">
                                    <input type="text" name="product-quatity" value="{{$item->qty}}" data-max="120" pattern="[0-9]*" >									
                                    <a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('{{$item->rowId}}')"></a>
                                    <a class="btn btn-reduce" href="#"  wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"></a>
                                </div>
                            </div>
                            <div class="price-field sub-total"><p class="price">S/.{{$item->subtotal}}</p></div>
                            <div class="delete">
                                <!-- eliminar los items del carrito de compras -->
                                <a href="#" wire:click.prevent="destroy('{{$item->rowId}}')" class="btn btn-delete" title="">
                                    <span>Delete from your cart</span>
                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                </a>
                            </div>
                        </li>
                    @endforeach										
                </ul>
                @else
                    <h4>Hay nay productos agregado en el carrito</h4>
                @endif
            </div>

            <div class="summary">
                <div class="order-summary">
                    <h4 class="title-box">Resumen del orden</h4>
                    <p class="summary-info"><span class="title">SubTotal</span><b class="index">S/.{{Cart::instance('cart')->subtotal()}}</b></p>
                    <p class="summary-info total-info"><span class="title">Total</span><b class="index">S/.{{Cart::instance('cart')->subtotal()}}</b></p>
                    <!-- <p class="summary-info"><span class="title">IGV</span><b class="index">S/.{{Cart::instance('cart')->tax()}}</b></p> -->
                    <!-- <p class="summary-info"><span class="title">Delivery</span><b class="index">Delivery Gratis</b></p> -->
                    <!-- <p class="summary-info total-info "><span class="title">Total</span><b class="index">S/.{{Cart::instance('cart')->total()}}</b></p> -->
                </div>
                <div class="checkout-info">
                    <!-- <label class="checkbox-field">
                        <input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>I have promo code</span>
                    </label> -->
                    <h4>PAGAR</h4>
                    <!-- <div class="btn btn-checkout" id="paypal-button-container"></div> -->
                    @if(Cart::instance('cart')->count() > 0)
                        <a class="btn btn-checkout" target="_blank" href="https://api.whatsApp.com/send?phone=+51900989543&text=Hola! mi compra es el siguiente == DETALLES DE LA COMPRA >>> @foreach (Cart::instance('cart')->content() as $item)&nbsp; NOMBRE: {{$item->model->name}} || &nbsp;CODIGO DEL PRODUCTO: {{$item->model->SKU}} || &nbsp;CANTIDAD: {{$item->qty}} |---| @endforeach &nbsp; TOTAL A PAGAR =&nbsp;{{Cart::instance('cart')->subtotal()}}">Finalizar Compra</a>
                    @else
                        <a class="btn btn-checkout" href="/shop"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Regresar a la Tienda</a>
                    @endif
                    <!-- <a class="link-to-shop" href="/shop">Continuar Comprando<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a> -->
                </div>
                <div class="update-clear">
                    <a class="btn btn-clear" href="#" wire:click.prevent="destroyAll()">Vaciar todo el Carrito</a>
                    <!-- <a class="btn btn-update" href="#">Actualizar Carrito</a> -->
                </div>
            </div>


            <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>

            <!-- <script>

                paypal.Buttons({

                    createOrder: function(data, actions) {
                        return actions.order.create({
                            purchase_units: [{
                                amount: {
                                    value: '{{Cart::instance('cart')->total()}}'
                                }
                            }]
                        });
                    },

                    onApprove: function(data, actions) {
                        return actions.order.capture().then(function(details) {
                            alert('Transaction completed by ' + details.payer.name.given_name + '!');
                        });
                    }


                }).render('#paypal-button-container');
            </script> -->

        </div>
    </div>

</main>

