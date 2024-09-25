@extends('layouts.base')

@section('title', 'Softech - Ecommerce')

@section('content')

   <!-- Slider Principal utilizando Bootstrap Carousel con imágenes desde URLs -->
<!-- Slider Principal utilizando Bootstrap Carousel con imágenes desde URLs -->

<div id="mainCarousel" class="carousel slide mt-3" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">
        <!-- Slide 1 con la imagen -->
        <div class="carousel-item active">
            <img src="https://www.intel.com/content/dam/www/central-libraries/us/en/images/2023-10/newsroom-intel-core-14th-gen-desktop-feat.jpg" class="d-block w-100" alt="Producto 1" style="object-fit: cover; height: 500px;">
            <div class="carousel-caption d-none d-md-block">
                {{-- <h2>Envío Rápido y Seguro</h2>
                <p>Disfruta de hasta un 40% de descuento en productos seleccionados</p> --}}
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
            <img src="https://www.intel.com/content/dam/www/central-libraries/us/en/images/2023-06/newsroom-arc-pro-a60-add-in-card.jpg" class="d-block w-100" alt="Producto 2" style="object-fit: cover; height: 500px;">
            <div class="carousel-caption d-none d-md-block">
                {{-- <h2>Calidad Asegurada</h2>
                <p>Compra productos garantizados con la mejor calidad del mercado</p> --}}
            </div>
        </div>
        {{-- slide 3 --}}
        <div class="carousel-item">
            <img src="https://intelcorp.scene7.com/is/image/intelcorp/co-pilot-core-ultra-collaboration-image:1920-1080?wid=1648&hei=927&fmt=webp-alpha" class="d-block w-100" alt="Producto 3" style="object-fit: cover; height: 500px;">
            <div class="carousel-caption d-none d-md-block">
                {{-- <h2>Calidad Asegurada</h2>
                <p>Compra productos garantizados con la mejor calidad del mercado</p> --}}
            </div>
        </div>
        <!-- slide 4 -->
        <div class="carousel-item">
            <img src="https://intelcorp.scene7.com/is/image/intelcorp/evo-powered-by-core-ultra-processor-overview-video-thumbnail:1920-1080" class="d-block w-100" alt="Producto 4" style="object-fit: cover; height: 500px;">
            <div class="carousel-caption d-none d-md-block">
                {{-- <h2>Calidad Asegurada</h2>
                <p>Compra productos garantizados con la mejor calidad del mercado</p> --}}
            </div>
        </div>
    </div>

    <!-- Controles de navegación -->
    <button class="carousel-control-prev p-0 border-0" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev" style="position: absolute; top: 50%; transform: translateY(-50%); width: 40px; height: 40px; border-radius: 50%; display: flex; justify-content: center; align-items: center; left: 10px;">
        <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1); width: 30px; height: 30px;"></span>
        <span class="visually-hidden"></span>
    </button>
    <button class="carousel-control-next p-0 border-0" type="button" data-bs-target="#mainCarousel" data-bs-slide="next" style="position: absolute; top: 50%; transform: translateY(-50%); width: 40px; height: 40px; border-radius: 50%; display: flex; justify-content: center; align-items: center; right: 10px;">
        <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1); width: 30px; height: 30px;"></span>
        <span class="visually-hidden"></span>
    </button>
    <!-- Indicadores de paginación -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="width: 10px; height: 10px; background-color: rgba(255, 255, 255, 0.496); border-radius: 0%; margin-right: 3px;"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2" style="width: 10px; height: 10px; background-color: rgba(255, 255, 255, 0.496); border-radius: 0; margin-right: 3px;"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3" style="width: 10px; height: 10px; background-color: rgba(255, 255, 255, 0.496); border-radius: 0; margin-right: 3px;"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="3" aria-label="Slide 4" style="width: 10px; height: 10px; background-color: rgba(255, 255, 255, 0.496); border-radius: 0; margin-right: 3px;"></button>
    </div>
</div>
 
    <!-- Product Panel -->
    <div class="product_panel panel active mt-5">
        <div class="featured_slider slider">

            @foreach ($productos as $producto)
                <!-- Slider Item -->
                <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center">
                            <img src="images/featured_1.png" alt="">
                        </div>
                        <div class="product_content">
                            <div class="product_price">{{ $formatPrice($producto->valor_unitario) }}</div>
                            <div class="product_name">
                                <a href="{{ route('producto.show', $producto->id_producto) }}">{{ $producto->descripcion_producto }}</a>
                            </div>
                            <div class="product_category">{{ $producto->categoria->nombre_categoria }}</div>
                            <div class="product_extras">
                                <a href="{{ route('cart.add', $producto->id_producto) }}">
                                    <button class="product_cart_button">Añadir al carrito</button>
                                </a>
                            </div>
                        </div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount">-25%</li>
                            <li class="product_mark product_new">Nuevo</li>
                        </ul>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="featured_slider_dots_cover"></div>
    </div>

    <!-- Popular Categories -->

    <div class="popular_categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="popular_categories_content">
                        <div class="popular_categories_title">Categorías populares</div>
                        <div class="popular_categories_slider_nav">
                            <div class="popular_categories_prev popular_categories_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                            <div class="popular_categories_next popular_categories_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                        </div>
                        <div class="popular_categories_link"><a href="#">Catálogo completo</a></div>
                    </div>
                </div>

                <!-- Popular Categories Slider -->
                <div class="col-lg-9">
                    <div class="popular_categories_slider_container">
                        <div class="owl-carousel owl-theme popular_categories_slider">
                            @foreach ($categorias as $categoria)
                                <!-- Popular Categories Item -->
                                <div class="owl-item">
                                    <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                        <div class="popular_category_image"><img src="images/popular_1.png" alt=""></div>
                                        <div class="popular_category_text">{{ $categoria->nombre_categoria }}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Best Sellers -->

    <div class="best_sellers">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">Mas Vendidos</div>
                            <ul class="clearfix">
                                <li class="active"></li>
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>

                        <div class="bestsellers_panel panel active">
                            <!-- Best Sellers Slider -->
                            <div class="bestsellers_slider slider">
                                <!-- Best Sellers Item -->
                                @foreach ($productos as $producto)
                                    <div class="bestsellers_item">
                                        <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="images/best_1.png" alt=""></div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">{{ $producto->categoria->nombre_categoria }}</a></div>
                                                <div class="bestsellers_name"><a href="{{ route('producto.show', $producto->id_producto) }}">{{ $producto->descripcion_producto }}</a></div>
                                                <div class="bestsellers_price discount">{{ $formatPrice($producto->valor_unitario) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
                                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_1.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_2.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_3.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_4.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_5.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_6.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_7.jpg" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_8.jpg" alt=""></div>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('styles/styles.css') }}">
    

@endsection


