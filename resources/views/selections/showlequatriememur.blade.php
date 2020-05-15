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
        <h1>Le Quatrième Mur</h1>
        <p>2 place de la Comédie, Bordeaux, 33000, France</p>
        <br>
        <h3>L'avis du Guide MICHELIN</h3>
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
