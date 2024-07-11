<!-- @extends('layout') -->

@section('title', 'producto')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('styles/contact_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/contact_responsive.css') }}">
@endsection

@section('content')
    <!-- Login Form -->

    <!-- <div class="contact_form">
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
                                    <input type="text" name="email" id="email"
                                        class="contact_form_email input_field" placeholder="Tu correo" required>

                                    {{-- Campo de la contraseña --}}
                                    <input type="password" name="password" id="password"
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
    </div> -->

    <section class="containerForm">
      <header>Registration Form</header>
      <form action="#" class="form">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name" required />
        </div>
        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" required />
        </div>
        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" placeholder="Enter phone number" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" placeholder="Enter birth date" required />
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" checked />
              <label for="check-male">male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" />
              <label for="check-other">prefer not to say</label>
            </div>
          </div>
        </div>
        <div class="input-box address">
          <label>Address</label>
          <input type="text" placeholder="Enter street address" required />
          <input type="text" placeholder="Enter street address line 2" required />
          <div class="column">
            <div class="select-box">
              <select>
                <option hidden>Country</option>
                <option>America</option>
                <option>Japan</option>
                <option>India</option>
                <option>Nepal</option>
              </select>
            </div>
            <input type="text" placeholder="Enter your city" required />
          </div>
          <div class="column">
            <input type="text" placeholder="Enter your region" required />
            <input type="number" placeholder="Enter postal code" required />
          </div>
        </div>
        <button>Submit</button>
      </form>
    </section>

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

@endsection
