@extends('layout')

@section('title', 'producto')

@section('css')
  <link rel="stylesheet" type="text/css" href="{{ url('styles/product_styles.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('styles/product_responsive.css') }}">
@endsection

@section('content')
  <!-- Single Product -->

  <div class="single_product">
    <div class="container">
      <div class="row">

        <!-- Images -->
        <div class="col-lg-2 order-lg-1 order-2">
          <ul class="image_list">
            <li data-image="{{ url('images/single_4.jpg') }}"><img src="{{ url('images/single_4.jpg') }}" alt="">
            </li>
            <li data-image="{{ url('images/single_2.jpg') }}"><img src="{{ url('images/single_2.jpg') }}" alt="">
            </li>
            <li data-image="{{ url('images/single_3.jpg') }}"><img src="{{ url('images/single_3.jpg') }}" alt="">
            </li>
          </ul>
        </div>

        <!-- Selected Image -->
        <div class="col-lg-5 order-lg-2 order-1">
          <div class="image_selected"><img src="{{ url('images/single_4.jpg') }}" alt=""></div>
        </div>

        <!-- Description -->
        <div class="col-lg-5 order-3">
          <div class="product_description">
            <div class="product_category">{{ $producto->categoria->nombre_categoria }}</div>
            <div class="product_name_preview">{{ $producto->descripcion_producto }}</div>
            <div class="product_text"> {{$producto-> descripcion_larga_producto}}
            </div>
            <div class="order_info d-flex flex-row">
              <form action="#">
                <div class="clearfix" style="z-index: 1000;">

                  <!-- Product Quantity -->
                  <div class="product_quantity clearfix">
                    <span>Quantity: </span>
                    <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                    <div class="quantity_buttons">
                      <div id="quantity_inc_button" class="quantity_inc quantity_control"><i
                          class="fas fa-chevron-up"></i></div>
                      <div id="quantity_dec_button" class="quantity_dec quantity_control"><i
                          class="fas fa-chevron-down"></i></div>
                    </div>
                  </div>
                </div>

                <!-- Product Disponibility -->
                <div class="deals_info_line mt-5 d-flex flex-row justify-content-start">
                  <div class="deals_item_name">Cantidad disponible: </div>
                  <div class="deals_item_price ml-2">{{ $producto->stock }}</div>
                </div>

                <div class="product_price">{{ $formatPrice($producto->valor_unitario) }}</div>
                <div class="button_container">
                  <button type="button" class="button cart_button">Add to Cart</button>
                  <div class="product_fav"><i class="fas fa-heart"></i></div>
                </div>

              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
