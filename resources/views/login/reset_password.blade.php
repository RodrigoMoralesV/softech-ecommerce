@extends('layouts.blank')

@section('title', 'Recuperar contraseña')

@section('content')
    @if (session('status'))
        <p class="">{{ session('status') }}</p>
    @endif

    <!-- Password Resert Form -->
    <div class="contact_form" style="height: calc(86vh - 110px)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_form_container">
                        <div class="contact_form_title d-flex justify-content-center">Recuperar contraseña</div>
                        <form action="{{ route('password.update') }}" id="contact_form" method="post">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div
                                class="contact_form_inputs d-flex flex-md-column flex-column justify-content-center align-items-center">
                                @error('correo_cliente')
                                    <p>{{ $message }}</p>
                                @enderror
                                <label class="container_input mb-4">
                                    <input type="email" name="email" placeholder="" class="input_field2" required
                                        autofocus>
                                    <span class="container_input_title">Email</span>
                                </label>
                                @error('clave_cliente')
                                    <p>{{ $message }}</p>
                                @enderror
                                <label class="container_input">
                                    <input type="password" name="password" placeholder="" class="input_field2" required>
                                    <span class="container_input_title">Contraseña</span>
                                </label>
                                <label class="container_input">
                                    <input type="password" name="password_confirmation" placeholder="" class="input_field2"
                                        required>
                                    <span class="container_input_title">Confirmar</span> Contraseña
                                </label>
                            </div>
                            <div class="additional-links d-flex justify-content-center">
                                <div class="contact_form_button">
                                    <button type="submit" class="button contact_submit_button">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
