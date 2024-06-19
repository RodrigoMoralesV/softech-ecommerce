@extends('layout')

@section('title', 'Carrito')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('styles/cart_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/cart_responsive.css') }}">
@endsection

@section('content')
<!-- Cart Section -->
<div class="cart_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
				<div class="cart_container">
					<div class="cart_title">Carrito de Compras</div>
					<div class="cart_items">
						<ul class="cart_list">
							@if (count($cartItems) > 0)
								@foreach ($cartItems as $item)
									<li class="cart_item clearfix">
										<div class="cart_item_image"><img src="{{ $item['image'] }}" alt=""></div>
										<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
											<div class="cart_item_name cart_info_col">
												<div class="cart_item_title">Producto/div>
												<div class="cart_item_text">{{ $item['name'] }}</div>
											</div>
											<div class="cart_item_color cart_info_col">
												<div class="cart_item_title">Color</div>
												<div class="cart_item_text"><span style="background-color:#999999;"></span>Color</div>
											</div>
											<div class="cart_item_quantity cart_info_col">
												<div class="cart_item_title">Cantidad</div>
												<div class="cart_item_text">{{ $item['quantity'] }}</div>
											</div>
											<div class="cart_item_price cart_info_col">
												<div class="cart_item_title">Precio</div>
												<div class="cart_item_text">${{ $item['price'] }}</div>
											</div>
											<div class="cart_item_total cart_info_col">
												<div class="cart_item_title">Total</div>
												<div class="cart_item_text">${{ ($item['price'] - $item['value']) * $item['quantity'] }}</div>
											</div>
										</div>
									</li>
								@endforeach
							@else
								<li class="cart_item clearfix ">
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between ">
										<div class="cart_item_name cart_info_col">
											<div class="text-center"><h4>Su carrito de compra se encuentra vacío</h4></div>
										</div>
									</div>
								</li>
							@endif
						</ul>
					</div>
					@if (count($cartItems) > 0)
						<!-- Order Total -->
						<div class="order_total">
							<div class="order_total_content text-md-right">
								<div class="order_total_title">Total</div>
								<div class="order_total_amount">${{ $total }}</div>
							</div>
						</div>
						<div class="cart_buttons">
							<form action="{{ route('cart.remove') }}" method="POST">
								@csrf
								<button type="submit" class="button cart_button_clear">Eliminar</button>
							</form>
							<a href="{{ route('payment') }}" class="button cart_button_checkout">Comprar</a>
						</div>
					@endif
				</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
