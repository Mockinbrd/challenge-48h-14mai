@extends('layouts.default')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Comparatives</title>
</head>
<style>
 
    .img{
        margin-left : 150px;
        padding : 15px;
    }

</style>
<body>
    <h1>Comparatives</h1>
    <div class = "container">
        <div>
            <hr>
            <h2>Carte des meilleurs patissers :</h2>
            <img class = "img" src="https://cdn.discordapp.com/attachments/517364842659577858/710766195829112902/Carte_patisier.jpg" alt="">
            <hr>
            <h2>Carte des meilleurs cordonniers :</h2>
            <img class = "img" src="https://media.discordapp.net/attachments/517364842659577858/710766944940195900/unknown.png?width=731&height=564" alt="">
        </div>
    </div>
</body>
</html>
@endsection
