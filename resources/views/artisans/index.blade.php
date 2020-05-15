@extends('layouts.default')
@section('content')
    <h1 class="text-center py-4">Artisans</h1>

    <section class="pt-5 pb-5">
        <div class="container w-100">
            <div class="row align-content-center">
                <a class="card p-2 col-md-3  no-gutters text-white   " data-toggle="modal" data-target=".bd-example-modal-lg">
                    <img class="card-img h-100 shadow" src="{{ asset('images/artisans/bijoutier.jpg') }}" alt="Card image">
                    <div class="card-img-overlay p-1 d-flex  flex-column  align-items-baseline justify-content-center ">
                        <div class="container-fluid  h-50  text-center">
                            <div class="row h-100 align-items-center">
                                <div class="col-12">
                                    <h2 class="mt-3 mb-3 text-white bg-dark">Bijoutier-joaillier</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="card p-2 col-md-3  no-gutters text-white   " data-toggle="modal" data-target=".bd-example-modal-lg">
                    <img class="card-img h-100 shadow" src="{{ asset('images/artisans/ebeniste.jpg') }}" alt="Card image">
                    <div class="card-img-overlay p-1 d-flex  flex-column  align-items-baseline justify-content-center ">
                        <div class="container-fluid  h-50  text-center">
                            <div class="row h-100 align-items-center">
                                <div class="col-12">
                                    <h2 class="mt-3 mb-3 text-white bg-dark">Ebeniste</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="card p-2 col-md-3  no-gutters text-white   " data-toggle="modal" data-target=".bd-example-modal-lg">
                    <img class="card-img h-100 shadow" src="{{ asset('images/artisans/tapissier.png') }}" alt="Card image">
                    <div class="card-img-overlay p-1 d-flex  flex-column  align-items-baseline justify-content-center ">
                        <div class="container-fluid  h-50  text-center">
                            <div class="row h-100 align-items-center">
                                <div class="col-12">
                                    <h2 class="mt-3 mb-3 text-white bg-dark">Tapissier</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="card p-2 col-md-3  no-gutters text-white   " data-toggle="modal" data-target=".bd-example-modal-lg">
                    <img class="card-img h-100 shadow" src="{{ asset('images/artisans/verre.jpg') }}" alt="Card image">
                    <div class="card-img-overlay p-1 d-flex  flex-column  align-items-baseline justify-content-center ">
                        <div class="container-fluid  h-50  text-center">
                            <div class="row h-100 align-items-center">
                                <div class="col-12">
                                    <h2 class="mt-3 mb-3 text-white bg-dark">Atelier du verre</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="card p-2 col-md-3  no-gutters text-white   " data-toggle="modal" data-target=".bd-example-modal-lg">
                    <img class="card-img h-100 shadow" src="{{ asset('images/artisans/abat-jouriste.jpg') }}" alt="Card image">
                    <div class="card-img-overlay p-1 d-flex  flex-column  align-items-baseline justify-content-center ">
                        <div class="container-fluid  h-50  text-center">
                            <div class="row h-100 align-items-center">
                                <div class="col-12">
                                    <h2 class="mt-3 mb-3 text-white bg-dark">Abat-jouriste</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="card p-2 col-md-3  no-gutters text-white   " data-toggle="modal" data-target=".bd-example-modal-lg">
                    <img class="card-img h-100 shadow" src="{{ asset('images/artisans/porcelaine.jpg') }}" alt="Card image">
                    <div class="card-img-overlay p-1 d-flex  flex-column  align-items-baseline justify-content-center ">
                        <div class="container-fluid  h-50  text-center">
                            <div class="row h-100 align-items-center">
                                <div class="col-12">
                                    <h2 class="mt-3 mb-3 text-white bg-dark">Porcelaine</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="card p-2 col-md-3  no-gutters text-white   " data-toggle="modal" data-target=".bd-example-modal-lg">
                    <img class="card-img h-100 shadow" src="{{ asset('images/artisans/sculpteur.jpg') }}" alt="Card image">
                    <div class="card-img-overlay p-1 d-flex  flex-column  align-items-baseline justify-content-center ">
                        <div class="container-fluid  h-50  text-center">
                            <div class="row h-100 align-items-center">
                                <div class="col-12">
                                    <h2 class="mt-3 mb-3 text-white bg-dark">Sculpteur</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="card p-2 col-md-3  no-gutters text-white   " data-toggle="modal" data-target=".bd-example-modal-lg">
                    <img class="card-img h-100 shadow" src="{{ asset('images/artisans/doreur.jpg') }}" alt="Card image">
                    <div class="card-img-overlay p-1 d-flex  flex-column  align-items-baseline justify-content-center ">
                        <div class="container-fluid  h-50  text-center">
                            <div class="row h-100 align-items-center">
                                <div class="col-12">
                                    <h2 class="mt-3 mb-3 text-white bg-dark">Doreur</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </section>
@endsection
