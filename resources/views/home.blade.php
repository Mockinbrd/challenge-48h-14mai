@extends('layouts.main')

@section('content')
<div class="container my-5 text-center">

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col col-lg-3 img-thumbnail bg-dark py-2">
            <a href="{{route('auth.users.orders')}}" class="text-white">
            <i class="fa fa-list"></i><br>
            <span>Historique de commande</span>
            </a>
        </div>
        <div class="col-md-auto img-thumbnail bg-dark py-2">
            <a href="{{route('auth.users.infos')}}" class="text-white">
            <i class="fa fa-info-circle"></i><br>
            <span>Mes informations personnelles</span>
            </a>
        </div>
        <div class="col col-lg-3 img-thumbnail bg-dark py-2">
            <a href="{{route('auth.users.addresses')}}" class="text-white">
            <i class="fa fa-address-book"></i><br>
            <span>Mes adresses</span>
            </a>
        </div>
    </div>


</div>
@endsection
