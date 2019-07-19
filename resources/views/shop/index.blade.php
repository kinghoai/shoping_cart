@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($products as $product)
            <div class="col-6 col-lg-4 mt-3 mb-3">
                <div class="item border">
                    <div class="item__img d-flex justify-content-center align-items-center mb-3">
                        <img class="img-fluid" src="/{{$product->imagePath}}">
                    </div>
                    <div class="item__info">
                        <div class="item__title"><h3 class="text-center">{{$product->title}}</h3></div>
                        <div class="d-flex justify-content-between">
                            <div class="">$ {{$product->price}}</div>
                            <a href="{{route('product.addToCart', [$product->id])}}" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
