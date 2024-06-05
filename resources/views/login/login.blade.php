<!DOCTYPE html>
<html lang="es-CO">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="OneTech shop project">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
  <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
  <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

</head>

<body>

  <div class="super_container">

    <!-- Header -->

    @include('..partials.header')

    <!-- Login Form -->

    <div class="contact_form">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div class="contact_form_container">
              <div class="contact_form_title d-flex justify-content-center">Log in</div>

              <form action="{{ url('check') }}" id="contact_form" method="post">
                @csrf
                <div
                  class="contact_form_inputs d-flex flex-md-column flex-column justify-content-center align-items-center">  
                  @error('correo_cliente')
                    <p>{{ $message }}</p>
                  @enderror
                  <input type="text" name="email" id="contact_form_email"
                    class="contact_form_email input_field" placeholder="Your email" required
                    data-error="Email is required.">
                  
                  @error('clave_cliente')
                    <p>{{ $message }}</p>
                  @enderror
                  <input type="password" name="password" id="contact_form_phone"
                    class="contact_form_phone input_field" placeholder="Your password">
                </div>
                <div class="contact_form_button d-flex justify-content-center">
                  <button type="submit" class="button contact_submit_button">Log in</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
      <div class="panel"></div>
    </div>

    <!-- Footer -->

    {{-- @include('../partials/footer') --}}

    <!-- Copyright -->

    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col">

            <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
              <div class="copyright_content">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="fa fa-heart"
                  aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </div>
              <div class="logos ml-sm-auto">
                <ul class="logos_list">
                  <li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
                  <li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
                  <li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
                  <li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="styles/bootstrap4/popper.js"></script>
  <script src="styles/bootstrap4/bootstrap.min.js"></script>
  <script src="plugins/greensock/TweenMax.min.js"></script>
  <script src="plugins/greensock/TimelineMax.min.js"></script>
  <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
  <script src="plugins/greensock/animation.gsap.min.js"></script>
  <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
  <script src="plugins/easing/easing.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
  <script src="js/contact_custom.js"></script>
</body>

</html>
