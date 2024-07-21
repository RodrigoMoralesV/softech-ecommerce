<!DOCTYPE html>
<html lang="en">

<head>
    <title>Iniciar sesión</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/global.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/bootstrap4/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/contact_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/contact_responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/login.css') }}">

</head>

<body>

    <!-- Header -->
    <div class="header_main">
        <div class="logo_container">
            <div class="logo"><a href="{{ url('index') }}">Softech</a></div>
        </div>
    </div>

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
                            <div class="additional-links d-flex justify-content-center">
                                <div class="contact_form_button">
                                    <button type="submit" class="button contact_submit_button">Ingresar</button>
                                </div>
                                <a href="{{ route('registro.register') }}">Registrar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>&copy; 2024 OneTech. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
