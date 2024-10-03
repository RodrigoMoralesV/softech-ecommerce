@extends('layouts.blank')

@section('title', 'Registro')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('styles/register.css') }}">
@endsection

@section('content')

    <!-- Login Form -->
    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_form_container">
                        <div class="contact_form_title d-flex justify-content-center">Crea tu Cuenta </div>
                        <form action="{{ route('registro.store') }}" class="form" id="contact_form" method="POST">
                            @csrf
                            <!-- Nombre -->
                            <label class="container_input mb-4">
                                <input type="text" name="nombre_cliente" placeholder="" class="input_field2" required
                                    autofocus>
                                <span class="container_input_title">Nombre</span>
                            </label>
                            <!-- Apellido -->
                            <label class="container_input mb-4">
                                <input type="text" name="apellido_cliente" placeholder="" class="input_field2" required>
                                <span class="container_input_title">Apellido</span>
                            </label>
                            <!-- Correo -->
                            <label class="container_input mb-4">
                                <input type="email" name="email" placeholder="" class="input_field2" required>
                                <span class="container_input_title">Email</span>
                            </label>
                            <!-- Telefono -->
                            <label class="container_input mb-4">
                                <input type="text" name="telefono_cliente" placeholder="" class="input_field2" required>
                                <span class="container_input_title">Telefono</span>
                            </label>
                            <!-- Fecha de nacimiento -->
                            <label class="date-input-container mb-4">
                                <span class="date-input-label">Fecha de nacimiento</span>
                                <input type="date" name="fecha_nacimiento_cliente" required class="styled-date-input" />
                            </label>


                            <div class="column">
                                <!-- Tipo identificacion -->
                                <div class="select-box">
                                    <select name="tipo_identificacion_id">
                                        <option hidden>Tipo de documento</option>
                                        @foreach ($tipo_identificacion as $tipo_id)
                                            <option value="{{ $tipo_id->id_tipo_identificacion }}">
                                                {{ $tipo_id->descripcion_tipo_identificacion }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- Numero identificacion -->
                                <label class="container_input mb-4">
                                    <input type="number" placeholder=" " name="numero_identificacion_cliente"
                                        class="input_field2" min=1 required>
                                    <span class="container_input_title">Número de documento</span>
                                </label>
                            </div>
                            <div class="column">
                                <!-- Departamento -->
                                <div class="select-box">
                                    <select id="departamento" name="departamento_id">
                                        <option value="" hidden>Departamento</option>
                                        @foreach ($departamentos as $departamento)
                                            <option value="{{ $departamento->id_departamento }}">
                                                {{ $departamento->nombre_departamento }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- Ciudad -->
                                <div class="select-box">
                                    <select name="ciudad_id" id="ciudad" disabled>
                                        <option value="" hidden>Ciudad
                                    </select>
                                </div>
                            </div>

                            
                            <!-- Direccion -->
                            <label class="container_input mt-4 mb-4">
                                <input type="text" name="direccion_entrega_cliente" placeholder="" class="input_field2"
                                    required>
                                <span class="container_input_title">Direccion</span>
                            </label>
                            <!-- Contraseña -->
                            <label class="container_input mb-4">
                                <input type="password" name="password" placeholder="" class="input_field2" required>
                                <span class="container_input_title">Contraseña</span>
                            </label>
                            <!-- Confirmar Contraseña -->
                            <label class="container_input mb-4">
                                <input type="password" placeholder="" class="input_field2">
                                <span class="container_input_title">Confirma tu contraseña</span>
                            </label>
                            <button type="submit" class="button contact_submit_button">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src=" {{ url('js/getCiudadesPorDepartamento.js') }} "></script>

@endsection
