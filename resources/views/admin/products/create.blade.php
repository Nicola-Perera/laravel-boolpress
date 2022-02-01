@extends('layouts.admin')

@section('content')

<h1>Create a new product</h1>

@include('partials.errors')

<form action="{{ route('admin.products.store') }}" method="post">
    @csrf

    <!-- create product name form -->
    <div class="mb-3">
        <label for="name" class="form-laber">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="product name" aria-describedby="nameHelper" value="{{ old('name') }}">
        <small id="nameHelper" class="text-muted">Type your product name</small>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- create product image insert form -->
    <div class="mb-3">
        <label for="image" class="form-laber">Image</label>
        <input type="text" name="image" id="image" class="form-control" placeholder="https://" aria-describedby="imageHelper" value="{{ old('image') }}">
        <small id="imageHelper" class="text-muted">Add your product image</small>
        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- create product add price form -->
    <div class="mb-3">
        <label for="price" class="form-laber">Price</label>
        <input type="number" step="0.01" name="price" id="price" class="form-control" placeholder="Add the price" aria-describedby="priceHelper" value="{{ old('price') }}">
        <small id="priceHelper" class="text-muted">Insert your product price</small>
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- create producy add quantity form -->
    <div class="mb-3">
        <label for="quantity" class="form-laber">Quantity</label>
        <input type="number" name="quantity" id="quantity" class="form-control" placeholder="quantity" aria-describedby="quantityHelper" value="{{ old('quantity') }}">
        <small id="quantityHelper" class="text-muted">Add your products quantity</small>
        @error('quantity')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- create product add description form -->
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" rows="5">{{ old('description') }}</textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button class="btn btn-dark" type="submit">Save</button>

</form>

@endsection