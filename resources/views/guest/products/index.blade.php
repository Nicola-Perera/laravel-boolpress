@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row gy-2">
            @foreach[$products as product]

            <div class="col-md-4">
                <div class="card">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">{{ $product->name }}</h4>
                        <p class="card-text">{{ $product->price }}</p>
                        <a href="{{ route('products.show', $product->id) }}">View product</a>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>

@endsection