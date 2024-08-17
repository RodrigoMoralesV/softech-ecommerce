<!DOCTYPE html>
<html lang="es-co">

<head>
    <title>Registrarse</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/global.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/bootstrap4/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/contact_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/contact_responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/login.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('styles/register.css') }}">
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
                        <div class="contact_form_title d-flex justify-content-center">Sign Up</div>
      					<form action="{{ route('registro.store') }}" class="form" id="contact_form" method="POST">
                            @csrf
							<!-- Nombre -->
        					<label class="container_input mb-4">
                                <input type="text" name="nombre_cliente" placeholder="" class="input_field2" required autofocus>
                                <span class="container_input_title">Your first name</span>
                            </label>
							<!-- Apellido -->
							<label class="container_input mb-4">
                                <input type="text" name="apellido_cliente" placeholder="" class="input_field2" required >
                                <span class="container_input_title">Your last name</span>
                            </label>
							<!-- Correo -->
							<label class="container_input mb-4">
                                <input type="email" name="email" placeholder="" class="input_field2" required >
                                <span class="container_input_title">Your email</span>
                            </label>
							<div class="column">
								<!-- Telefono -->
								<label class="container_input mb-4">
									<input type="text" name="telefono_cliente" placeholder="" class="input_field2" required >
									<span class="container_input_title">Your phone</span>
								</label>
								<!-- Fecha de nacimiento -->
								<label class="container_input mb-4">
									<input type="date" name="fecha_nacimiento_cliente" placeholder="Enter birth date" required />
								</label>
							</div>
							<div class="column">
								<!-- Tipo identificacion -->
									<div class="select-box">
										<select name="tipo_identificacion_id">
											<option hidden>Your ID type</option>
											@foreach ($tipo_identificacion as $tipo_id)
												<option value="{{ $tipo_id->id_tipo_identificacion }}">
													{{ $tipo_id->descripcion_tipo_identificacion }}
												</option>
											@endforeach	
										</select>
									</div>
								<!-- Numero identificacion -->
								<label class="container_input mb-4">
									<input type="number" placeholder=" " name="numero_identificacion_cliente" class="input_field2" min=1 required>
									<span class="container_input_title">Número de documento</span>
								</label>
							</div>
							<div class="column">
								<!-- Departamento -->
								<div class="select-box">
									<select id="departamento">
										<option hidden>Your department</option>
											@foreach ($tipo_identificacion as $tipo_id)
												<option value="{{ $tipo_id->id_tipo_identificacion }}">
													{{ $tipo_id->descripcion_tipo_identificacion }}
												</option>
											@endforeach	
									</select>
								</div>
								<!-- Ciudad -->
								<div class="select-box">
									<select name="ciudad_id">
										<option hidden>Your city</option>
                                        @foreach ($ciudades as $ciudad)
                                            <option value="{{ $ciudad->id_ciudad }}">{{ $ciudad->nombre_ciudad }}</option>
                                        @endforeach
                                    </select>
								</div>
							</div>
							<!-- Direccion -->
							<label class="container_input mt-4 mb-4">
                                <input type="text" name="direccion_entrega_cliente" placeholder="" class="input_field2" required>
                                <span class="container_input_title">Your address</span>
                            </label>
							<!-- Contraseña -->
							<label class="container_input mb-4">
                                <input type="password" name="password" placeholder="" class="input_field2" required>
                                <span class="container_input_title">Your password</span>
                            </label>
							<!-- Confirmar Contraseña -->
							<label class="container_input mb-4">
                                <input type="password" placeholder="" class="input_field2">
                                <span class="container_input_title">Confirm password</span>
                            </label>
							<button type="submit" class="button contact_submit_button">Submit</button>
      					</form>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Footer -->
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>&copy; 2024 Softech. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>