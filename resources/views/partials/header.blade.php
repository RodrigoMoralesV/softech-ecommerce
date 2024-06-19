<header class="header main_nav">

  <!-- Header Main -->

  <div class="header_main">
    <div class="container">
      <div class="row">

        <!-- Logo -->
        <div class="col-lg-2 col-sm-3 col-3 order-1">
          <div class="logo_container">
            <div class="logo"><a href="{{ url('index') }}">Softech</a></div>
          </div>
        </div>

        <!-- Search -->
        <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
          <div class="header_search">
            <div class="header_search_content">
              <div class="header_search_form_container">
                <form action="#" class="header_search_form clearfix">
                  <input type="search" required="required" class="header_search_input"
                    placeholder="Search for products...">

                  <!-- {{-- Esto esta oculto porque por algun motivo si se borra o comenta daña el resto de la estructura  --}} -->

                  <div class="custom_dropdown" hidden>
                    <div class="custom_dropdown_list">
                      <span class="custom_dropdown_placeholder clc">All Categories</span>
                      <i class="fas fa-chevron-down"></i>
                      <ul class="custom_list clc">
                        <li><a class="clc" href="#">All Categories</a></li>
                        <li><a class="clc" href="#">Computers</a></li>
                        <li><a class="clc" href="#">Laptops</a></li>
                        <li><a class="clc" href="#">Cameras</a></li>
                        <li><a class="clc" href="#">Hardware</a></li>
                        <li><a class="clc" href="#">Smartphones</a></li>
                      </ul>
                    </div>
                  </div>

                  <!-- {{-- /Esto esta oculto porque por algun motivo si se borra o comenta daña el resto de la estructura  --}} -->

                  <button type="submit" class="header_search_button trans_300" value="Submit"><img
                      src="{{ url('images/search.png') }}" alt=""></button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
          <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
            <!-- Cart -->
            <div class="cart mr-5">
              <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                <div class="cart_icon">
                  <img src="{{ url('images/cart.png') }}" alt="">
                  <div class="cart_count"><span>10</span></div>
                </div>
                <div class="cart_content">
                  <div class="cart_text"><a href="{{route('cart.view')}}">Carrito</a></div>
                  <div class="cart_price"><span>{{ $totalItems }}</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Profile -->
            <div class="wishlist d-flex flex-row align-items-center justify-content-end">
              <div class="user_icon"><img src="{{ url('images/user.svg') }}" alt=""></div>
              <div class="wishlist_content">
                <div class="wishlist_text"><a href="#">Profile</a></div>
                <div class="wishlist_count">115</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Menu -->

  <div class="page_menu">
    <div class="container">
      <div class="row">
        <div class="col">

          <div class="page_menu_content">

            <div class="page_menu_search">
              <form action="#">
                <input type="search" required="required" class="page_menu_search_input"
                  placeholder="Search for products...">
              </form>
            </div>
            <ul class="page_menu_nav">
              <li class="page_menu_item has-children">
                <a href="#">Language<i class="fa fa-angle-down"></i></a>
                <ul class="page_menu_selection">
                  <li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
                  <li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
                  <li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
                  <li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
                </ul>
              </li>
              <li class="page_menu_item has-children">
                <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                <ul class="page_menu_selection">
                  <li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                  <li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                  <li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
                  <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
                </ul>
              </li>
              <li class="page_menu_item">
                <a href="index.html">Home<i class="fa fa-angle-down"></i></a>
              </li>
              <li class="page_menu_item has-children">
                <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                <ul class="page_menu_selection">
                  <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                  <li class="page_menu_item has-children">
                    <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                    <ul class="page_menu_selection">
                      <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                      <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                      <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                      <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                    </ul>
                  </li>
                  <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                  <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                  <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                </ul>
              </li>
              <li class="page_menu_item has-children">
                <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                <ul class="page_menu_selection">
                  <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                  <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                  <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                  <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                </ul>
              </li>
              <li class="page_menu_item has-children">
                <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                <ul class="page_menu_selection">
                  <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                  <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                  <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                  <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                </ul>
              </li>
              <li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a>
              </li>
              <li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
            </ul>

            <div class="menu_contact">
              <div class="menu_contact_item">
                <div class="menu_contact_icon"><img src="images/phone_white.png" alt="">
                </div>+38 068 005 3570
              </div>
              <div class="menu_contact_item">
                <div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div>
                <a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</header>
