@extends('templates.main')
@section('content')
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Likes</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></td>
                    <td>{{ Illuminate\Support\Str::limit($post->content, 200) }}</td>
                    <td>{{ $post->likes }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
