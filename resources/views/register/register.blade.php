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

<style>
	.containerForm {
	margin-inline: auto;
	position: relative;
	max-width: 700px;
	width: 100%;
	background: #fff;
	padding: 25px;
	border-radius: 8px;
	box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
	}
	.containerForm header {
	font-size: 1.5rem;
	color: #333;
	font-weight: 500;
	text-align: center;
	}
	.containerForm .form {
	margin-top: 30px;
	}
	.form .input-box {
	width: 100%;
	margin-top: 20px;
	}
	.input-box label {
	color: #333;
	}
	.form :where(.input-box input, .select-box) {
	position: relative;
	height: 50px;
	width: 100%;
	outline: none;
	font-size: 1rem;
	color: #707070;
	margin-top: 8px;
	border: 1px solid #ddd;
	border-radius: 6px;
	padding: 0 15px;
	}
	.input-box input:focus {
	box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
	}
	.form .column {
	display: flex;
	column-gap: 15px;
	}
	.form .gender-box {
	margin-top: 20px;
	}
	.gender-box h3 {
	color: #333;
	font-size: 1rem;
	font-weight: 400;
	margin-bottom: 8px;
	}
	.form :where(.gender-option, .gender) {
	display: flex;
	align-items: center;
	column-gap: 50px;
	flex-wrap: wrap;
	}
	.form .gender {
	column-gap: 5px;
	}
	.gender input {
	accent-color: rgb(130, 106, 251);
	}
	.form :where(.gender input, .gender label) {
	cursor: pointer;
	}
	.gender label {
	color: #707070;
	}
	.address :where(input, .select-box) {
	margin-top: 15px;
	}
	.select-box select {
	height: 100%;
	width: 100%;
	outline: none;
	border: none;
	color: #707070;
	font-size: 1rem;
	}
	.form button {
	height: 55px;
	width: 100%;
	color: #fff;
	font-size: 1rem;
	font-weight: 400;
	margin-top: 30px;
	border: none;
	cursor: pointer;
	transition: all 0.2s ease;
	background: rgb(130, 106, 251);
	}
	.form button:hover {
	background: rgb(88, 56, 250);
	}
	/*Responsive*/
	@media screen and (max-width: 500px) {
	.form .column {
		flex-wrap: wrap;
	}
	.form :where(.gender-option, .gender) {
		row-gap: 15px;
	}
	}
</style>

</html>