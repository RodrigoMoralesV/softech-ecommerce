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
            <h2 class="home_title">Smartphones & Tablets</h2>
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
                        <div class="sidebar_title">Categoría</div>
                        <ul class="sidebar_categories">
                            @if($categories->isNotEmpty())
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{ route('filterByCategory', $category->id_categoria) }}?searchBar={{ $search }}" class="font-weight-bold text-primary">
                                            {{ $category->nombre_categoria }}
                                            <span class="badge badge-primary ml-2">{{ $products->where('categoria_id', $category->id_categoria)->count() }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            @else
                                <li>No se encontraron categorías</li>
                            @endif
                        </ul>
                    </div>
<!-- Botón Regresar -->
<button onclick="history.back()" class="btn btn-primary">
                    <i class="fa fa-arrow-left"></i> Regresar
                </button>


                    <div class="sidebar_section filter_by_section">
                            <div class="sidebar_title">Filtrar Por</div>
                            <div class="sidebar_subtitle">Precio</div>
                            <div class="filter_price">
                                <div id="slider-range" class="slider_range"></div>
                                <p>Rango: </p>
                                <p><input type="text" id="amount" class="amount" readonly
                                        style="border:0; font-weight:bold;"></p>



                                <form id="price-filter-form" method="GET" action="{{ route('search') }}">
                                    <input type="hidden" name="min_price" id="min_price">
                                    <input type="hidden" name="max_price" id="max_price">
                                    <input type="hidden" name="searchBar" value="{{ request('searchBar') }}">
                                    <button type="submit" class="btn btn-primary">Aplicar filtro</button>
                                </form>
                            </div>
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

                        <div class="shop_page_nav d-flex flex-row">
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
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Recently Viewed -->

    <div class="viewed">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="viewed_title_container">
                        <h3 class="viewed_title">Recently Viewed</h3>
                        <div class="viewed_nav_container">
                            <div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>

                    <div class="viewed_slider_container">

                        <!-- Recently Viewed Slider -->

                        <div class="owl-carousel owl-theme viewed_slider">

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div
                                    class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_1.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$225<span>$300</span></div>
                                        <div class="viewed_name"><a href="#">Beoplay H7</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div
                                    class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_2.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$379</div>
                                        <div class="viewed_name"><a href="#">LUNA Smartphone</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div
                                    class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_3.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$225</div>
                                        <div class="viewed_name"><a href="#">Samsung J730F...</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div
                                    class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_4.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$379</div>
                                        <div class="viewed_name"><a href="#">Huawei MediaPad...</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div
                                    class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_5.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$225<span>$300</span></div>
                                        <div class="viewed_name"><a href="#">Sony PS4 Slim</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div
                                    class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="images/view_6.jpg" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$375</div>
                                        <div class="viewed_name"><a href="#">Speedlink...</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Brands -->

    <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="brands_slider_container">

                        <!-- Brands Slider -->

                        <div class="owl-carousel owl-theme brands_slider">

                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_1.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_2.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_3.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_4.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_5.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_6.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_7.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="images/brands_8.jpg" alt=""></div>
                            </div>

                        </div>

                        <!-- Brands Slider Navigation -->
                        <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

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
