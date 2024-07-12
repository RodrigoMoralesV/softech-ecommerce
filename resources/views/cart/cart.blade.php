@extends('layout')

@section('title', 'Carrito')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/cart_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/cart_responsive.css') }}">
@endsection

@section('content')
<!-- Cart Section -->
<div class="cart_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cart_container">
                    <div class="cart_title">Tus Compras</div>
                    <div class="cart_items">
                        <ul class="cart_list">
                            @if (count($cartItems) > 0)
                                @foreach ($cartItems as $item)
                                    <li class="cart_item clearfix" id="cart-item-{{ $item['id_producto'] }}">
                                        <div class="cart_item_image"><img src="{{ $item['image'] }}" alt=""></div>
                                        <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                            <div class="cart_info_col">
                                                <div class="cart_item_title">Producto</div>
                                                <div class="cart_item_text">{{ $item['name'] }}</div>
                                            </div>
                                            <div class="cart_info_col">
                                                <div class="cart_item_title">Cantidad</div>
                                                <div class="cart_item_text">{{ $item['quantity'] }}</div>
                                            </div>
                                            <div class="cart_info_col">
                                                <div class="cart_item_title">Precio</div>
                                                <div class="cart_item_text">${{ number_format($item['price'], 0, ',', '.') }}</div>
                                            </div>
                                            <div class="cart_info_col">
                                                <div class="cart_item_title">Total</div>
                                                <div class="cart_item_text">${{ number_format(($item['price'] - $item['value']) * $item['quantity'], 0, ',', '.') }}</div>
                                            </div>
                                            <div class="cart_info_col">
                                                <!-- Formulario para eliminar producto del carrito -->
                                                <form class="removeFromCartForm" data-product-id="{{ $item['id_producto'] }}" action="{{ route('cart.remove', ['id_producto' => $item['id_producto']]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="button cart_button_clear">Eliminar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                <li class="cart_item clearfix">
                                    <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                        <div class="cart_info_col">
                                            <div class="text-center">
                                                <h4>Su carrito de compra se encuentra vacío</h4>
                                                <p>Agregue productos a su carrito para comenzar a comprar.</p>
                                            </div>
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
                                <div class="order_total_amount" id="order_total_amount">${{ number_format($total, 0, ',', '.') }}</div>
                            </div>
                        </div>
                        <div class="cart_buttons">
                            <!-- Botón para proceder al pago -->
                            <button type="button" class="button cart_button_checkout">Comprar</button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div id="productDeletedAlert" class="alert alert-success" style="display: none;">Producto eliminado</div>

<script>
    document.querySelectorAll('.removeFromCartForm').forEach(form => {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevenir el comportamiento por defecto del formulario

            const productId = this.dataset.productId;
            const formData = new FormData(this);
            const actionUrl = this.action;

            fetch(actionUrl, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.message === 'Producto eliminado del carrito') {
                    // Eliminar el producto del DOM
                    document.getElementById(`cart-item-${productId}`).remove();
                    
                    // Actualizar el total y el número de elementos en el carrito
                    document.getElementById('order_total_amount').textContent = `$${new Intl.NumberFormat('es-ES').format(data.total)}`;

                    // Mostrar la alerta de eliminación
                    document.getElementById('productDeletedAlert').style.display = 'block';
                    setTimeout(() => {
                        document.getElementById('productDeletedAlert').style.display = 'none';
                    }, 2000);
                } else {
                    console.error('Error al eliminar producto');
                }
            })
            .catch(error => console.error('Error en la solicitud:', error));
        });
    });
</script>

@endsection
