@extends('layouts.default')
@section('content')
    <h1>Restaurants</h1>

    <section class="pt-5 pb-5">
        <div class="container w-100">
            <div class="row align-content-center">
                <a class="card p-2 col-md-3  no-gutters text-white   " href="/restaurants/français">
                    <img class="card-img h-100 shadow" src="{{ asset('images/restaurants/res_fr.jpg') }}" alt="Card image">
                    <div class="card-img-overlay p-1 d-flex  flex-column  align-items-baseline justify-content-center ">
                        <div class="container-fluid  h-50  text-center">
                            <div class="row h-100 align-items-center">
                                <div class="col-12">
                                    <h2 class="mt-3 mb-3 text-white bg-dark">Français</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="card p-2 col-md-3  no-gutters text-white   " href="/restaurants/italien">
                    <img class="card-img h-100 shadow" src="{{ asset('images/restaurants/res_ita.jpg') }}" alt="Card image">
                    <div class="card-img-overlay p-1 d-flex  flex-column  align-items-baseline justify-content-center ">
                        <div class="container-fluid  h-50  text-center">
                            <div class="row h-100 align-items-center">
                                <div class="col-12">
                                    <h2 class="mt-3 mb-3 text-white bg-dark">Italien</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="card p-2 col-md-3  no-gutters text-white   " href="/restaurants/asiatique">
                    <img class="card-img h-100 shadow" src="{{ asset('images/restaurants/res_asi.jpg') }}" alt="Card image">
                    <div class="card-img-overlay p-1 d-flex  flex-column  align-items-baseline justify-content-center ">
                        <div class="container-fluid  h-50  text-center">
                            <div class="row h-100 align-items-center">
                                <div class="col-12">
                                    <h2 class="mt-3 mb-3 text-white bg-dark">Asiatique</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
