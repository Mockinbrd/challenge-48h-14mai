@extends('layouts.main')

@section('content')

    <div class="col-md-12 my-5">
        <a href="{{ route('products.show', $product->slug) }}"><div class="text-center"><img src="{{ asset('storage/'.$product->image) }}" id="mainImage" title="{{$product->title}}" alt="Représentation d'une sneaker"></div></a>

        

            @if ($product->images)
            <div class="row text-center">
                <div class="col">
                    <img src="{{ asset('storage/'.$product->image) }}" class="img-thumbnail" title="{{$product->title}}" width="50%" alt="Représentation d'une sneaker">
                </div>
                @foreach (json_decode($product->images, true) as $image)
                    <div class="col">
                        <img src="{{ asset('storage/'.$image) }}" class="img-thumbnail" title="{{$product->title}}" alt="Représentation d'une sneaker" width="50%">
                    </div>
                @endforeach
            </div>
            @endif
        
        

        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">
                    @foreach ($product->categories as $category)
                        {{ $category->name }}{{ $loop->last ? '' : ', '}}
                    @endforeach
                </strong>
                <h5 class="mb-0 text-center">{{$product->title}}</h5>
                <div class="mb-1 text-muted text-center">{{$product->brand}}</div>
                <div class="mb-2 text-center"> {!! $product->description !!}</div>
                <p class="card-text mb-auto text-center">Lowest price: €{{$product->price}}</p>

                @if($stock === 'Disponible')
                <form action="{{ route('cart.store') }}" method="POST">

                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">

                    <button type="submit" class="btn btn-success float-right"><i class="fa fa-shopping-cart"></i> Ajouter au panier</button>

                </form>

                @else
                    <div class="badge badge-pill badge-danger my-2 py-2 w-25 mx-auto">{{$stock}}</div>
                @endif
            </div>
            </div>
        </div>
    </div>

@endsection

@section('extra-js')

<script>
    let mainImage = document.querySelector('#mainImage');
    let thumbnails = document.querySelectorAll('.img-thumbnail');

    thumbnails.forEach((element) => element.addEventListener('click', changeImage));
    function changeImage(e) {
        mainImage.src = this.src;
    }
</script>

@endsection