@extends('templates.main')
@section('content')
    <div class="show-page">
        <div><img width="1000" src="{{ $post->image }}" alt=""></div>
        <h1><span>{{ $post->id }}. </span>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <span>Likes: {{ $post->likes }}</span>
        <p>Category: {{ $post->category->title }}</p>
        <div>
            <h4><a href="{{ route('post.index') }}">Back</a></h4>
        </div>
    </div>
@endsection
