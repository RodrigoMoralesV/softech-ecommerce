<!DOCTYPE html>
<html lang="es-CO">
@include('partials.headBlank')

<body>

    <!-- Header -->
    <div class="header_main">
        <div class="logo_container">
            <div class="logo">
                <a href="{{ url('index') }}">
                    <img src="{{ url('images/logo.svg') }}" width="100px">
                </a>
            </div>
        </div>
    </div>

    @yield('content')

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>&copy; 2024 Softech. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
