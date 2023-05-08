@extends('templates.main')
@section('content')
    <div>
        <h1><span>{{ $post->id }}. </span>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <span>Likes: {{ $post->likes }}</span>
        <p>Published: {{ $post->is_published }}</p>
    </div>
    <div>
        <button onclick="window.location.href = '{{ route('post.edit', $post->id) }}';" type="button" class="btn btn-primary" style="margin-bottom: 30px;">Edit</button>
        <h4><a href="{{ route('post.index') }}">Back</a></h4>
    </div>
@endsection
