<!DOCTYPE html>
<html lang="es-CO">

<head>
  <title>Register</title>
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
              <div class="contact_form_title d-flex justify-content-center">Registrate</div>

              <form action="{{ url('store') }}" class="" id="contact_form" method="POST">
                @csrf
                <div class="contact_form_inputs col-12">

                  <div class="col-sm">

                    {{-- Campo del nombre --}}
                    <input type="text" name="nombre_cliente" id="nombre_cliente"
                      class="contact_form_email input_field" placeholder="Tu(s) nombre(s)" required>

                    {{-- Campo del apellido --}}
                    <input type="text" name="apellido_cliente" id="apellido_cliente"
                      class="contact_form_email input_field" placeholder="Tu(s) apellido(s)" required>

                    {{-- Campo del correo --}}
                    <input type="text" name="correo_cliente" id="correo_cliente"
                      class="contact_form_email input_field" placeholder="Tu correo" required>

                    {{-- Campo de la contraseña --}}
                    <input type="password" name="clave_cliente" id="clave_cliente"
                      class="contact_form_phone input_field" placeholder="Tu contraseña">

                    {{-- Telefono del cliente --}}
                    <input type="text" name="telefono_cliente" id="telefono_cliente"
                      class="contact_form_email input_field" placeholder="Tu teléfono" required>
                  </div>

                  <div class="col-sm">

                    {{-- Seleccion de tipo de identificacion --}}
                    <div class="form-group w-50">
                      <label for="tipo_identificacion">Tipo de identificación</label>
                      <select name="tipo_identificacion_id" class="form-control" id="tipo_identificacion">
                        @foreach ($tipo_identificacion as $tipo_id)
                          <option value="{{ $tipo_id->id_tipo_identificacion }}">
                            {{ $tipo_id->descripcion_tipo_identificacion }}</option>
                        @endforeach
                      </select>
                    </div>

                    {{-- Numero de identificacion --}}
                    <input type="number" name="numero_identificacion_cliente" id="numero_identificacion_cliente"
                      class="contact_form_email input_field" placeholder="Tu número de documento" required>

                    {{-- Direccion del cliente --}}
                    <input type="text" name="direccion_entrega_cliente" id="direccion_entrega"
                      class="contact_form_email input_field" placeholder="Tu dirección de entrega" required>

                    {{-- Fecha de nacimiento --}}
                    <input type="date" name="fecha_nacimiento_cliente" id="fecha_nacimiento_cliente"
                      class="contact_form_email input_field" placeholder="" required>

                    {{-- Ciudad del cliente --}}
                    <select name="ciudad_id" class="form-control">
                      @foreach ($ciudades as $ciudad)
                        <option value="{{ $ciudad->id_ciudad }}">{{ $ciudad->nombre_ciudad }}</option>
                      @endforeach
                    </select>
                  </div>

                </div>
                <div class="contact_form_button d-flex justify-content-center">
                  <button type="submit" class="button contact_submit_button">Registrarme</button>
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
