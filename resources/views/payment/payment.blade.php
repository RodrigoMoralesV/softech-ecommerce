@extends('layouts.base')

@section('css')
  <script src="https://www.paypal.com/sdk/js?client-id={{config('app.paypal.id')}}&currency=USD"></script>
@endsection

@section('content')
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
@endsection
