@extends('layout')

@section('title', 'Carrito')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{ url('styles/cart_styles.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('styles/cart_responsive.css') }}">
@endsection

@section('content')

	<!-- Cart -->

	<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="cart_container">
						<div class="cart_title">Carrito de compras</div>
						<div class="cart_items">
							<ul class="cart_list">
								<li class="cart_item clearfix">
									<div class="cart_item_image"><img src="images/shopping_cart.jpg" alt=""></div>
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Nombre</div>
											<div class="cart_item_text">MacBook Air 13</div>
										</div>
										<div class="cart_item_color cart_info_col">
											<div class="cart_item_title">Color</div>
											<div class="cart_item_text"><span style="background-color:#999999;"></span>Plateado</div>
										</div>
										<div class="cart_item_quantity cart_info_col">
											<div class="cart_item_title">Cantidad</div>
											<div class="cart_item_text">1</div>
										</div>
										<div class="cart_item_price cart_info_col">
											<div class="cart_item_title">Precio</div>
											<div class="cart_item_text">$2000</div>
										</div>
										<div class="cart_item_total cart_info_col">
											<div class="cart_item_title">Total</div>
											<div class="cart_item_text">$2000</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
						
						<!-- Order Total -->
						<div class="order_total">
							<div class="order_total_content text-md-right">
								<div class="order_total_title">Orden Total:</div>
								<div class="order_total_amount">$2000</div>
							</div>
						</div>

						<div class="cart_buttons">
							<button type="button" class="button cart_button_clear">Cancelar</button>
							<button type="button" class="button cart_button_checkout">Confirmar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection()