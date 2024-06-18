<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
    <div class="header_search">
        <div class="header_search_content">
            <div class="header_search_form_container">
                <form action="/search" method="GET" class="header_search_form clearfix">
                    <input type="search" name="searchBar" required class="header_search_input w-100"
                        placeholder="Search for products...">

                    <!-- {{-- Esto esta oculto porque por algun motivo si se borra o comenta daña el resto de la estructura  --}} -->

                    <div class="custom_dropdown" style="display: none">
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

                    <button type="submit" class="header_search_button trans_300" value="Submit">
                        <img src="{{ url('images/search.png') }}" alt="">
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
