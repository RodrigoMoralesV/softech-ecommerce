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
                    async function getPayPalToken() {
                      const response = await fetch('/get-paypal-token');
                      const data = await response.json();
                      return data.token;
                    }
                    paypal.Buttons({
                      async createOrder() {
                        const token = await getPayPalToken();
                        const response = await fetch("https://api-m.sandbox.paypal.com/v2/checkout/orders", {
                          method: "POST",
                          headers: {
                            "Content-Type": "application/json",
                            "Authorization": `Bearer ${token}`
                          },
                          body: JSON.stringify({
                            "intent": "CAPTURE",
                            "purchase_units": [
                              {
                                "reference_id": "default",
                                "amount": {
                                  "currency_code": "USD",
                                  "value": "{{ $totalUSD }}"
                                },
                              }
                            ]
                          }),
                        });
                        const data = await response.json();
                        console.log(data.id)
                        return data.id;
                      },
                      async onApprove(data) {
                        console.log(data)
                        const token = await getPayPalToken();
                        const response = await fetch(`https://api-m.sandbox.paypal.com/v2/checkout/orders/${data.orderID}/capture`, {
                          method: "POST",
                          headers: {
                            "Content-Type": "application/json",
                            "Authorization": `Bearer ${token}`
                          }
                        })
                        const details = await response.json();
                        // Show success message to buyer
                        alert(`Transaction completed by ${details.payer.name.given_name}`);
                        console.log(details)
                        window.location.href = "{{ route('factura.create') }}"
                      },
                      async onCancel(err) {
                        window.location.href = "{{ route('error.compra') }}"
                      }
                    }).render('#paypal-buttons');
                  </script>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- /Payment Form -->

@endsection