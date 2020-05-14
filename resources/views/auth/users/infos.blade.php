@extends('layouts.main')

@section('content')

    <a href="{{route('home')}}" class="text-decoration-none"><button class="btn btn-dark position-absolute" type="button">Retour</button></a>
    <br>

    <div class="col-md-4" style="margin-left: 33.33%">

        <h3 class="text-center">VOS INFORMATIONS PERSONNELLES</h3>
        <hr>

    <form action="#" method="POST" class="justify-content-center">

        <fieldset>

            <div class="required form-group form-ok">
                <label for="firstname" class="required"> Prénom </label>
                <input class="is_required validate form-control" data-validate="isName" type="text" id="firstname" name="firstname" value="{{Auth()->user()->firstname}}">
            </div>
            <div class="required form-group">
                <label for="lastname" class="required"> Nom </label>
                <input class="is_required validate form-control" data-validate="isName" type="text" name="lastname" id="lastname" value="{{Auth()->user()->name}}">
            </div>
            <div class="required form-group">
                <label for="email" class="required"> Adresse e-mail </label>
                <input class="is_required validate form-control" data-validate="isEmail" type="email" name="email" id="email" value="{{Auth()->user()->email}}">
            </div>

            <div class="form-group">
                <label for="password" class=""> Mot de passe</label>
                <input class="validate form-control" type="password" name="password" id="password" value="">
            </div>

            <div class="form-group">
                <label for="password_confirmation" class=""> Confirmation</label>
                <input class="validate form-control" type="password" name="password_confirmation" id="password_confirmation" value="">
            </div>

            <button type="submit" class="btn btn-dark">Enregister</button>

        </fieldset>

    </form>

    </div>

@endsection