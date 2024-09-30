@extends('layouts.blank')

@section('title', 'Realiza tu pago')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ url('styles/payment_style.css') }}">
<script src="https://www.paypal.com/sdk/js?client-id={{config('app.paypal.id')}}&currency=USD"></script>
@endsection

@section('content')

  <!-- Payment Form -->
    <div class="contact_form" style="height: calc(75vh - 110px)">
      <div class="container" >
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div class="contact_form_container" >
              <div class="contact_form_title d-flex justify-content-center">Realiza tu Pago</div>
              <form>
                <div id="paypal-buttons"></div>
                <script>
                  paypal.Buttons({
                    async createOrder() {
                      const response = await fetch("{{ route('paypal.createOrder') }}", {
                        method: "POST",
                        headers: {
                          "Content-Type": "application/json",
                          "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        },
                        body: JSON.stringify({
                          totalUSD: "{{ $totalUSD }}"
                        })
                      });

                      const data = await response.json();
                      return data.id;
                    },
                    async onApprove(data) {
                      const response = await fetch(`{{ route('paypal.captureOrder', ['orderId' => '${data.orderID}']) }}`, {
                        method: "POST",
                        headers: {
                          "Content-Type": "application/json",
                          "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        }
                      });

                      const details = await response.json();
                      alert(`Transaction completed by ${details.payer.name.given_name}`);
                          
                      window.location.href = "{{ route('factura.create') }}";
                    }
                  }).render('#paypal-buttons');
                </script>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- /Payment Form -->

@endsection