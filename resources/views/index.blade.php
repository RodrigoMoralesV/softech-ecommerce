@extends('layout')

@section('title', 'Softech - Ecommerce')

@section('content')

<!-- Product Panel -->
  <div class="product_panel panel active">
    <div class="featured_slider slider">

                  @foreach ($productos as $producto)
                    <!-- Slider Item -->
                    <div class="featured_slider_item">
                      <div class="border_active"></div>
                      <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/featured_1.png" alt=""></div>
                        <div class="product_content">
                          {{-- <div class="product_price discount">$225<span>$300</span></div> --}}
                          <div class="product_price">{{ number_format(($producto->valor_unitario), 0, ',', '.') }}</div>
                          <div class="product_name">
                            <a href="{{ route('producto.show', $producto->id_producto) }}">{{ $producto->descripcion_producto }}</a>
                            <div class="product_category">{{ $producto->categoria->nombre_categoria }}</div>
                            <div class="product_extras">
                                <form action="{{ route('cart.add', $producto->id_producto) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="product_cart_button">Agregar al Carrito</button>
                                </form>
                            </div>

                    </div>
                        </div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount">-25%</li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>
                  @endforeach

                </div>
                <div class="featured_slider_dots_cover"></div>
              </div>

              <!-- Product Panel -->

              <div class="product_panel panel">
                <div class="featured_slider slider">

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_1.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price discount">$225<span>$300</span></div>
                        <div class="product_name">
                          <div><a href="product.html">Huawei MediaPad...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_2.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div><a href="product.html">Apple iPod shuffle</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button active">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_3.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div><a href="product.html">Sony MDRZX310W</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_4.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price discount">$225<span>$300</span></div>
                        <div class="product_name">
                          <div><a href="product.html">LUNA Smartphone</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_5.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div><a href="product.html">Canon STM Kit...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_6.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div><a href="product.html">Samsung J330F...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_7.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div><a href="product.html">Lenovo IdeaPad</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_8.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div><a href="product.html">Digitus EDNET...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_1.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div><a href="product.html">Huawei MediaPad...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_2.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div><a href="product.html">Huawei MediaPad...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_3.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div><a href="product.html">Huawei MediaPad...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_4.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div><a href="product.html">Huawei MediaPad...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_5.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div><a href="product.html">Huawei MediaPad...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_6.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div><a href="product.html">Huawei MediaPad...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_7.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div><a href="product.html">Huawei MediaPad...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_8.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div><a href="product.html">Huawei MediaPad...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                </div>
                <div class="featured_slider_dots_cover"></div>
              </div>

              <!-- Product Panel -->

              <div class="product_panel panel">
                <div class="featured_slider slider">

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_1.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price discount">$225<span>$300</span></div>
                        <div class="product_name">
                          <div><a href="product.html">Huawei MediaPad...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_2.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div><a href="product.html">Apple iPod shuffle</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button active">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_3.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div><a href="product.html">Sony MDRZX310W</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_4.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price discount">$225<span>$300</span></div>
                        <div class="product_name">
                          <div><a href="product.html">LUNA Smartphone</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_5.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div><a href="product.html">Canon STM Kit...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_6.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div><a href="product.html">Samsung J330F...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_7.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div><a href="product.html">Lenovo IdeaPad</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_8.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div><a href="product.html">Digitus EDNET...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_1.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div><a href="product.html">Huawei MediaPad...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_2.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div><a href="product.html">Huawei MediaPad...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_3.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div><a href="product.html">Huawei MediaPad...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_4.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div><a href="product.html">Huawei MediaPad...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_5.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div><a href="product.html">Huawei MediaPad...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_6.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div><a href="product.html">Huawei MediaPad...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_7.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div><a href="product.html">Huawei MediaPad...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                          src="images/featured_8.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div><a href="product.html">Huawei MediaPad...</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Agregar al Carrito </button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                </div>
                <div class="featured_slider_dots_cover"></div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Popular Categories -->

  <div class="popular_categories">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="popular_categories_content">
            <div class="popular_categories_title">Categorías populares</div>
            <div class="popular_categories_slider_nav">
              <div class="popular_categories_prev popular_categories_nav"><i class="fas fa-angle-left ml-auto"></i>
              </div>
              <div class="popular_categories_next popular_categories_nav"><i class="fas fa-angle-right ml-auto"></i>
              </div>
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

  <!-- Banner -->

  <div class="banner_2">
    <div class="banner_2_background" style="background-image:url(images/banner_2_background.jpg)"></div>
    <div class="banner_2_container">
      <div class="banner_2_dots"></div>
      <!-- Banner 2 Slider -->

      <div class="owl-carousel owl-theme banner_2_slider">

        <!-- Banner 2 Slider Item -->
        <div class="owl-item">
          <div class="banner_2_item">
            <div class="container fill_height">
              <div class="row fill_height">
                <div class="col-lg-4 col-md-6 fill_height">
                  <div class="banner_2_content">
                    <div class="banner_2_category">Laptops</div>
                    <div class="banner_2_title">MacBook Air 13</div>
                    <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                      fermentum laoreet.</div>
                    <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class="button banner_2_button"><a href="#">Explore</a></div>
                  </div>

                </div>
                <div class="col-lg-8 col-md-6 fill_height">
                  <div class="banner_2_image_container">
                    <div class="banner_2_image"><img src="images/banner_2_product.png" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Banner 2 Slider Item -->
        <div class="owl-item">
          <div class="banner_2_item">
            <div class="container fill_height">
              <div class="row fill_height">
                <div class="col-lg-4 col-md-6 fill_height">
                  <div class="banner_2_content">
                    <div class="banner_2_category">Laptops</div>
                    <div class="banner_2_title">MacBook Air 13</div>
                    <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                      fermentum laoreet.</div>
                    <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class="button banner_2_button"><a href="#">Explore</a></div>
                  </div>

                </div>
                <div class="col-lg-8 col-md-6 fill_height">
                  <div class="banner_2_image_container">
                    <div class="banner_2_image"><img src="images/banner_2_product.png" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Banner 2 Slider Item -->
        <div class="owl-item">
          <div class="banner_2_item">
            <div class="container fill_height">
              <div class="row fill_height">
                <div class="col-lg-4 col-md-6 fill_height">
                  <div class="banner_2_content">
                    <div class="banner_2_category">Laptops</div>
                    <div class="banner_2_title">MacBook Air 13</div>
                    <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                      fermentum laoreet.</div>
                    <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class="button banner_2_button"><a href="#">Explore</a></div>
                  </div>

                </div>
                <div class="col-lg-8 col-md-6 fill_height">
                  <div class="banner_2_image_container">
                    <div class="banner_2_image"><img src="images/banner_2_product.png" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Hot New Arrivals -->

  <div class="new_arrivals">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="tabbed_container">
            <div class="tabs clearfix tabs-right">
              <div class="new_arrivals_title">Hot New Arrivals</div>
              <ul class="clearfix">
                <li class="active">Featured</li>
                <li>Audio & Video</li>
                <li>Laptops & Computers</li>
              </ul>
              <div class="tabs_line"><span></span></div>
            </div>
            <div class="row">
              <div class="col-lg-9" style="z-index:1;">

                <!-- Product Panel -->
                <div class="product_panel panel active">
                  <div class="arrivals_slider slider">

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_1.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Astro M2 Black</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount">-25%</li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_2.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Transcend T.Sonic</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button active">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_3.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Xiaomi Band 2...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_4.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Rapoo T8 White</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_5.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Philips BT6900A</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_6.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Nokia 3310(2017)...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_7.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Rapoo 7100p Gray</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount">-25%</li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_8.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Canon EF</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_1.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Gembird SPK-103</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_2.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Canon IXUS 175...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_3.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_4.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_5.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_6.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_7.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_8.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="arrivals_slider_dots_cover"></div>
                </div>

                <!-- Product Panel -->
                <div class="product_panel panel">
                  <div class="arrivals_slider slider">

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_1.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount">-25%</li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_2.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button active">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_3.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_4.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_5.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_6.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_7.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount">-25%</li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_8.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_1.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_2.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_3.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_4.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_5.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_6.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_7.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_8.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="arrivals_slider_dots_cover"></div>
                </div>

                <!-- Product Panel -->
                <div class="product_panel panel">
                  <div class="arrivals_slider slider">

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_1.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount">-25%</li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_2.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button active">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_3.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_4.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_5.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_6.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_7.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount">-25%</li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_8.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_1.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_2.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_3.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_4.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_5.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_6.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_7.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$379</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="arrivals_slider_item">
                      <div class="border_active"></div>
                      <div
                        class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img
                            src="images/new_8.jpg" alt=""></div>
                        <div class="product_content">
                          <div class="product_price">$225</div>
                          <div class="product_name">
                            <div><a href="product.html">Huawei MediaPad...</a></div>
                          </div>
                          <div class="product_extras">
                            <div class="product_color">
                              <input type="radio" checked name="product_color" style="background:#b19c83">
                              <input type="radio" name="product_color" style="background:#000000">
                              <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Agregar al Carrito </button>
                          </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                          <li class="product_mark product_discount"></li>
                          <li class="product_mark product_new">new</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="arrivals_slider_dots_cover"></div>
                </div>

              </div>

              <div class="col-lg-3">
                <div class="arrivals_single clearfix">
                  <div class="d-flex flex-column align-items-center justify-content-center">
                    <div class="arrivals_single_image"><img src="images/new_single.png" alt=""></div>
                    <div class="arrivals_single_content">
                      <div class="arrivals_single_category"><a href="#">Smartphones</a></div>
                      <div class="arrivals_single_name_container clearfix">
                        <div class="arrivals_single_name"><a href="#">LUNA Smartphone</a></div>
                        <div class="arrivals_single_price text-right">$379</div>
                      </div>
                      <div class="rating_r rating_r_4 arrivals_single_rating"><i></i><i></i><i></i><i></i><i></i>
                      </div>
                      <form action="#"><button class="arrivals_single_button">Agregar al Carrito </button></form>
                    </div>
                    <div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div>
                    <ul class="arrivals_single_marks product_marks">
                      <li class="arrivals_single_mark product_mark product_new">new</li>
                    </ul>
                  </div>
                </div>
              </div>

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
                @foreach($productos as $producto)
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
                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_1.jpg"
                    alt=""></div>
              </div>
              <div class="owl-item">
                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_2.jpg"
                    alt=""></div>
              </div>
              <div class="owl-item">
                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_3.jpg"
                    alt=""></div>
              </div>
              <div class="owl-item">
                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_4.jpg"
                    alt=""></div>
              </div>
              <div class="owl-item">
                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_5.jpg"
                    alt=""></div>
              </div>
              <div class="owl-item">
                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_6.jpg"
                    alt=""></div>
              </div>
              <div class="owl-item">
                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_7.jpg"
                    alt=""></div>
              </div>
              <div class="owl-item">
                <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_8.jpg"
                    alt=""></div>
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

@endsection
