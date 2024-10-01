@extends('layouts.base')

@section('title', 'Resultado de la Busqueda')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/shop_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/shop_responsive.css') }}">
@endsection()

@section('content')

    <!-- Home -->

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg">
        </div>
        <div class="home_overlay"></div>
        <div class="home_content d-flex flex-column align-items-center justify-content-center">
            <h2 class="home_title">Mostrando resultados por: {{ $search ?? 'Todo' }}</h2>
        </div>
    </div>

    <!-- Shop -->

    <div class="shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">

                    <!-- Shop Sidebar -->
                    <div class="shop_sidebar">
                        <div class="sidebar_section">
                            <div class="sidebar_title">Categorías</div>
                            <ul class="sidebar_categories">
                                @foreach ($categorias as $categoria)
                                    <li><a href="{{ route('search', ['categoria' => $categoria->id_categoria]) }}">{{ $categoria->nombre_categoria }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar_section filter_by_section">
                            <div class="sidebar_title">Filtrar por</div>
                            <div class="sidebar_subtitle">Precio</div>
                            <div class="filter_price">
                                <div id="slider-range" class="slider_range"></div>
                                <p>Rango: </p>
                                <p><input type="text" id="amount" class="amount" readonly style="border:0; font-weight:bold;"></p>
                            </div>
                        </div>
                        <div class="sidebar_section">
                            <div class="sidebar_subtitle brands_subtitle">Marca</div>
                            <ul class="brands_list">
                                @foreach ($marcas as $marca)
                                    <li class="brand"><a href="{{ route('search', ['marca' => $marca->id_marca]) }}">{{ $marca->nombre_marca }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="col-lg-9">

                    <!-- Shop Content -->

                    <div class="shop_content">
                        <div class="shop_bar clearfix">
                            <div class="shop_product_count"><span>{{ count($products) }}</span> Productos
                                encontrados</div>
                        </div>

                        <div class="product_grid">
                            <div class="product_grid_border"></div>

                            {{-- NO BORRAR. SON LAS DISTINTAS FORMAS DE MOSTAR EL PRODUCTO --}}
                            <!-- Product Item New -->
                            {{-- <div class="product_item is_new">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                                        src="images/new_5.jpg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price">$225</div>
                                    <div class="product_name">
                                        <div><a href="#" tabindex="0">Philips BT6900A</a></div>
                                    </div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div> --}}

                            <!-- Product Item Discount -->
                            {{-- <div class="product_item discount">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                    <img src="images/featured_1.png" alt="">
                                </div>
                                <div class="product_content">
                                    <div class="product_price">$225<span>$300</span></div>
                                    <div class="product_name">
                                        <div><a href="#" tabindex="0">Huawei MediaPad...</a></div>
                                    </div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div> --}}

                            <!-- Product Item normal -->
                            {{-- <div class="product_item">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                    <img src="images/featured_2.png" alt="">
                                </div>
                                <div class="product_content">
                                    <div class="product_price">$379</div>
                                    <div class="product_name">
                                        <div><a href="#" tabindex="0">Apple iPod shuffle</a></div>
                                    </div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div> --}}
                            {{-- NO BORRAR. SON LAS DISTINTAS FORMAS DE MOSTAR EL PRODUCTO --}}

                            <!-- Product Item -->
                            @forelse ($products as $product)
                                <div class="product_item">
                                    <div class="product_border"></div>
                                    <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                        <img src="images/featured_2.png" alt="">
                                    </div>
                                    <div class="product_content">
                                        <div class="product_price">{{ $product->valor_unitario }}</div>
                                        <div class="product_name">
                                            <div>
                                                <a href="{{ route('producto.show', $product->id_producto) }}"
                                                    tabindex="0">
                                                    {{ $product->descripcion_producto }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('cart.add', $product->id_producto) }}">
                                        <div class="product_fav"><i class="fas fa-cart-plus"></i></div>
                                    </a>
                                    <ul class="product_marks">
                                        <li class="product_mark product_discount">-25%</li>
                                        <li class="product_mark product_new">new</li>
                                    </ul>
                                </div>
                            @empty
                                <p class="h1 text-center my-4">No se encontraron productos</p>
                            @endforelse
                        </div>

                        <!-- Shop Page Navigation -->

                        <!-- <div class="shop_page_nav d-flex flex-row">
                            <div class="page_prev d-flex flex-column align-items-center justify-content-center"><i
                                    class="fas fa-chevron-left"></i></div>
                            <ul class="page_nav d-flex flex-row">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">21</a></li>
                            </ul>
                            <div class="page_next d-flex flex-column align-items-center justify-content-center"><i
                                    class="fas fa-chevron-right"></i></div>
                        </div> -->

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection()

@section('javascript')
    <script src="{{ url('plugins/Isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('plugins/jquery-ui-1.12.1.custom/jquery-ui.js') }}"></script>
    <script src="{{ url('plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script src="{{ url('js/shop_custom.js') }}"></script>
@endsection
