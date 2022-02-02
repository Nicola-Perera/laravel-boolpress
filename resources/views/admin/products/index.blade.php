@extends('layouts.admin')

@section('content')

    <h1>Products</h1>
    <a href="{{ route('admin.products.create') }}" class="btn btn-dark" role="button">Create Product</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td><img src="{{ $product->image }}" alt="{{ $product->name }}" width="100"></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <!-- show -->
                    <a href="{{ route('products.show', $product->id) }}">
                        <i class="fas fa-eye fa-lg fa-fw"></i>
                    </a>
                    <i class="fas fa-pencil-alt fa-lg fa-fw"></i>
                    <i class="fas fa-trash fa-lg fa-fw"></i>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection