@php
    $numberAddedProducts = 0;
    if (session()->has('cart')) {
        $numberAddedProducts = count(session()->get('cart'));
    }
@endphp

<header class="header main_nav">

    <!-- Header Main -->

    <div class="header_main">
        <div class="container">
            <div class="row">

                <!-- Logo -->
                <div class="col-lg-2 col-sm-3 col-3 order-1">
                    <div class="logo_container">
                        <div class="logo">
                            <a href="{{ url('index') }}">
                                <img src="{{ url('images/logo.svg') }}" width="100px">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Search -->
                @include('../partials/searchBar')
                <!-- /Search -->

                <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                    <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                        <!-- Cart -->
                        <div class="cart mr-5">
                            <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                <div class="cart_icon">
                                    <img src="{{ url('images/cart.png') }}" alt="">
                                    <div class="cart_count"><span>{{ $numberAddedProducts }}</span></div>
                                </div>
                                <div class="cart_content">
                                    <div class="cart_text">
                                        <a href="{{ route('cart.cart') }}">Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Profile -->
                        <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                            <div class="user_icon"><img src="{{ url('images/user.svg') }}" alt=""></div>
                            <div class="wishlist_content">
                                <div class="wishlist_text">
                                    @if (Auth::user())
                                    <a href="#" id="userDropdown" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ Auth::user()->nombre_cliente }}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                        <li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                Cerrar sesión
                                            </a>
                                        </li>
                                    </ul>
                                    @else
                                    <a href="{{ route('login') }}">
                                        Login
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>