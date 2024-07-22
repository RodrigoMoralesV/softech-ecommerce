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
                                @include('cart.cartItem')
                            </ul>
                        </div>

                        <!-- Order Total -->
                        <div class="order_total">
                            <div class="order_total_content text-md-right">
                                <div class="order_total_title">Orden Total:</div>
                                <div class="order_total_amount">{{ $total ?? 0 }}</div>
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
