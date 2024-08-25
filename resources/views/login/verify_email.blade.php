@extends('layouts.blank')

@section('title', 'Verificar correo electronico')

@section('content')

    <!-- Verify Email Form -->
    <div class="contact_form" style="height: calc(86vh - 110px)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_form_container">
                        <p class="contact_form_title d-flex justify-content-center">Por favor, verifica tu correo
                            electronico por medio del enlace enviado anteriormente</p>
                        <p class="">¿No recibiste el correo?</p>
                        <form action="{{ route('verification.send') }}" method="POST">
                            @csrf
                            <div class="contact_form_button">
                                <button type="submit" class="button contact_submit_button">Enviar de nuevo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
