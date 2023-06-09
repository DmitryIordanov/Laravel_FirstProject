@extends('templates.admin')

@section('content')

    <div style="display: none">
        {{ $titlePage = 'Trash' }}
    </div>

    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Likes</th>
                <th scope="col">Created</th>
                <th scope="col">Recovery</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td style="max-width: 250px"><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></td>
                    <td>{{ Illuminate\Support\Str::limit($post->content, 150) }}</td>
                    <td>{{ $post->likes }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        <div style="display: flex">
                            <button onclick="window.location.href = '{{ route('admin.post.restore', $post->id) }}';" type="button" class="btn btn-primary">Restore</button>
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
