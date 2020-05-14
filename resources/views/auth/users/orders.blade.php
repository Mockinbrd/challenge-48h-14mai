@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @foreach(Auth()->user()->orders as $order)
                            <div class="card">
                                <div class="card-header">
                                    Commande passée le {{Carbon\Carbon::parse($order->payment_created_at)->format('d/m/Y à H:i')}} d'un montant de <b>{{$order->amount/100}} €</b>
                                </div>
                                <div class="card-body">
                                    <p><b>Détail de la commande : </b></p>
                                    @foreach(unserialize($order->products) as $product)
                                        <div>Produit : {{$product[0]}}</div>
                                        <div>
                                            @if($product[2] > 1)
                                                <div>Prix : {{$product[1]*$product[2]}}€</div>
                                                Quantité : {{$product[2]}}
                                            @else
                                                <div>Prix : {{$product[1]}}€</div>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
