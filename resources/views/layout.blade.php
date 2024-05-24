<!DOCTYPE html>
<html lang="es-CO">

@include('partials.head')

<body>

  <div class="super_container">

    <!-- Header -->

    @include('partials.header')

    <!-- /Header -->

    <!-- Content -->

    @yield('content')

    <!-- /Content -->

    <!-- Footer -->

    @include('partials.footer')

    <!-- /Footer -->

    <!-- Copyright -->

    @include('partials.copyright')

    <!-- /Copyright -->

  </div>

  <!-- Scripts -->

  @include('partials.scripts.main')

  <!-- /Scripts -->

</body>

</html>
