@extends('layouts.base')

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
                                <span>
                                    <div class="order_total_title">Total neto:</div>
                                    <div class="order_total_amount">{{ $total_neto ?? 0 }}</div>
                                </span>
                                <span>
                                    <div class="order_total_title">IVA:</div>
                                    <div class="order_total_amount">{{ $iva ?? 0 }}</div>
                                </span>
                                <span>
                                    <div class="order_total_title">Total a pagar:</div>
                                    <div class="order_total_amount">{{ $total ?? 0 }}</div>
                                </span>
                            </div>
                        </div>

                        <div class="cart_buttons">
                            @if ($total > 0)
                                <a href="{{ route('cart.removeAll') }}">
                                    <button type="button" class="button cart_button_clear">Eliminar productos</button>
                                </a>
                                <a href="{{ route('cart.payment', ['total' => $total]) }}" type="button" class="button cart_button_checkout">Confirmar</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection()
