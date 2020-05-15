@extends('layouts.default')
@section('content')
    <h1>Restaurants</h1>

    <div class="card-group">
        <div class="card px-2">
            <img class="card-img-top" style="height: 265px" src="{{ asset('images/restaurants/yumi.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Restaurant Yumi</h5>
                <p class="card-text">Adresse : 76 Quai des Chartrons</p>
                <p class="card-text">Tel : +33 5 57 10 74 14</p>
                <p class="card-text">FOURCHETTE DE PRIX : 5€ - 20€</p>
                <p class="card-text">CUISINES : Japonaise, Sushi, Asiatique</p>
            </div>
        </div>
        <div class="card px-2">
            <img class="card-img-top" style="height: 265px" src="{{ asset('images/restaurants/cancres.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Les Cancres</h5>
                <p class="card-text">Adresse : 3 rue David Johnston</p>
                <p class="card-text">Tel : +33 5 57 22 06 63</p>
                <p class="card-text">FOURCHETTE DE PRIX : 11€ - 15€</p>
                <p class="card-text">CUISINES : Pizza, Italienne</p>
            </div>
        </div>
        <div class="card px-2">
            <img class="card-img-top" style="height: 265px" src="{{ asset('images/restaurants/collation.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">La Collation</h5>
                <p class="card-text">Adresse : 5 rue de Guienne</p>
                <p class="card-text">Tel : +33 9 73 56 46 20</p>
                <p class="card-text">FOURCHETTE DE PRIX : 3€ - 21€</p>
                <p class="card-text">CUISINES : Française, Américaine, Cuisine de rue (street food)</p>
            </div>
        </div>
    </div>
@endsection
