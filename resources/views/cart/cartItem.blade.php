@forelse ($cartItems as $cartItem)
    <li class="cart_item clearfix">
        <div class="cart_item_image"><img src="images/shopping_cart.jpg" alt="">
        </div>
        <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
            <div class="cart_item_name cart_info_col">
                <div class="cart_item_title">Nombre</div>
                <div class="cart_item_text">{{ $cartItem['descripcion_producto'] }}</div>
            </div>
            <div class="cart_item_quantity cart_info_col">
                <div class="cart_item_title">Cantidad</div>
                <div class="cart_item_text">{{ $cartItem['stock'] }}</div>
            </div>
            <div class="cart_item_price cart_info_col">
                <div class="cart_item_title">Precio</div>
                <div class="cart_item_text">{{ $cartItem['valor_unitario'] }}
                </div>
            </div>
            <div class="cart_item_total cart_info_col">
                <div class="cart_item_title">Total</div>
                <div class="cart_item_text">{{ $cartItem['valor_total'] }}
                </div>
            </div>
        </div>
        <span class="cart_close"><a href="{{ route('cart.remove', $cartItem['id_producto']) }}">x</a></span>
    </li>
@empty
    <li class="h1 text-center">No ha añadido productos al carrito</li>
@endforelse
