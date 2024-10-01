@extends('layouts.blank')

@section('title', 'Gracias por su compra')

@section('content')
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card-body">
          <h2>¡Gracias por su compra!</h2>
          <p>Su pedido ha sido procesado con éxito.</p>
          @if($numeroFactura)
            <p>Su número de factura es: {{ $numeroFactura }}</p>
          @endif
          <p>Hemos enviado un correo electrónico con los detalles de su compra y la factura adjunta.</p>
          <a href="/index" class="btn btn-primary">Volver a la página principal</a>
        </div>
      </div>
    </div>
  </div>
@endsection