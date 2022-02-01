@extends('layouts.app')

@section('content')

    <div class="p-5 bg-light">
        <div class="container">
            <h1 class="display-3">Welcome</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit facere, dolore illo voluptate totam sapiente? Asperiores, molestiae amet, quia ex tenetur saepe dolores culpa, laborum beatae iure expedita enim vitae.</p>
            <hr class="my-2">
            <p>View my show</p>
            <p class="lead">
                <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg">Vai allo shop</a>
            </p>
        </div>
    </div>

@endsection
