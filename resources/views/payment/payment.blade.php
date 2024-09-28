@extends('layouts.blank')

@section('title', 'Realiza tu pago')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ url('styles/payment_styles.css') }}">
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
                        const response = await fetch("https://api-m.sandbox.paypal.com/v2/checkout/orders", {
                          method: "POST",
                          headers: {
                            "Content-Type": "application/json",
                            "Authorization": `Bearer A21AALVNyfFl2og6jUhzhCZAz7KL1-Zk7ghEtwMobOHotUGnvmeK6rD_I8_qlTbOdy7soDGJmYt7JR1CJ7J1JISdZVpw-MzKw`
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
                        // Capture the funds from the transaction.
                        console.log(data)
                        const response = await fetch(`https://api-m.sandbox.paypal.com/v2/checkout/orders/${data.orderID}/capture`, {
                          method: "POST",
                          headers: {
                            "Content-Type": "application/json",
                            "Authorization": `Bearer A21AALVNyfFl2og6jUhzhCZAz7KL1-Zk7ghEtwMobOHotUGnvmeK6rD_I8_qlTbOdy7soDGJmYt7JR1CJ7J1JISdZVpw-MzKw`
                          }
                        })

                        const details = await response.json();

                        // Show success message to buyer
                        alert(`Transaction completed by ${details.payer.name.given_name}`);

                        console.log(details)

                        window.location.href = "{{ route('factura.create') }}"
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