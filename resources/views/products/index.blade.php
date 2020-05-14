@extends('layouts.main')

@section('content')

    <!-- <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
            <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
    </div>-->

    @foreach($products as $product)
        <div class="col-md-4">
            <a href="{{ route('products.show', $product->slug) }}"><div class="text-center"><img src="{{ asset('storage/'.$product->image) }}" title="{{$product->title}}" width="300" alt="Représentation d'une chaussure"></div></a>
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">
                        @foreach($product->categories as $category)
                            {{$category->name}}
                        @endforeach
                    </strong>
                    <h5 class="mb-0 text-center">{{$product->title}}</h5>
                    <div class="mb-1 text-muted text-center">{{$product->brand}}</div>
                    <p class="card-text mb-auto text-center">Lowest price: €{{$product->price}}</p>
                </div>
            </div>
        </div>
    @endforeach

    @if(request()->input())
        {{$products->appends(request()->input())->links()}}
    @endif

@endsection
