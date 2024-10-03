@extends('layouts.blank')

@section('title', 'Iniciar sesión')

@section('content')

    <!-- Login Form -->
    <div class="contact_form" style="height: calc(86vh - 110px)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_form_container">
                        <div class="contact_form_title d-flex justify-content-center">Inicio Sesión </div>
                        <form action="{{ route('login.check') }}" id="contact_form" method="post">
                            @csrf
                            <div
                                class="contact_form_inputs d-flex flex-md-column flex-column justify-content-center align-items-center">
                                @error('correo_cliente')
                                    <p>{{ $message }}</p>
                                @enderror
                                <label class="container_input mb-4">
                                    <input type="email" name="email" placeholder="" class="input_field2" required
                                        autofocus>
                                    <span class="container_input_title">Email </span>
                                </label>
                                @error('clave_cliente')
                                    <p>{{ $message }}</p>
                                @enderror
                                <label class="container_input">
                                    <input type="password" name="password" placeholder="" class="input_field2" required>
                                    <span class="container_input_title">contraseña</span>
                                </label>
                                <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                            </div>
                            <div class="additional-links d-flex justify-content-center">
                                <div class="contact_form_button">
                                    <button type="submit" class="button contact_submit_button">Ingresar</button>
                                </div>
                                <a class="button contact_submit_button"
                                    href="{{ route('registro.register') }}">Registrar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
