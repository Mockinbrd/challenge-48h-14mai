@extends('layouts.main')

@section('content')

    <a href="{{route('home')}}" class="text-decoration-none"><button class="btn btn-dark position-absolute" type="button">Retour</button></a>
    <br>

    <div class="col-md-4" style="margin-left: 33.33%">

        <h3 class="text-center">VOS ADRESSES</h3>
        <hr>

        <form action="#" method="POST" class="justify-content-center">

            <fieldset>

                <div class="required form-group form-ok">
                    <label for="address" class="required"> Adresse </label>
                    <input class="is_required validate form-control" data-validate="isAddress" type="text" id="address" name="address" value="{{Auth()->user()->address}}">
                </div>
                <div class="required form-group">
                    <label for="address" class="required"> Adresse - 2 (Optionnel) </label>
                    <input class="validate form-control" data-validate="isAddress2" type="text" name="address2" id="address2" value="{{Auth()->user()->address2}}">
                </div>
                <div class="required form-group">
                    <label for="zip" class="required"> Code Postal  </label>
                    <input class="is_required validate form-control" data-validate="isZIP" type="text" name="zip" id="zip" value="{{Auth()->user()->ZIP}}">
                </div>

                <div class="required form-group">
                    <label for="state" class=""> Province </label>
                    <input class="is_required validate form-control" type="text" name="state" id="state" value="{{Auth()->user()->state}}">
                </div>

                <div class="required form-group">
                    <label for="country" class=""> Pays </label>
                    <input class="is_required validate form-control" type="text" name="country" id="country" value="{{Auth()->user()->country}}">
                </div>

                <button type="submit" class="btn btn-dark">Enregister</button>

            </fieldset>

        </form>

    </div>

@endsection