<a style="margin:-5px" href="/cart" data-toggle="tooltip" data-placement="bottom" title="Carrito" class="link-direction">							
    <i><img src="https://img.icons8.com/ios-filled/32/000000/shopping-bag.png">
        @if(Cart::count() > 0)
            <p style="font-weight:normal;font-family:Arial, Helvetica, sans-serif;color:white;margin-left:11px;margin-top:-20px;width: 16px;height: 15px;font-size:15px">{{Cart::count()}}</p>
        @else
            <p style="font-weight:bold;font-family:Arial, Helvetica, sans-serif;color:white;margin-left:11px;margin-top:-20px;width: 16px;height: 15px;font-size:15px">0</p>
        @endif
        </img>
    </i>
</a>
