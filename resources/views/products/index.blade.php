@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">All Products</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-xs-18 col-sm-6 col-md-3">
                                    <div class="thumbnail">
                                        <img src="{{ asset($product->image) }}" alt="">
                                        <div class="caption text-center">
                                            <h4>{{ $product->name }}</h4>
                                            <p>{{ $product->description }}</p>
                                            <p><strong>Price: </strong> {{ $product->price }}$</p>
                                            <p class="btn-holder">
                                                <form id="addToCart-form" action="{{ route('cart.store') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                    <button type="submit" class="btn btn-outline-dark text-center">Add to cart</button>
                                                </form>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
