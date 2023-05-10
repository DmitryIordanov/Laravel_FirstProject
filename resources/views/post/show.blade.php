@extends('templates.main')
@section('content')
    <div>
        <h1><span>{{ $post->id }}. </span>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <span>Likes: {{ $post->likes }}</span>
        <p>Category: {{ $post->category->title }}</p>
    </div>
    <div>
        <form action="{{ route('post.delete', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-primary" style="margin-bottom: 5px;">Delete</button>
        </form>
        <button onclick="window.location.href = '{{ route('post.edit', $post->id) }}';" type="button" class="btn btn-primary" style="margin-bottom: 30px;">Edit</button>
        <h4><a href="{{ route('post.index') }}">Back</a></h4>
    </div>
@endsection
