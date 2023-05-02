@extends('templates.main')
@section('content')
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Likes</th>
                <th scope="col">Published</th>
            </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->likes }}</td>
                        <td>{{ $post->is_published }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
