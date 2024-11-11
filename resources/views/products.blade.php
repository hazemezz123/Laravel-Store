<!-- resources/views/products.blade.php -->
@extends('layout')

@section('title', 'Products')

@section('content')
    <h2 class="my-4 text-center">Our Products</h2>
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img class="card-img-top" src="{{ $product->image }}" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                            <p class="card-text font-weight-bold text-success">${{ number_format($product->price, 2) }}</p>
                            <a href="#" class="btn btn-primary btn-block">Buy Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{ $products->links() }}
        </div>
    </div>
@endsection
