@extends('layout')

@section('title', 'producto')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('styles/product_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/product_responsive.css') }}">
@endsection

@section('content')
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
                                    <input type="number" name="numero_identificacion_cliente"
                                        id="numero_identificacion_cliente" class="contact_form_email input_field"
                                        placeholder="Tu número de documento" required>

                                    {{-- Direccion del cliente --}}
                                    <input type="text" name="direccion_entrega_cliente" id="direccion_entrega"
                                        class="contact_form_email input_field" placeholder="Tu dirección de entrega"
                                        required>

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
@endsection
