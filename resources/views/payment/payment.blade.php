@extends('layouts.blank')

@section('title', 'Realiza tu pago')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ url('styles/payment_styles.css') }}">
<script src="https://www.paypal.com/sdk/js?client-id={{config('app.paypal.id')}}&currency=USD"></script>
@endsection

@section('content')

    <!-- Login Form -->
    <div class="contact_form" style="height: calc(75vh - 110px )">
        <div class="container" >
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_form_container" >
                        <div class="contact_form_title d-flex justify-content-center">Haz tu Pago</div>
                        <form>
                          <div id="paypal-buttons"></div>
                          <script>
                            paypal.Buttons({
                              createOrder: function(data, actions) {
                                return actions.order.create({
                                  purchase_units: [{
                                    amount: {
                                      value: '{{$totalUSD}}'
                                    }
                                  }]
                                });
                              },
                              onApprove: function(data, actions) {
                                return actions.order.capture().then(function(details) {
                                  alert('Transacción completada por ' + details.payer.name.given_name);
                                });
                              },
                              onError: function(err) {
                                console.error(err);
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

@endsection