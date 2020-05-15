@extends('layouts.default')
@section('content')
<!DOCTYPE html>
<html lang="en">

<style>
    .selector-for-some-widget {
        box-sizing: content-box;
    }

    .fit-picture {
        width: 1050px;
    }

    .img {
        width: 35px;
    }

    /* étoiles */
    .rating {
    direction: rtl;
    }
    .rating a {
    color: #aaa;
    text-decoration: none;
    font-size: 1.5em;
    transition: color .4s;
    }
    .rating a:hover,
    .rating a:focus,
    .rating a:hover ~ a,
    .rating a:focus ~ a {
    color: orange;
    cursor: pointer;
    }


</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Le Quatrième Mur</title>
</head>

<body>
    <div class="container">
        <!-- Content here -->
        <img class="fit-picture" src="{{ asset('images/selections/restau.jpg') }}" alt="restau">
        <h1>Le Quatrième Mur </h1>
        <p>2 place de la Comédie, Bordeaux, 33000, France</p>
        <!-- ETOILES -->
        <p class="ratingBox" itemprop="aggregateRating" itemscope itemtype="http://schema.xyz/AggregateRating">
            <span title="3.42 / 5">
            <svg height="16" width="16">
            <polygon points="8,0 10.5,5 16,6 12,10 13,16 8,13 3,16 4,10 0,6 5.5,5" fill="Yellow" stroke="DarkKhaki" stroke-width=".5" />
            </svg>
            <svg height="16" width="16">
            <polygon points="8,0 10.5,5 16,6 12,10 13,16 8,13 3,16 4,10 0,6 5.5,5" fill="Yellow" stroke="DarkKhaki" stroke-width=".5" />
            </svg>
            <svg height="16" width="16">
            <polygon points="8,0 10.5,5 16,6 12,10 13,16 8,13 3,16 4,10 0,6 5.5,5" fill="Yellow" stroke="DarkKhaki" stroke-width=".5" />
            </svg>
            <svg height="16" width="16">
            <defs>
                <linearGradient id="starGradient">
                <stop offset="42%" stop-color="Yellow"/>
                <stop offset="42%" stop-color="LightGrey"/>
                </linearGradient>
            </defs>
            <polygon points="8,0 10.5,5 16,6 12,10 13,16 8,13 3,16 4,10 0,6 5.5,5" fill="url(#starGradient)" stroke="DarkKhaki" stroke-width=".5" />
            </svg>
            <svg height="16" width="16">
            <polygon points="8,0 10.5,5 16,6 12,10 13,16 8,13 3,16 4,10 0,6 5.5,5"  fill="LightGrey" stroke="DimGray" stroke-width=".5" />
            </svg>
            </span>
            <span style="display:none;"><span itemprop="ratingValue" class="rating" title="3.42">3.42</span><span > / </span><span itemprop="bestRating">5</span></span>
            </p>
        <div>
        <p>Concernant les tarifs : €€</p>
        <br>
        <h3>L'avis de Edge Water</h3>
        <p>Au théâtre, le quatrième mur est celui, invisible,
            qui sépare le public de la scène. Un nom tout choisi
            pour cette table installée dans les ors du Grand théâtre !
            Un produit de qualité, une cuisson précise, une garniture
            et un jus : Philippe Etchebest va à l'essentiel et nous
            régale en toute simplicité.</p>
        <br>
        <p> <img class="img" src="{{ asset('images/selections/assiette.PNG') }}" alt="restau"> Assiette • qualité des produits et tour de main du
            chef : un bon repas tout simplement</p>
        <p> <img class="img" src="{{ asset('images/selections/couvert.PNG') }}" alt="restau"> Standing simple. Nos plus belles adresses.</p>

        <h3>Equipements et services</h3>
        <p> <img class="img" src="{{ asset('images/selections/vin.PNG') }}" alt="restau"> Bonne sélection de vins</p>
        <p> <img class="img" src="{{ asset('images/selections/dehors.PNG') }}" alt="restau"> Possibilité de manger dehors</p>
        <p> <img class="img" src="{{ asset('images/selections/carte.PNG') }}" alt="restau"> Etablissement réservé partiellement ou entièrement aux
            non-fumeurs</p>
        <p> <img class="img" src="{{ asset('images/selections/clope.PNG') }}" alt="restau"> Carte de crédit American Express</p>

        <h3>Informations pratiques</h3>
        <p><img class="img" src="{{ asset('images/selections/tel.PNG') }}" alt="restau"> +33 5 56 02 49 70</p>
        <p><img class="img" src="{{ asset('images/selections/site.PNG') }}" alt="restau"> www.quatrieme-mur.com</p>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
    </div>
</body>
</body>

</html>
@endsection
