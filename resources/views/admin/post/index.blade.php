@extends('templates.admin')

@section('content')

    <div style="display: none">
        {{ $titlePage = 'All posts' }}
    </div>

    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Likes</th>
                <th scope="col">Edit post</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></td>
                    <td>{{ Illuminate\Support\Str::limit($post->content, 175) }}</td>
                    <td>{{ $post->likes }}</td>
                    <td>
                        <div style="display: flex">
                            <form action="{{ route('post.delete', $post->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-primary">Delete</button>
                            </form>
                            <button onclick="window.location.href = '{{ route('admin.post.edit', $post->id) }}';" type="button" class="btn btn-primary" style="margin-left: 10px;">Edit</button>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="mt-3">
            {{ $posts->withQueryString()->links() }}
        </div>
    </div>

@endsection