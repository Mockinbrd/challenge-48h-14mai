<head>

    <title>Edge Water</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img class="" src="{{ asset('images/edge-water-logo-white.jpg') }}" alt="" width="128px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navbarColor03">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/artisans">Artisans</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/restaurants">Restaurants</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/selections">Nos sélections</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/comparatives">Cartes comparatives</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="container">

    @yield('content')

</div>



</body>
