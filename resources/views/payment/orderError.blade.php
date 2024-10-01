@extends('layouts.blank')

@section('title', 'Ha ocurriodo un error')

@section('content')
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card-body">
          <h2>Lo sentimos, ha ocurrido un error</h2>
          <p>Su pedido ha sido procesado con éxito.</p>
          @if($error)
            <p>{{ $error }}</p>
          @else
            <p>Ha ocurrido un error inesperado durante el proceso de su compra.</p>
          @endif
          <p>Por favor, intente nuevamente más tarde o contacte con PayPal.</p>
          <a href="/index" class="btn btn-primary">Volver a la página principal</a>
        </div>
      </div>
    </div>
  </div>
@endsection