@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row gy-2">


                @foreach ($post as $post)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ $post->cover }}" alt="{{ $post->title }}" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">{{ $post->title }}</h4>
                            <a href="{{ route('posts.show', $post->id) }}">View post</a>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>

@endsection