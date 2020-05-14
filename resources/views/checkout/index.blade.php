@extends('layouts.main')

@section('extra-meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('extra-script')
<script src="https://js.stripe.com/v3/"></script>
@endsection


@section('content')

    <div class="col-md-12">
        <h1>Page de paiement</h1>
        <div class="my-4 row">
            <div class="col-md-6">
                <form id="payment-form" action="{{route('checkout.store')}}" method="POST">
                    @csrf
                    <div id="card-element">
                        <!-- Elements will create input elements here -->
                    </div>

                    <!-- We'll put the error messages in this element -->
                    <div id="card-errors" role="alert"></div>

                    <button id="submit" class="btn btn-success my-4">Payer (€ {{$total}})</button>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('extra-js')
    <script>
        var stripe = Stripe('pk_test_lX1zrtuazC7RvfwVaCh737OP00YniLJjLj');
        var elements = stripe.elements();
        var style = {
            base: {
                color: "#32325d",
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: "antialiased",
                fontSize: "16px",
                "::placeholder": {
                    color: "#aab7c4"
                }
            },
            invalid: {
                color: "#fa755a",
                iconColor: "#fa755a"
            }
        };
        var card = elements.create("card", { style: style });
        card.mount("#card-element");
        card.addEventListener('change', ({error}) => {
            const displayError = document.getElementById('card-errors');
            if (error) {
                displayError.classList.add('alrt', 'alert-warning');
                displayError.textContent = error.message;
            } else {
                displayError.classList.remove('alrt', 'alert-warning');
                displayError.textContent = '';
            }
        });
        var form = document.getElementById('payment-form');
        var submitButton = document.getElementById('submit');

        form.addEventListener('submit', function(ev) {
            ev.preventDefault();
            submitButton.disabled = true;
            stripe.confirmCardPayment("{{ $clientSecret }}", {
                payment_method: {
                    card: card,
                    /*billing_details: {
                        name: 'Jenny Rosen'
                    }*/
                }
            }).then(function(result) {
                if (result.error) {
                    // Show error to your customer (e.g., insufficient funds)
                    submitButton.disabled = false;
                    console.log(result.error.message);
                } else {
                    // The payment has been processed!
                    if (result.paymentIntent.status === 'succeeded') {
                        // Show a success message to your customer
                        // There's a risk of the customer closing the window before callback
                        // execution. Set up a webhook or plugin to listen for the
                        // payment_intent.succeeded event that handles any business critical
                        // post-payment actions.
                        let paymentIntent = result.paymentIntent;
                        let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                        let url = form.action;

                        fetch(
                            url,
                            {
                                headers: {
                                    "Content-Type": "application/json",
                                    "Accept": "application/json, text-plain, */*",
                                    "X-Requested-With": "XMLHttpRequest",
                                    "X-CSRF-TOKEN": token
                                },
                                method: 'post',
                                body: JSON.stringify({
                                    paymentIntent: paymentIntent,
                                })
                            }).then((data) => {
                            if (data.status === 400){
                                redirect = '/shop';
                            } else {
                                redirect = '/checkoutsuccess';
                            }
                            form.reset();
                            window.location.href = redirect;
                        }).catch((error) => {
                            console.error(error);
                        })
                    }
                }
            });
        });
    </script>
@endsection