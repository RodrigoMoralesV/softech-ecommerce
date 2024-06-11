@extends('layout')

@section('title', 'Iniciar sesión')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('styles/contact_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/contact_responsive.css') }}">
@endsection

@section('content')

    <!-- Login Form -->

    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_form_container">
                        <div class="contact_form_title d-flex justify-content-center">Inicio de sesión</div>

                        <form action="{{ url('check') }}" id="contact_form" method="post">
                            @csrf
                            <div
                                class="contact_form_inputs d-flex flex-md-column flex-column justify-content-center align-items-center">
                                @error('correo_cliente')
                                    <p>{{ $message }}</p>
                                @enderror
                                <input type="text" name="email" id="contact_form_email"
                                    class="contact_form_email input_field" placeholder="Tú e-mail" required
                                    data-error="Email is required.">

                                @error('clave_cliente')
                                    <p>{{ $message }}</p>
                                @enderror
                                <input type="password" name="password" id="contact_form_phone"
                                    class="contact_form_phone input_field" placeholder="Tú contraseña">
                            </div>
                            <div class="contact_form_button d-flex justify-content-center">
                                <button type="submit" class="button contact_submit_button">Ingresar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="panel"></div>
    </div>
@endsection
