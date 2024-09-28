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
              <div class="contact_form_title d-flex justify-content-center">Haz tu Pago</div>
              <form>
                <div id="paypal-buttons"></div>
                  <script>
                    // paypal.Buttons({
                    //   async createOrder() {
                    //     const response = await fetch("https://api-m.sandbox.paypal.com/v2/checkout/orders", {
                    //       method: "POST",
                    //       headers: {
                    //         "Content-Type": "application/json",
                    //         "Authorization": "Bearer A21AAKdco_OqTkpvzUXs-J3EyNQ9yYl0X-hSvaJJDGx3SAnkDx4m64pbDKntrWFqYmC6gicy-LEbkJn6o_MZMYtCMJIifttCw"
                    //       },
                    //       body: JSON.stringify({
                    //         "intent": "CAPTURE",
                    //         "purchase_units": [
                    //           {
                    //             "reference_id": "default",
                    //             "amount": {
                    //               "currency_code": "USD",
                    //               "value": "{{ $totalUSD }}"
                    //             },
                    //           }
                    //         ]
                    //       })
                    //     });

                    //     const order = await response.json();

                    //     return order.id;
                    //   },
                    //   async onApprove(data) {
                    //       // Capture the funds from the transaction.
                    //       const response = await fetch(`https://api-m.sandbox.paypal.com/v2/checkout/orders/${data.id}/capture`, {
                    //         method: "POST",
                    //         headers: {
                    //           "Content-Type": "application/json",
                    //           "Authorization": "Bearer A21AAKdco_OqTkpvzUXs-J3EyNQ9yYl0X-hSvaJJDGx3SAnkDx4m64pbDKntrWFqYmC6gicy-LEbkJn6o_MZMYtCMJIifttCw"
                    //         },
                    //         body: JSON.stringify({
                    //           orderID: data.id
                    //         })
                    //       })

                    //       const details = await response.json();

                    //       Show success message to buyer
                    //       alert(`Transaction completed by ${details.payer.name.given_name}`);
                    //   },
                    //   onError: function(err) {
                    //     console.error(err);
                    //   }
                    // }).render('#paypal-buttons');
                    paypal.Buttons({
                      async createOrder() {
                          const response = await fetch("https://api-m.sandbox.paypal.com/v2/checkout/orders", {
                              method: "POST",
                              headers: {
                                  "Content-Type": "application/json",
                                  "Authorization": "Bearer A21AAKdco_OqTkpvzUXs-J3EyNQ9yYl0X-hSvaJJDGx3SAnkDx4m64pbDKntrWFqYmC6gicy-LEbkJn6o_MZMYtCMJIifttCw"
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
                              "Authorization": "Bearer A21AAKdco_OqTkpvzUXs-J3EyNQ9yYl0X-hSvaJJDGx3SAnkDx4m64pbDKntrWFqYmC6gicy-LEbkJn6o_MZMYtCMJIifttCw"
                            },
                            // body: JSON.stringify({
                            //   orderID: data.orderID
                            // })
                          })

                          const details = await response.json();

                          // Show success message to buyer
                          alert(`Transaction completed by ${details.payer.name.given_name}`);

                          console.log(details)
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