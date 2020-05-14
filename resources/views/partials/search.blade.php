<form action="{{route('products.search')}}" class="d-flex mr-3">

    <button type="submit" class="bg-transparent border-0 mx-2"><i class="fa fa-search fa-lg text-dark" aria-hidden="true"></i></button>

    <div class="form-group mr-3 mb-0">
        <input type="text" name="search" class="form-control" placeholder="Rechercher un produit..." value="{{request()->search ?? ''}}">
    </div>



</form>