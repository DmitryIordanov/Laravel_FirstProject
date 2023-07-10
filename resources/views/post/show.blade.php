@extends('templates.main')
@section('content')
    <div class="show-page">
        <div><img width="1000" src="{{ $post->image }}" alt=""></div>
        <h1><span>{{ $post->id }}. </span>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <div class="like-block-div">
            <form action="{{ route('post.likes', $post->id) }}" method="post">
                @csrf
                @method('patch')
                <button class="card-text" name="btn-likes"><i class="far fa-thumbs-up fa-lg"></i> {{ $post->likes }}</button>
            </form>
        </div>
        <p>Category: {{ $post->category->title }}</p>
        <div>
            <h4><a href="{{ route('post.index') }}">Back</a></h4>
        </div>
    </div>
@endsection
